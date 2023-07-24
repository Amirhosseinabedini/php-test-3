<?php

namespace Classes\Authentication;

class User
{
    private $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;
    }

    private function validateEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    private function validatePassword($password)
    {
        return (strlen($password) >= 6);
    }

    private function checkUserExists($email)
    {
        $fileContent = file_get_contents($this->fileName);
        $emailExists = (strpos($fileContent, "Email: " . $email) !== false);
        return $emailExists;
    }

    private function hashPassword($password)
    {
        return hash('sha256', $password); 
    }

    public function signupUser($email, $password)
    {
        if (!$this->validateEmail($email)) {
            return 5; // Invalid email format
        }

        if (!$this->validatePassword($password)) {
            return 6; // Invalid password format
        }

        if ($this->checkUserExists($email)) {
            return 1; // User already exists
        } else {
            $hashedPassword = $this->hashPassword($password);
            $data = "Email: " . $email . "\n" . "Password: " . $hashedPassword . "\n\n";
            if (file_put_contents($this->fileName, $data, FILE_APPEND)) {
                return 2; // User added successfully
            } else {
                return 0; // Error writing new user
            }
        }
    }

    public function checkLogin($email, $password)
    {
        if (!$this->validateEmail($email)) {
            return 5; // Invalid email format
        }

        if (!$this->validatePassword($password)) {
            return 6; // Invalid password format
        }

        $fileContent = file_get_contents($this->fileName);
        $emailExists = (strpos($fileContent, "Email: " . $email) !== false);
        $hashedPassword = $this->hashPassword($password);
        $passwordExists = (strpos($fileContent, "Password: " . $hashedPassword) !== false);

        if ($emailExists && $passwordExists) {
            $_SESSION['loggedin'] = true;
            return 1; // Login successful
        } else {
            return 0; // Login failed
        }
    }

    public function logout()
    {
        $_SESSION['loggedin'] = false;
        session_unset();
        session_destroy();
    }
}
