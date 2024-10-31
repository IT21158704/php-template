<?php

require_once '../src/models/User.php';

class UserController {
    public function showProfile($userId) {
        $userModel = new User();
        $userData = $userModel->getUserById($userId);
        return $userData;
    }
}
