<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of show_word
 *
 * @author acovarru
 */

    

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




/*Function to call to generate a given number of words
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
        
        $string = $chars[rand(0, strlen($chars) - 1)];
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


function random_word() {
     $string = '';
    /* Current dictionary is just an array. But dictionary can be enhanced: we can read from a db, read from a file */
    $word_dictionary = array("foo", "bar", "hello", "world","enhance","random","horse","meat","river","london");
   
    $string.= $word_dictionary[array_rand($word_dictionary)];
    
    return $string;
}
    
    


    
    ?>