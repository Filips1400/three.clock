<?php
   $name = filter_var(trim($_POST['name']),
   FILTER_SANITIZE_STRING);
   $phone = filter_var(trim($_POST['phone']),
   FILTER_SANITIZE_STRING);
   if(mb_strlen($name) < 2 || mb_strlen($name) > 15) {
       exit();
   } else if (mb_strlen($phone) < 10 || mb_strlen($phone) > 13){
       exit();
   }
   $mysql = new mysqli('localhost', 'root', 'root', 'test');
   $mysql->query("INSERT INTO `users` (`name`, `phone`) VALUES('$name', '$phone')");
   $mysql->close();

   header('Location: /');
?>