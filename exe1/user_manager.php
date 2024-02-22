<?php

class UserManager {
    protected $registeredUsers = [];

    public function registerUser($username, $password) {
        $this->registeredUsers[$username] = $password;
    }
    
    public function validateCredentials($username, $password) {
        if (isset($this->registeredUsers[$username])) {
            return $this->registeredUsers[$username] === $password;
        }
        return false;
    }
}
?>