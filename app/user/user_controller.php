<?php
   require "user.model.php";
   require "user.service.php";
   require "./app/conexao.php";

   session_start();
      
   $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

   if($acao == 'login'){

      $name_user = new User();
      $conexao = new Conexao();

      $userService = new UseService($conexao, $name_user);
      $users = $userService->login();

      //Value that enters the input becomes uppercase
      $string_name = $_POST['username'];
      $string_password = $_POST['password'];
      $user_name = strtoupper($string_name); 
      $user_password = strtoupper($string_password);

      //Validation of input value with registered in the database
      foreach($users as $user){
         if( ($user->name_user == $user_name || $user->email_user == $user_name) && $user->password_user == $user_password){
   
            $_SESSION['id'] = $user->id_user; 
            header('Location: index.php?login=Success');
   
         }else{
            header('Location: index.php?login=Erro');
         }
      };
   }

?>