<?php
  
    include_once('config/autoload.php');
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = 'SELECT * FROM user WHERE username=? AND password=?';
    $statement = $conn->prepare($query);
    $statement -> bind_param("ss", $username, $password);
    $statement -> execute();

    $result_set = $statement -> get_result();


    if ($result_set -> num_rows){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['is_logged_in'] = TRUE;
        header('Location: index.php');
    }
    else {
        header('Location: login.php');
    }
?>