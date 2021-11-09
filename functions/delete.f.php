<?php

function delete($user){
    global $db;
    $query = $db->prepare("DELETE FROM users where email='$user'");
    $query->execute();
}