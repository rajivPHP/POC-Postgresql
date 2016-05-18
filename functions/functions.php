<?php
/**
 * Created by PhpStorm.
 * User: aequalis
 * Date: 18/5/16
 * Time: 5:10 PM
 */
function dbConnect()
{
    global $dbconn;
    $dbconn = pg_Connect("host=localhost dbname=HCP user=postgres password=postgres");
    if (!$dbconn) {
        die("Connection Error" . pg_last_error());
        return false;
    } else {
        return $dbconn;
    }
}

function addUser($name, $email, $password, $role, $about_me)
{
    global $dbconn;
    if ($connect = dbConnect()) {
        $resultAddUser = pg_query($dbconn, "INSERT INTO hcp_users(name, email, password,role,about_me)
                  VALUES('$name','$email','$password','$role','$about_me');");
        if ($resultAddUser) {
            $numRows = pg_numrows($resultAddUser);
            return $numRows;
        } else {
            return false;
        }
    }
}

function loginUser($email, $password)
{
    global $dbconn;
    if ($connect = dbConnect()) {
        $resultLoginUser = pg_exec($dbconn, "SELECT * FROM hcp_users WHERE email='$email' AND password='$password'");
        if ($resultLoginUser) {
            $resultRows = pg_fetch_array($resultLoginUser);
            return $resultRows;
        } else {
            return false;
        }
    }
}

?>