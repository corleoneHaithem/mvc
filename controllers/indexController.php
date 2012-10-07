<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of indexController
 *
 * @author root
 */
class indexController extends controller {
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    public function index()
    {
        
        $this->_view->post=$this->loadModel('post')->getPost();
        $this->_view->render('index');
        
    }
    
}

?>
