<?php

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$ok = true;
$message = array();

if( !isset($username) || empty($username)){

    $ok = false;
    $message[] =  'Username cannot be empty!';

}


if( !isset($password) || empty($password)){

    $ok = false;
    $message[] = 'Password cannot be empty!';
}

if($ok){

    if($username === 'john'&& $password === 'john123'){
        $ok = true;
        $message[]= 'Succesful Login';
    }else{
        $ok = false;
        $message[]= 'Incorrect username/password combination';

    }
}

echo json_encode(
    array(
        'ok' => $ok,
        'message' => $message
        )
    );
?>