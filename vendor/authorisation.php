<!-- Авторизация -->
<?php
    session_start();
    require_once 'connection.php';


    $login = $_POST['login'];
    $password = $_POST['password'];


    $check_user = mysqli_query($connect, "SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0){
        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['user'] = $user;
        if($_SESSION['user']['login'] == "admin"){
            header('Location: ../admin.php');
          }else{
            header('Location: ../index.php');
          }
        $_SESSION['message'] = 'Вы успешно вошли в систему' ;
   
    }else{
    $_SESSION['message'] = 'Не верный логин или пароль' ;
    header('Location: ../pages/login.php');
  }
?>