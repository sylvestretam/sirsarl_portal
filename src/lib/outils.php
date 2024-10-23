<?php

    define('PASSWORD_LIFETIME', 90); //90 jours
    
    $SERVERPATH="http://localhost/";
    // $SERVERPATH="https://vps-1b00c55a.vps.ovh.net/";

    function check_exprired($date)
    {
        $today = date("Y-m-d");
        $formatdate = new DateTime($date);

        $interval = date_diff(new DateTime($today),$formatdate);

        if( $interval->days >= PASSWORD_LIFETIME )
        {
            return 'EXPIRED';
        }
        else
        {
            return 'NOT EXPIRED';
        }

    }