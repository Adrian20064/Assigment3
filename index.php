<!DOCTYPE html>  
<html>
<head>
    <style>
    body {
      background-color: bisque;
      font-family: Arial, sans-serif;
    }
    h1 {
      color: black;
    }
    h2 {
      color: black;
    }
  </style>
</head>
<body>
    <h2>Assignment #3</h2>

    <form action="result.php" method="POST">
        <label for="x">Enter value for x:</label>
        <input type="number" name="x" required><br><br>

        <label for="y">Enter value for y:</label>
        <input type="number" name="y" required><br><br>

        <label for="z">Enter value for z:</label>
        <input type="number" name="z" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
