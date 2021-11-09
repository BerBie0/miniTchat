<?php

    /*function email_taken($email){
        global $db;
        $e = array('email' => $email);
        $sql = 'SELECT * FROM users WHERE email = :email';
        $req = $db->prepare($sql);
        $req->execute($e);
        $free = $req->rowCount($sql);
        return $free;
    }*/

    function email_taken($email){
        global $db;
        $e = array('email' => $email);

        $query = $db->prepare("SELECT * FROM users WHERE email = :email");
        $query->execute($e);
        $free = $query->rowCount($query);
        return $free;
    }

    /*function email_taken($email){
        global $db;
        $query = $db->prepare("SELECT * FROM users WHERE email=?");
        $query->execute([$email]); 
        $user = $query->fetch();
            if ($user) {
                return 1;
            } else {
                return 0;
} 
    }*/

    /*function register($name, $email, $password){
        global $db;
        $r = array(
            'name'=>$name,
            'email'=>$email,
            'password'=>$password
        );
        $sql = "INSERT INTO users(name,email,password) VALUES(:name,:email,:password)";
        $req = $db->prepare($sql);
        $req->execute($r);
    }*/
    function register($name, $email, $password){
        global $db;
        $query =$db->prepare("INSERT INTO users(name,email,password) VALUES(:name,:email,:password)");
        $query->bindParam('name',$name,PDO::PARAM_STR);
        $query->bindParam('email', $email,PDO::PARAM_STR);
        $query->bindParam('password', $password,PDO::PARAM_STR);
        $query->execute();
    }