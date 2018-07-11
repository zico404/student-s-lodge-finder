<?php
/**
 *
 */
declare(strict_types=1);
class User
{
    private $db;
    function __construct()
    {
        $this->db = new Database;
    }

    // Find User by Email
    public function findUserByEmail(string $email): bool
    {
        $this->db->query('SELECT id FROM users WHERE email = :email');
        $this->db->bind(':email', $email);
        $row = $this->db->single();
        if ($this->db->rowCount() > 0){
            return true;
        }else {
            return false;
        }
    }

    //Register function
    public function register(array $data): bool
    {
        echo $data['last_name'];

        $query = 'INSERT INTO guest (first_name, last_name, email, password, token) VALUES (:first_name, :last_name, :email, :password, :token)';
        $this->db->query($query);

        // Bind values for security
        $this->db->bind(':first_name', $data['first_name']);
        $this->db->bind(':last_name', $data['last_name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':token', generate_unique_id());

        // Execute
        if ($this->db->execute()) {
            return true;
        }
        return false;
    }

    public function login(array $data): ?object
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $data['email']);

        $row = $this->db->single();

        $hashed_password = $row->password;

        if (password_verify($data['password'], $hashed_password)) {
            return $row;
        }
        return null;
    }

    public function storeSession(string $cookie, int $user_id): int
    {
        $query = 'INSERT INTO sessions (session_cookie, session_user_id, session_start_time) VALUES (:session_cookie, :session_user_id, NOW())';
        $this->db->query($query);
        $this->db->bind(':session_cookie', $cookie);
        $this->db->bind(':session_user_id', $user_id);
        if ($this->db->execute()) {
            return intval($this->db->lastInsertedId());
        }
        return 0;
    }

    public function deleteSession(int $user_id, string $cookie = null): bool
    {
        try {
            //if cookie is null, then delete all cookies related to the user_id
            if (is_null($cookie) && !is_null($user_id)) {
                $sql = 'DELETE FROM sessions WHERE session_user_id = :session_user_id';
                $this->db->query($sql);
                $this->db->bind(':session_user_id', $user_id);
                $this->db->execute();
                return true;
            }

            // if cookie is not null, then delete a specific cookie with user_id
            $sql = "DELETE FROM sessions WHERE (session_cookie = :session_cookie) AND (session_user_id = :session_user_id)";
            $this->db->query($sql);
            $this->db->bind(':session_cookie', $cookie);
            $this->db->bind(':session_user_id', $user_id);
            $this->db->execute();
            return true;
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getUserBySession(string $cookie): object
    {
        $sql = "SELECT *, UNIX_TIMESTAMP(session_start_time) AS session_time FROM sessions, users WHERE (session_cookie = :session_cookie) AND (session_user_id = id)";
        $this->db->query($sql);
        $this->db->bind(':session_cookie', $cookie);
        return $this->db->single();
    }
}
