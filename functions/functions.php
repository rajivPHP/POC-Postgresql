<?php
/**
 * Created by PhpStorm.
 * User: Rajiv
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
        $numRowsUser = pg_affected_rows($resultAddUser);
        if ($numRowsUser)
            return $numRowsUser;
        else
            return false;
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

function addEvents($name, $email, $phone, $event, $questions)
{
    global $dbconn;
    if ($connect = dbConnect()) {
        $resultAddEvents = pg_query($dbconn, "INSERT INTO hcp_events(name, email, phone,event,questions)
                  VALUES('$name','$email','$phone','$event','$questions');");
        $numRowsEvents = pg_affected_rows($resultAddEvents);
        if ($numRowsEvents)
            return $numRowsEvents;
        else
            return false;
    }
}

function addSampleRequest($name, $email, $phone, $medicine)
{
    global $dbconn;
    if ($connect = dbConnect()) {
        $resultAddSampleRequest = pg_query($dbconn, "INSERT INTO hcp_sample_request(name, email, phone,medicine)
                  VALUES('$name','$email','$phone','$medicine');");
        $numRowsSampleRequest = pg_affected_rows($resultAddSampleRequest);
        if ($numRowsSampleRequest)
            return $numRowsSampleRequest;
        else
            return false;
    }
}

function addLiteratureRequest($name, $email, $phone, $medicine, $additional_notes)
{
    global $dbconn;
    if ($connect = dbConnect()) {
        $resultAddLiteratureRequest = pg_query($dbconn, "INSERT INTO hcp_literature_request(name, email, phone,medicine,additional_notes)
                  VALUES('$name','$email','$phone','$medicine','$additional_notes');");
        $numRowsLiteratureRequest = pg_affected_rows($resultAddLiteratureRequest);
        return $numRowsLiteratureRequest;
    }
}

function addNewsLetter($email)
{
    global $dbconn;
    if ($connect = dbConnect()) {
        $resultAddNewsLetter = pg_query($dbconn, "INSERT INTO hcp_news_letter(email)
                  VALUES('$email');");
        $numRowsNewsLetter = pg_affected_rows($resultAddNewsLetter);
        return $numRowsNewsLetter;
    }
}

?>