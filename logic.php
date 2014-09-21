<?php

if( isset($_POST['hyphen'])){
    include 'generatePasswordH.php';
    generatePasswordH();
}

else{
      include 'generatePassword.php';
    generatePassword();
  
}

?>