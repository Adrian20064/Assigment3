<!DOCTYPE html>  
<html>
<head>
    <style>
    body {
      background-color: bisque;
      font-family: Arial, sans-serif;
    }
  </style>
</head>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { #Using the method POST to send the values to another PHP file
    $x = escapeshellarg($_POST["x"]);  #index 1 as is on the python script
    $y = escapeshellarg($_POST["y"]);  #index 2 as is on the python script
    $z = escapeshellarg($_POST["z"]);  #index 3 as is on the python script

    
    $python_script = "python3 process_input.py $x $y $z"; #Calling the python script in a "command" variable
    $output = shell_exec($python_script); #running the python script 

    echo "<h2>Assignment #3</h2>"; #printing as is in the example a title
    echo "<h3>Python Script Result: </h3>"; #printing as is in the example a text
    echo "<pre>$output</pre>"; #printing the output of the python script thats is connected to the index.php
}
?>

