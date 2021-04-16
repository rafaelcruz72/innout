<?php

require_once(realpath(MODEL_PATH . '/User.php'));

class Login extends Model {
   
    public function checkLogin() {
        $user = User::get(['email' => $this->email]);
        if($user) {
            if(password_verify($this->password, $user->password)) {
                return $user;
            }
        }
        throw new Excception();
    }
}