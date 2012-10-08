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
       $sql='SELECT subject,title FROM post';
       $result=$this->_db->query($sql);
       return $result->fetch();
   }
}

?>
