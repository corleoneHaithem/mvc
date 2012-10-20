<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of blogController
 *
 * @author root
 */
class blogController extends controller{
    public function index()
    {
        echo "index";
    }
    public function login() {
        if(!empty($_POST) && $_POST['submit']=='Login')
        {
            if($this->loadModel('users')->login($_POST['username'],$_POST['password']))
            {
                $this->_view->logged=true;
                $this->_view->username=$_POST['username'];
                $this->_view->render('login');
            }
            else 
                $this->_view->error='login error';
        }
        $this->_view->title='login';
        $this->_view->render('login');
        
        
        
    }
    public function register()
    {
        $this->_view->render('register');
    }
   
    
}

?>
