
<html>
<head>
 
    
    
<title>xkcd Password Generator P2</title> 
<link rel="stylesheet" href="style.css">
  
  
</head>

<h1>
    xkcd Password Generator<br> 
</h1>

<body>
    
  
  
    <form method="post">
        
        Word number <input type="text" name="word_number">
        <input type="submit" value="do it!"><br>
        
        <input type="checkbox" name="number" value="number">Add number<br>
        <input type="checkbox" name="symbol" value="symbol">Add special symbol<br> 
        <input type="checkbox" name="upper" value="upper">Uppercase<br> 
    </form> 
    
<?php
include 'generate.php';
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
   echo random_symbol()."\n"; 
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
    
   
   echo random_symbol()."\n"; 
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


?>

    <p style="color: black">What is xkcd password?</p>
<font size="4" color="gray">XKCD, is a webcomic created by Randall Munroe   , this generator only uses common English words.
That�s important, because the more unusual words are used, the harder the password will be to remember. </font>

<p style="color: black">Description of your app </p>
</body>

</html>