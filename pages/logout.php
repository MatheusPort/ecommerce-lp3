<?php
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['unsetcookies']))
    {
        unsetcookies();
    }
    function unsetcookies()
    {
        echo "unset";
        setcookie('email-norden', null, $hour);
        setcookie('senha-norden', null, $hour);
        setcookie('user-norden', null, $hour);

        echo '<script language="javascript">';
        echo 'alert("Deslogado com sucesso!")';
        echo '</script>';
        
        header("location: index.php");
    }
?>