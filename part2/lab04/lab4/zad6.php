<?php
print_r($_REQUEST);
print('<br>');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Zebrać wartości z pól formularza
  $email = $_POST["email"];
  $option = $_POST["option"];
  $price = $_POST["price"];
  $comment = $_POST["comment"];

//zad 10
//ataki sql injection
//naruszenie prywatnosci
//ataki XSS cross stie scriptin - wstrzykiwanie kodu JS
//dostep do zasobow na innych stronach

  $email = htmlspecialchars($email);
  $option = htmlspecialchars($option);
  $price = htmlspecialchars($price);
  $comment = htmlspecialchars($comment);

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ai1_lab4";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully. <br>";

    // Przygotować polecenie insert i wstawić rekord do tabeli
    $sql = "INSERT INTO questions ( email, offer_type, budget, comment) VALUES (:email, :offer_type, :budget, :comment)";
    $stmt = $conn->prepare($sql);
    $stmt -> execute(['email'=>$email, 'offer_type'=>$option, 'budget'=>$price, 'comment'=>$comment]);

    echo "New record added. <br>";
    
    $conn = null;
  } catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    echo $sql . "<br>" . $e->getMessage();
    $conn = null;
  }
} else {
    echo "Method not supported. <br>";
}
