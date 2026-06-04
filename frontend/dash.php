<?php
    if(isset($_POST['login']))
        {
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            echo "User Name IS : ".$email;
            echo "User Password IS : ".$pass;
        }
?>