<?php
use Dbh;

class Attrations extends Dbh
{
    public function getUsers()
    {
        $users = $pdo->query("SELECT * FROM `attrations`");

        while ($row = $users->fetch()) {
            // echo $row['name'] . '<br>';
            return "WOW!!!!!";
        }
    }

    
}