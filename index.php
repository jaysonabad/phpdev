<!Doctype HTML>
<html>
<head>
  <title>PHP</title>
</head>
<body>
    <h1>Welcome to Noysoft</h1>

    <?php
      $color = "red";
      echo "Hello World! <br>";
      echo "My car is " . $color . "<br>";
    ?>

    <form action="home/welcome.php" method="POST">
      Name: <input type="text" name="name"><br>
      E-mail: <input type="text" name="email"><br>
      <input type="submit">
    </form>

</body>
</html>
