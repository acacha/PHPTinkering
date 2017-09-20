<?php

/**
 * Class Connection.
 */
class Connection
{
    public static function connect()
    {
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=prova','debian-sys-maint','NEhcL1w1W6ndDc6P');
        } catch (PDOException $e){
            die('Error connecting: ' . $e->getMessage() );
        }
    }

}