<?php
/**
 * Created by PhpStorm.
 * User: quocthangvu
 * Date: 7/25/2016
 * Time: 9:44 AM
 */
class DB{
    private static $instance;
    private $MySQLi;
    private function __construct(array $dbOptions){

        $this->MySQLi = new mysqli($dbOptions['db_host'],$dbOptions['db_user'],$dbOptions['db_pass'],$dbOptions['db_name']);

        if(mysqli_connect_errno()){
            throw new Exception("connect error");
        }


        $this->MySQLi->set_charset("utf8");
    }

    
}