
<html>
<head>
 
    
    
<title>xkcd Password Generator P2</title> 
<link rel="stylesheet" href="style.css">
  
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>

<h1>
    xkcd Password Generator<br> 
</h1>

<center>
    
    <form method="post">
        <br>
        Word number <input type="text" name="word_number" size="1">
        <input type="submit" value="do it!"><br>
        <br>
       
   

   
       
        <input type="checkbox" name="number" value="number">Add number
        <input type="checkbox" name="symbol" value="symbol">Add special symbol 
        <input type="checkbox" name="upper" value="upper">Uppercase<br>
        <input type="checkbox" name="hyphen" value="hyphen">Hyphen<br>
        
  

    
    </form> 
 <div>   
     <br>
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
</div>

<body>
    <p style="color: black">What is xkcd password?</p>
<font size="4" color="gray">XKCD, is a webcomic created by Randall Munroe   , this generator only uses common English words.
That�s important, because the more unusual words are used, the harder the password will be to remember. </font>

<p style="color: black">Description of your app </p>
</body>

</center>

</html>