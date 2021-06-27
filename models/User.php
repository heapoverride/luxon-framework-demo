<?php

class User {
    public $Id;
    public $Username;

    static function login($username, $password) {
        $result = ORM::instance()
            ->select("users")
            ->where("username", $username)
            ->limit(1)
            ->exec();

        if (!$result->isError) {
            $row = $result->fetch();

            if (Password::verify($password, $row["password"])) {
                Session::set("userid", $row["id"]);
                Session::commit();

                return true;
            }
        }

        return false;
    }

    static function getCurrentUser() {
        if (Session::has("userid")) {
            $id = Session::get("userid");
            return self::getById($id);
        }

        return null;
    }

    static function getById($id) {
        $result = Database::query("SELECT * FROM users WHERE id = $", $id);

        if ($result->count === 1 && $row = $result->fetch()) {
            $user = new User();
            $user->Id = $row["id"];
            $user->Username = $row["username"];

            return $user;
        }

        return null;
    }
}