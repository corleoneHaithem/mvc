<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of indexModel
 *
 * @author root
 */
class postModel extends model {
   public function getPost()
   {
       return array('title'=>'corleone','subject'=>'first post','content'=>'welcome to my first post');
   }
}

?>
