<!-- Регистрация -->
<?php
    session_start();
    require_once 'connection.php';

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $patronymic = $_POST['patronymic'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeat = $_POST['repeat'];
    $rules = $_POST['rules'];

    if ($password === $repeat && $rules == "Yes") {
        //con...
        
      mysqli_query($connect, "INSERT INTO `user` (`id`, `name`, `surname`, `patronymic`, `login`, `email`, `password`) 
         VALUES (NULL, '$name', '$surname', '$patronymic', '$login', '$email', '$password')");
          $_SESSION['message'] = 'Регистрация прошла успешно';
          header('Location: ../pages/login.php');
  
    }else{
        $_SESSION['message'] = 'Проверьте правильность заполнения полей';
        header('Location: ../pages/registration.php'); 
      }
?>