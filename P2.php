
<html>
    
<head>   
<title>Alejandro Covarrubias P2</title> 

<style>
h1 {
       font-size: 29px;
  
    text-align: center;
    }
    
    body {
       font-size: 23px;
  
    text-align: center;
    }
</style> 
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

if( isset($_POST['word_number'])&&isset($_POST['number'])&&isset($_POST['symbol']) ){
  //  echo $_POST["word_number"];
    
    if(isset($_POST['upper'])){
        cap_word($_POST["word_number"]);
    }
    else
    {
        show_word($_POST["word_number"]);
    }
    
   echo random_number()."\n"; 
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

/*Function to call to generate a given number of words
 * Takes word as input, as the number of words to be generated
 */
function show_word($word) {

     $word_string = '';
    for ($i = 0; $i < $word; $i++) {
        
       // $word_length=rand(3, 15);
        $word_string = "".random_word();
    
      
           echo $word_string;
   
     
    }
//return ucfirst($word_string);
}

/*Function to call to generate a given number of words in Uppercase
 * Takes word as input, as the number of words to be generated
 */
function cap_word($word) {

     $word_string = '';
    for ($i = 0; $i < $word; $i++) {
        
       // $word_length=rand(3, 15);
        $word_string = "".random_word();
    
       if($i==0){
           echo ucfirst($word_string);
       }
       else
           echo $word_string;
        
     
    }
//return ucfirst($word_string);
}

/*Function to generate random string, DEPRECATED: deprecated since requirement is to provide real words*/
function random_string($length ) {
    $chars = 'abcdefghijklmnopqrstuvwxyz';
    $string = '';
    
    for ($j = 0; $j < $length; $j++) {
        
        $string = $chars[rand(0, strlen($chars) - 1)];
    }
    return $string;
}

/*Function to generate random number for password*/
function random_number($length=1 ) {
    $chars = '123456789';
    $string = '';
    
    for ($k = 0; $k < $length; $k++) {
        
        $string .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $string;
}

/*Function to generate random symbol for password*/
function random_symbol($length=1 ) {
    $chars = '!@$&?';
    $string = '';
    
    for ($l = 0; $l < $length; $l++) {
        
        $string = $chars[rand(0, strlen($chars) - 1)];
    }
    return $string;
}

/*Function to generate random word for password*/
function random_word() {
     $string = '';
    /* Current dictionary is just an array. But dictionary can be enhanced: we can read from a db, read from a file */
    $word_dictionary = array("foo", "bar", "hello", "world","enhance","random","horse","meat","river","london");
   
    $string.= $word_dictionary[array_rand($word_dictionary)];
    
    return $string;
}

?>
</body>

</html>