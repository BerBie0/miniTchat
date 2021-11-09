<?php

    /*function user_exist($email,$password){
        global $db;
        $u = array(
            'email'=>$email,
            'password'=>$password
        );
        $sql = "SELECT * FROM users WHERE email=:email AND password=:password";
        $req = $db->prepare($sql);
        $req->execute($u);
        $exist = $req->rowCount($sql);
        return $exist;

    }*/

    function user_exist($email,$password){
        global $db;
        $u = array(
            'email'=>$email,
            'password'=>$password
        );
        $query = $db->prepare("SELECT * FROM users WHERE email=:email AND password=:password");
        $query->execute($u);
        $exist = $query->rowCount("SELECT * FROM users WHERE email=:email AND password=:password");
        return $exist;

    }
?>