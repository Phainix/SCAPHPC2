<?php

namespace Controller;

use \Library\Database;

class User {

    public static function login($username, $password) {
        $db = new Database();
        $db->connect();

        $password = hash('sha256', $password);

        $db->prepare("SELECT * FROM USERS WHERE USERNAME = ? AND PASSWORD = ?");
        $db->result = $db->stmt->bind_param("ss", $username, $password);
        $db->excecute();
        $result = $db->stmt->get_result();

        $user = $result->fetch_assoc();

        if($user == null) {
            return false;
        }

        return new \Entity\User($user['id'], $user['username'], $user['email'], $user['type'] == 1);
    }

    public static function register($email, $username, $password) {
        $db = new Database();
        $db->connect();

        $password = hash('sha256', $password);

        $db->prepare("SELECT * FROM USERS WHERE USERNAME = ? OR EMAIL = ?");
        $db->result = $db->stmt->bind_param("ss", $username, $email);
        $db->excecute();
        $result = $db->stmt->get_result();

        if($result->num_rows > 0) {
            throw new \Exception("User account already exists");
        }

        $db->prepare("INSERT INTO USERS (username, email, password) VALUES(?, ?, ?)");
        $db->result = $db->stmt->bind_param("sss", $username, $email, $password);
        $db->excecute();
        
        return $db->result;

    }

}