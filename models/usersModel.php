<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usersModel
 *
 * @author root
 */
class usersModel extends model {
   public function login($username,$password)
   {
       $req=$this->_db->query('SELECT * FROM users');
       
       while($result=$req->fetch())
       {
           if($result['username']==$username && $result['password']==$password)
           {
               return true;
           }
           else
           {
               return false;
           }
           
       }
   }
}

?>
