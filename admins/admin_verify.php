<?php
session_start();
$data = simplexml_load_file("xml/data.xml");

$login = "";
$password = "";
$loginname = "";

for($i = 0; $i < count($data); $i++){

    $login = $data->login_details[$i]->login;
    $password = $data->login_details[$i]->password;
    $loginname = $data->login_details[$i]->login_name;


    if(empty($_POST["admin_name"]) || empty($_POST["admin_password"]))
    {
        $_SESSION['error']='Please fill in both username and password';
        exit(header("Location:login.php"));
    }


    if(($_POST["admin_name"] == $login) && ($_POST["admin_password"] == $password)){
        //set logged in
        $_SESSION['logged_in'] = true;
        //unset password no need to include that
        unset($data->login_details[$i]->password);

        //json encode the user stuff from the xml
        $_SESSION['user_details'] = json_encode($data->login_details[$i]);

        //goto admin
        exit(header("Location: ./index.php"));
    }
}

//as we have exited for loop (and therefore not been directed) we have a invalid login
$_SESSION['error']='Invalid username or password';
exit(header("Location:login.php"));
?>