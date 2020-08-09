<?php

namespace Entity;

class User {
    public $id;
    public $username;
    public $email;
    public $admin = false;

    public function __construct($id, $username, $email, $admin = false) {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->admin = $admin;
    }
}