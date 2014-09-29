<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of generatePasswordH
 *
 * @author acovarru
 */

function generatePasswordH(){
    
    
    include 'functions.php';

 if(($_POST['word_number'])<10){

//$generate= new generate();
if( isset($_POST['word_number'])&&isset($_POST['number'])&&isset($_POST['symbol']) ){
    global $length;
  //  echo $_POST["word_number"];
    
    if(isset($_POST['upper'])){
      
       cap_wordHyphen($_POST["word_number"]);
                
    }
    else
    {
        show_wordHyphen($_POST["word_number"]);
                 
    }
    
   echo random_number();
            echo "-";
   
    if( isset($_POST['symbol_number'])){
  
        if(($_POST['symbol_number'])>4){
          echo "<font color='red'> Maximum of 4 random symbols allowed per password </font>";  
        }
       if(($_POST['symbol_number'])<=4){
    echo show_symbolHyphen($_POST['symbol_number']);
       }
    }
if( empty($_POST['symbol_number'])){

   
   echo show_symbolHyphen(1)."\n"; 
   
}
            
}


else
if( isset($_POST['word_number'])&&isset($_POST['number']) ){
  //  echo $_POST["word_number"];
   if(isset($_POST['upper'])){
       cap_wordHyphen($_POST["word_number"]);
              
    }
    else
    {
        show_wordHyphen($_POST["word_number"]);
                
    }
    

   echo random_number()."\n"; 
          
}

else
if( isset($_POST['word_number'])&&isset($_POST['symbol']) ){
  //  echo $_POST["word_number"];
    global $length;
    if(isset($_POST['upper'])){
        cap_wordHyphen($_POST["word_number"]);
                 
    }
    else
    {
        show_wordHyphen($_POST["word_number"]);
               
    }
    
   
      if( isset($_POST['symbol_number'])){
  
     if(($_POST['symbol_number'])>4){
          echo "<font color='red'> Maximum of 4 random symbols allowed per password </font>";  
        }
       if(($_POST['symbol_number'])<=4){
    echo show_symbolHyphen($_POST['symbol_number']);
       }
}
if( empty($_POST['symbol_number'])){

   
   echo show_symbolHyphen(1)."\n"; 
   
}
           
}


else
if( isset($_POST['word_number'])&&isset($_POST['upper']) ){
  //  echo $_POST["word_number"];
 // $example=show_word($_POST["word_number"]);
//echo $example;  
//echo ucfirst($example);
   cap_wordHyphen($_POST["word_number"]);
    //echo cap_word(show_word($_POST["word_number"]));
            

}



else
    if ( isset($_POST['word_number']) ){
  //  echo $_POST["word_number"];
    
      
    show_wordHyphen($_POST["word_number"]);
         
   
}
 }
 
 if(($_POST['word_number'])>=10){
        echo "<font color='red'>Maximum of 9 random words allowed per password</font>";
    }
    
    
}
?>
