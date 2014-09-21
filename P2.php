
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
        <input type="checkbox" name="number" value="number"> Add number
        <input type="checkbox" name="symbol" value="symbol"> Add special symbol 
        <input type="checkbox" name="upper" value="upper"> Add Uppercase
        <input type="checkbox" name="hyphen" value="hyphen"> Add Hyphen<br>
        <br>
       # of symbols <input type="text" name="symbol_number" size="1">
       # of words <input type="text" name="word_number" size="1">
      
        <input type="submit" value="generate!"><br>

    </form> 
 <div>   
     <br>
<?php

require "logic.php"

?>
</div>

<body>
    <p style="color: black">What is xkcd password?</p>
<font size="4" color="gray">XKCD, is a webcomic created by Randall Munroe   , this generator only uses common English words.
That�s important, because the more unusual words are used, the harder the password will be to remember. </font>

<p style="color: black">Description of your app </p>
The application generates a random password based on the options provided above. User can select from:
Number of words to be included on password
Include Numbers
Include Symbols
Number of symbols to be included on password
Include an Uppercase for first letter
Include Hyphen to separate words
The process to generate the password is simple and user intuitive: user enables checkbox for selection to be included on password , inputs the number of words to be included on password and if symbol checkbox is selected user has the option to input the number of symbols to be included on password.
Once selections are made user clicks on generate!.
</body>

</center>

</html>