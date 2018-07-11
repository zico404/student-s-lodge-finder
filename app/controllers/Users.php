<?php

/**
 * Created by PhpStorm.
 * User: Kapersky Guru
 * Date: 5/20/2018
 * Time: 1:47 AM
 */
class Users extends Controller
{
    private $userModel;
    const COOKIE_NAME = "auth_cookie";
    const SESSION_TIME = 604800; // 7 days in sec
    private $s_authenticated = false;

    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Sanitizing Input values
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $err_code = 0;

            // Storing Input data to data array
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_err' => '',
                'password_err' => ''
            ];
            // validate Password
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter a password';
                $err_code = 1;
            }

            // validate email
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter email';
                $err_code = 1;
            }

            if (!$this->userModel->findUserByEmail($data['email'])) {
                 $data['email_err'] = 'No user found';
                 $err_code = 1;
            }
            // Making sure there is no error found
            if ($err_code == 0) {
                // Process information
                $loggedInUser = $this->userModel->login($data);

                if ($loggedInUser) {
                    // Create Session
                    if ($this->createUserSession($loggedInUser)) {
                        redirector('dashboards/');
                    }
                }else {
                    $data['password_err'] = 'Email and password combination not correct';
                    $this->view('user/login', $data);
                }

            } else {
                $this->view('user/login', $data);
            }

        } else {

            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => ''
            ];

            $this->view('user/login', $data);
        }

    }

    public function signup()
    {
        // Check for POST Request
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Process form here

            // Sanitizing Input values
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $err_code = 0;

            // Storing Input data to data array
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'first_name' => trim($_POST['first_name']),
                'last_name' => trim($_POST['last_name']),
                'confirm_password' => trim($_POST['confirm_password']),
                'email_err' => '',
                'password_err' => '',
                'first_name_err' => '',
                'last_name_err' => '',
                'confirm_password_err' => '',
            ];

            // validate email
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter email';
                $err_code = 1;
            } else {
                if($this->userModel->findUserByEmail($data['email'])) {
                    $data['email_err'] = 'Email already exist';
                    $err_code = 1;
                }
            }

            // validate First Name
            if (empty($data['first_name'])) {
                $data['first_name_err'] = 'Please enter first name';
                $err_code = 1;
            }

            // validate Last Name
            if (empty($data['last_name'])) {
                $data['last_name_err'] = 'Please enter your last name';
                $err_code = 1;
            }

            // validate Password
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter a password';
                $err_code = 1;
            } elseif (strlen($data['password']) < 6) {
                $data['password_err'] = 'Password must be at least 6 characters';
                $err_code = 1;
            }

            // validate Confirm Password
            if (empty($data['confirm_password'])) {
                $data['confirm_password_err'] = 'Please confirm password';
                $err_code = 1;
            } else {
                if ($data['password'] != $data['confirm_password']) {
                    $data['confirm_password_err'] = 'Please do not match';
                    $err_code = 1;
                }
            }

            // Making sure there is no error found
            if($err_code == 0) {
                // validated, proceed to register

                //generate secure password hash
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //
                if ($this->userModel->register($data)) {
                    flash('register_message', 'Successfully Registered, Please verify your account');
                    redirector('users/login');
                } else {
                    flash('register_message', 'Something happens, try again');
                }

            } else {
                // Load view here
                $this->view('user/signup', $data);
            }

        } else {
            // Initialize data here
            $data = [
                'email' => '',
                'password' => '',
                'first_name' => '',
                'last_name' => '',
                'confirm_password' => '',
                'email_err' => '',
                'password_err' => '',
                'first_name_err' => '',
                'last_name_err' => '',
                'confirm_password_err' => '',
            ];
            // Load view with data
            $this->view('user/signup', $data);
        }
    }

    private function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->id;
        // $_SESSION['user_email'] = $user->email;
        // $_SESSION['user_name'] = $user->firstname ." ". $user->lastname;
        if ($this->create_session()) {
            $this->is_authenticated = true;
            return true;
        }
        return false;
    }

    public function create_session()
    {
        $cookie = bin2hex(random_bytes(16));
        $user_id = $_SESSION['user_id'];
        $session_id = $this->userModel->storeSession(md5($cookie), $user_id);
        if ($session_id) {
            setcookie(self::COOKIE_NAME, $cookie, time() + self::SESSION_TIME, '/');
            $_COOKIE[self::COOKIE_NAME] = $cookie;
            return true;
        }
        return false;
    }

    public function logout($user_id, $close_all_sessions = false)
    {
        try {

            $cookie_md5 = md5($_COOKIE[self::COOKIE_NAME]);

            if ($close_all_sessions) {
                $this->userModel->deleteSession($_SESSION['user_id']);
            }

            $this->userModel->deleteSession($_SESSION['user_id'], $cookie_md5);


            setcookie(self::COOKIE_NAME, '', 0, '/');
            $_COOKIE[self::COOKIE_NAME] = null;

            $_SESSION['user_id'] = null;
            unset($_SESSION['user_id']);
            $this->is_authenticated = false;
            redirector('');
        } catch (Exception $e) {
             echo $e->getMessage();
        }
    }

    public function remember_login()
    {
        try {
            if (array_key_exists(self::COOKIE_NAME, $_COOKIE)) {
                $cookie_md5 = md5($_COOKIE[self::COOKIE_NAME]);

                if ($res = $this->userModel->getUserBySession($cookie_md5)) {
                    $this->is_authenticated = true;
                    $_SESSION['user_id'] = $res->user_id;
                }
            }
            return true;
        } catch (Error $e) {
            return false;
        }
    }


}
