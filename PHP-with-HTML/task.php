<!-- 1.	How can you embed PHP inside an HTML file? -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP WITH HTML</title>
</head>
<body>
  <h1>Wellcome to my page</h1>
  <?php
    $name  = "MoomalDevX";
    echo "<p> Hello, $name!";
  ?>
</body>
</html>