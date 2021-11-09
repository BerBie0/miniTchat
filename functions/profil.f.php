<?php

    function get_membres(){
        global $db;
        $query = $db->query("SELECT * FROM users");
        $results = array();
        while($rows = $query->fetchObject()){
            $results[] = $rows;
        }
        return $results;
    }

    function change($name, $email, $password, $id){
        global $db;
        $query =$db->prepare("UPDATE users set name='$name', email='$email', password='$password' WHERE id = $id");
        $query->bindParam('name',$name,PDO::PARAM_STR);
        $query->bindParam('email', $email,PDO::PARAM_STR);
        $query->bindParam('password', $password,PDO::PARAM_STR);
        $query->execute();
    }

    function email_taken($email){
        global $db;
        $e = array('email' => $email);

        $query = $db->prepare("SELECT * FROM users WHERE email = :email");
        $query->execute($e);
        $free = $query->rowCount($query);
        return $free;
    }

    function change_messages($oldMail, $newMail){
        global $db;
        $membre = $_SESSION['tchat'];

        $req = $db->query("SELECT * FROM messages WHERE (sender='$membre') OR (receiver='$membre')");
        $results = array();

        while($rows = $req->fetchObject()){
            $results[] = $rows;
        }

    foreach($results as $message){
        if($message->sender == $oldMail){
            global $db;
            $id = $message->id;
            $query =$db->prepare("UPDATE messages set sender='$newMail' WHERE id = $id");
            $query->execute();
        }
        if($message->receiver == $oldMail){
            global $db;
            $id = $message->id;
            $query =$db->prepare("UPDATE messages set receiver='$newMail' WHERE id = $id");
            $query->execute();
        }
        ($message->sender == $membre);
        
    }
}
?>

