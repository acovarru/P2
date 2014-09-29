<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of generatePassword.php
 *
 * @author acovarru
 */

function generatePassword(){
    
    
    include 'functions.php';
    
    

//if( isset($_POST['symbol_number'])){
  
    //$length=$_POST['symbol_number'];
//}
 if(($_POST['word_number'])<10){

    
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
   
   if( isset($_POST['symbol_number'])){
  
     if(($_POST['symbol_number'])>4){
          echo "<font color='red'> Maximum of 4 random symbols allowed per password </font>";  
        }
       if(($_POST['symbol_number'])<=4){
    echo show_symbol($_POST['symbol_number']);
       }
}
if( empty($_POST['symbol_number'])){

   
   echo show_symbol(1)."\n"; 
   
}

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
    
   
    if( isset($_POST['symbol_number'])){
  
    if(($_POST['symbol_number'])>4){
          echo "<font color='red'> Maximum of 4 random symbols allowed per password </font>";  
        }
       if(($_POST['symbol_number'])<=4){
    echo show_symbol($_POST['symbol_number']);
       }
}
if( empty($_POST['symbol_number'])){

   
   echo show_symbol(1)."\n"; 
   
}
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
 
 if(($_POST['word_number'])>=10){
        echo "<font color='red'>Maximum of 9 random words allowed per password</font>";
    }
    
}
?>
