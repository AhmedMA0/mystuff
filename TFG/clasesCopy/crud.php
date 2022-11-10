<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    session_start();

/**
 * @author web.ahmed.m@gmail.com
 * @abstract
 */
abstract class Crud{

    /**
     * @abstract
     */
    abstract static function crear();

    /**
     * @abstract
     */
    abstract static function leer();

    /**
     * @abstract
     */
    abstract static function actualizar();

    /**
     * @abstract
     */
    abstract static function borrar();

}

?>