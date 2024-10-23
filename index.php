<?php

    session_start();

    require_once('src/lib/outils.php');
    require_once('src/lib/database.php');

    require_once('src/controller/controller.php');

    if (isset($_REQUEST['action']) ){

        if ($_REQUEST['action'] == 'con') 
        {
            
            if ( !empty($_REQUEST['user_id']) ) 
            {

                $usertaptab = explode("@", $_REQUEST['user_id']);
                
                $userid = strtolower( $_REQUEST['user_id'] );
                $password = $_REQUEST['password'];

                $controller = new Controller();
                $controller->check_user($userid,$password);

            } 
            else 
            {

                $error="remplissez tous les champs";
                require('template/connexion.php');
                
            }

        }
        else if($_REQUEST['action'] == 'chgpwd')
        {   
            $controller = new Controller();
            $controller->change_password();
        }
        else if($_REQUEST['action'] == 'portal')
        {   
            require('template/portal.php');
        }
        else if($_REQUEST['action'] == 'vtc')
        {   
            header('location:'.$SERVERPATH.'vtc');
        }
        else if($_REQUEST['action'] == 'btl')
        {   
            header('location:'.$SERVERPATH.'btl');
        }
        else if($_REQUEST['action'] == 'prod')
        {   
            header('location:'.$SERVERPATH.'prod');
        }
        else if($_REQUEST['action'] == 'immo')
        {   
            header('location:'.$SERVERPATH.'immo');
        }
        else if($_REQUEST['action'] == 'buy')
        {   
            header('location:'.$SERVERPATH.'buy');
        }
        else if($_REQUEST['action'] == 'sell')
        {   
            header('location:'.$SERVERPATH.'sell');
        }
        else if($_REQUEST['action'] == 'courrier')
        {   
            header('location:'.$SERVERPATH.'courrier');
        }
        else if($_REQUEST['action'] == 'treso')
        {   
            header('location:'.$SERVERPATH.'tresorerie');
        }
        else if($_REQUEST['action'] == 'besoin')
        {   
            header('location:'.$SERVERPATH.'besoin');
        }
        else if($_REQUEST['action'] == 'reunion')
        {   
            header('location:'.$SERVERPATH.'reunion');
        }
        else
        {
            session_destroy(); 
            require('template/connexion.php');
        }

    } else {

        if(empty($_SESSION['matricule'])) 
        {                
            session_destroy(); 
            require("template/connexion.php");
        }
        else
        {
            require('template/portal.php');
        }

    }