<?php

/**
 * @author Rogerio Regis
 */
require_once 'config.php';

abstract class Connect {

    private static $instance = null;

    private static function conectar() {

        try {
            if ((self::$instance) == null):
                self::$instance = new PDO('pgsql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            endif;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return self::$instance;
    }

    protected static function getDB() {
        return self::conectar();
    }

}
