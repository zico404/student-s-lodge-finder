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

        $query = 'INSERT INTO users (first_name, last_name, email, password, token) VALUES (:first_name, :last_name, :email, :password, :token)';
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

    public function login(array $data)
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
}
