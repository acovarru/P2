<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function generatePassword(){
    
    
    include 'functions.php';
    
    $length=0;
if( isset($_POST['symbol_number'])){
    $length=$_POST['symbol_number'];
}
else{
    $length=1;
}
    
//$generate= new generate();
if( isset($_POST['word_number'])&&isset($_POST['number'])&&isset($_POST['symbol']) ){
  //  echo $_POST["word_number"];
    
    if(isset($_POST['upper'])){
      
       cap_word($_POST["word_number"]);
    }
    else
    {
        show_word($_POST["word_number"]);
    }
    
   echo random_number(); 
   echo show_symbol($length)."\n"; 
}


else
if( isset($_POST['word_number'])&&isset($_POST['number']) ){
  //  echo $_POST["word_number"];
   if(isset($_POST['upper'])){
       cap_word($_POST["word_number"]);
    }
    else
    {
        show_word($_POST["word_number"]);
    }
    

   echo random_number()."\n"; 
}

else
if( isset($_POST['word_number'])&&isset($_POST['symbol']) ){
  //  echo $_POST["word_number"];
    if(isset($_POST['upper'])){
        cap_word($_POST["word_number"]);
    }
    else
    {
        show_word($_POST["word_number"]);
    }
    
   
   echo show_symbol($length)."\n"; 
}


else
if( isset($_POST['word_number'])&&isset($_POST['upper']) ){
  //  echo $_POST["word_number"];
 // $example=show_word($_POST["word_number"]);
//echo $example;  
//echo ucfirst($example);
   cap_word($_POST["word_number"]);
    //echo cap_word(show_word($_POST["word_number"]));
   

}



else
    if ( isset($_POST['word_number']) ){
  //  echo $_POST["word_number"];
    
      
    show_word($_POST["word_number"]);
         
   
}

    
}
?>
