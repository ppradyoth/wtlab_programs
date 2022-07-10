
<?php
    $name =(string) readline("Enter your name ");
    $greetings = array("hi","hello","welcome","good morning");
    $rand_key = array_rand($greetings);
    $greeting = $greetings[$rand_key];
    echo "<h3>$greeting $name</h3>"; 
?>
