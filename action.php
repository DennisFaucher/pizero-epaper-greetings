<?php
 $path = 'greeting.txt';
 if (isset($_POST['field1'])) {
    $fh = fopen($path,"a+");
    $string = $_POST['field1'];
    fwrite($fh,$string . "\n"); // Write information to the file
    fclose($fh); // Close the file
 }
?>

