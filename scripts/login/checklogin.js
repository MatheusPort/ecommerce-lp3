$(document).ready(function(){
    token = sessionStorage.getItem("token");

    if(token != null){
        window.location.href = "myaccount.php";
    }
}) 