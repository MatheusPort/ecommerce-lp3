<?php

function loginprocess($email,$senha){
  $serverName = "localhost\SQLEXPRESS"; //serverName\instanceName
  $connectionInfo = array( "Database"=>"Norden", "UID"=>"sa", "PWD"=>"123456", "CharacterSet" => "UTF-8");
  $conn = sqlsrv_connect( $serverName, $connectionInfo);
  
  $sql = "SELECT senha,usuario FROM Usuario WHERE email = '$email'";

  $params = array();
  $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
  $stmt = sqlsrv_query( $conn, $sql , $params, $options );
  
  $row_count = sqlsrv_num_rows( $stmt );

  if($row_count >= 1){
  
  while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        
    if($row['senha'] == $senha){
      echo("Logado com sucesso!");
      $hour = time() + 3600 * 24 * 30;
      setcookie('email-norden', $email, $hour);
      setcookie('senha-norden', $email, $hour);
      setcookie('user-norden', $row['usuario'], $hour);
      echo "<script>alert('Logado com sucesso!);location.href=\"index.php\";</script>";
      header("location: index.php");
    }else{
       echo("Senha incorreta, tente novamente!");

       header( "refresh:3;url=login.php" );
    }

  }
}
      if (!$row_count === false)
      while( $row = sqlsrv_fetch_array( $stmt) ) {
            print json_encode($row);
      }
  sqlsrv_close($conn);
}


$email = $_POST['e_mail'];
$senha = $_POST['pass']; 

if($email != null && senha != null)
loginprocess($email,$senha);
else
echo("Email ou senha incorretos, tente novamente!");
header( "refresh:3;url=login.php" );
?>