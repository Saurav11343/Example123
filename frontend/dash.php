<?php
    if(isset($_POST['login']))
        {
            $emial = $_POST['email'];
            $pass = $_POST['pass'];

            echo "User Name IS : ".$email;
            echo "User Password IS : ".$pass;
        }
?>