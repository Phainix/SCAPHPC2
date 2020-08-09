<?php

namespace Library;

class Validator {

    public static function validateMax($field, $text, $max) {
        if(strlen($text) > $max) {
            return "$field must contain $max characters or less";
        }
        return null;
    }

    public static function validateText($field, $text, $max, $min = 0) {
        if(empty($text)) {
            return "$field must contain a valid value";
        }
        if(is_numeric($text)) {
            return "$field must not contain numbers";
        }
        if(strlen($text) > $max) {
            return "$field must contain $max characters or less";
        }
        if(strlen($text) < $min) {
            return "$field must contain $max characters or more";
        }
        return null;
    }

    public static function validateNumber($field, $number) {
        if(empty($number)) {
            return "$field must contain a valid value";
        }
        if(!filter_var($number, FILTER_VALIDATE_FLOAT)) {
            return "$field must contain a valid number";
        }
        return null;
    }

    public static function validateValue($field, $value) {
        if(empty($value)) {
            return "$field must contain a valid value";
        }
        return null;
    }

    public static function validateEmail($field, $email) {
        if(empty($email)) {
            return "$field must contain a valid value";
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "$field must contain a valid email";
        }
        return null;
    }

}