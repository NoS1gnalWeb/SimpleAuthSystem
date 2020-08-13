<?php 
        require_once 'AuthSystem/authsystem.class.php';
    

        $auth = new AuthSystem();
        // Connect database
        $auth->Connect('localhost', 'authsystem', 'root', '');

        $auth->Fetch('auth');

        