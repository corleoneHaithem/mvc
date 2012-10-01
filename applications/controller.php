<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of controller
 *
 * @author root
 */
class controller {
     protected $_view;
    public function __construct() {
        $this->_view=new view(new request());
    }
}

?>
