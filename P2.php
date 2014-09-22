
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

<h2>
     <a class="pure-button" href="about.php">About</a> 
     <a class="pure-button" href="howto.php">How to Use</a> 
</h2>
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

require "logic.php";

?>     
     </center>

</div>

</html>