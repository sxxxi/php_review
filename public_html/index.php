<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $uname = $_POST['username'];
        if ($uname == 'Skibidi') {
            header('Location: standalone.php');
        } elseif ($uname == 'Toilet') {

        } else {

        }
    }

?>


<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>

        <?php
            # Variables
            $admin_uname = 'Skibidi';
            $admin_pwd = 'Toilet';
            $authenticated = false;
            /*
            PREDEFINED VARIABLES (PHP 8)
                Superglobals — Built-in variables that are always available in all scopes
                $GLOBALS — References all variables available in global scope
                $_SERVER — Server and execution environment information
                $_GET — HTTP GET variables
                $_POST — HTTP POST variables
                $_FILES — HTTP File Upload variables
                $_REQUEST — HTTP Request variables
                $_SESSION — Session variables
                $_ENV — Environment variables
                $_COOKIE — HTTP Cookies
                $php_errormsg — The previous error message
                $http_response_header — HTTP response headers
                $argc — The number of arguments passed to script
                $argv — Array of arguments passed to script
            */
        ?>


        <form method='POST' action=''>
            <input type='text' maxlength='25' name='username' />
            <input type='submit' value='Submit' />
        </form>

    </body>
</html>