<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function generatePasswordH(){
    
    
    include 'functions.php';
//$generate= new generate();
if( isset($_POST['word_number'])&&isset($_POST['number'])&&isset($_POST['symbol']) ){
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
   echo random_symbol()."\n"; 
            
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
    if(isset($_POST['upper'])){
        cap_wordHyphen($_POST["word_number"]);
                 
    }
    else
    {
        show_wordHyphen($_POST["word_number"]);
               
    }
    
   
   echo random_symbol()."\n"; 
           
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
?>
