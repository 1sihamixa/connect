<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Button</title>
</head>
<body>
  <form method="POST" action="">
    <input type="submit" name="button">
  </form>

  <?php
    if (isset($_POST["button"])) {
      $servername = "localhost";
      $user = "root";
      $pass = "";
      $db = "demoo";

      try {
        $conn = new PDO("mysql:host=$servername;dbname=$db", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "You have successfully";
        } 
        
        catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        }
    }
  ?>
</body>
</html>