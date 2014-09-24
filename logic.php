<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of logic.php
 *
 * @author acovarru
 */


if( isset($_POST['hyphen'])){
    include 'generatePasswordH.php';
    generatePasswordH();
}

else{
      include 'generatePassword.php';
    generatePassword();
  
}

?>