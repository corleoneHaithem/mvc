<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of database
 *
 * @author root
 */
class database extends PDO {
    public function __construct() {
        parent::__construct(config::DB_DRIVER.':host='.config::DB_HOST.';dbname='.config::DB_NAME,config::DB_USER,config::DB_PASS);
    }
}
   
?>
