<?php

/**
 * Class Connection.
 */
class Connection
{
    public static function connect($config)
    {
        try {
            $username = $config['database']['username'];
            return new PDO(
                'mysql:host=127.0.0.1;dbname=prova',
                $username,
                'NEhcL1w1W6ndDc6P');
        } catch (PDOException $e){
            die('Error connecting: ' . $e->getMessage() );
        }
    }

}