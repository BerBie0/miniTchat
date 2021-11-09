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
?>

