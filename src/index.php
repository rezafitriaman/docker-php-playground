<html>
  <head>
    <title>php</title>
    <script defer src="/main.bundle.js"></script><link href="/main.css" rel="stylesheet"></head>

  </head>
  <body>
    <div>
      <h1 class="master">s rez</h1>
      <image src="./img/icon.png"></image>
    </div>
  </body>
</html> 

<?php

echo "Hello from the docker s";

$mysqli = new mysqli("db", "root", "example", "company1");

$sql = "INSERT INTO users (name, fav_color) VALUES('Lil aa', 'Yellow')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO users (name, fav_color) VALUES('Nick Jonas', 'Brown')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO users (name, fav_color) VALUES('Maroon 5', 'Maroon')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO users (name, fav_color) VALUES('Tommy Baker', '043A2B')";
$result = $mysqli->query($sql);


$sql = 'SELECT * FROM users';

if ($result = $mysqli->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo "<br>";
    echo $user->name . " " . $user->fav_color;
    echo "<br>";
}

?>