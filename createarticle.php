<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <a href="./index.php">Home</a><br>
  <h1>Create Article Screen</h1>
  <form action="./includes/articles.inc.php" method="POST">
    <label for="articletitle">Article Title:</label><br>
    <input type="text" id="articletitle" name="articletitle"><br>
    <label for="articlecontent">Article Content:</label><br>
    <textarea id="articlecontent" name="articlecontent" rows="4" cols="50"></textarea><br><br>
    <input type="submit" name="submit" value="Post">
  </form>
</body>

</html>