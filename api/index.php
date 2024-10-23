<?php
    session_start();

    require_once('../src/lib/outils.php');
    require_once('../src/lib/database.php');

    require_once('../src/controller/APIController.php');


    if(!empty($_REQUEST["operation"]))
    {
        $controller = new APIController();

        switch ($_REQUEST["operation"]) {

            case 'checkUser':
                $userid = $_REQUEST["id"];
                $password = $_REQUEST["password"];
                $controller->check_user($userid,$password);
                // print 'Hello Word !!!';
                break;
            case 'ChangePassword':
                // var_dump($_REQUEST);
                $controller->change_password();
                // print 'Hello Word !!!';
                break;
                
            default:
                # code...
                break;

        }
    }