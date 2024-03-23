<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ai1_lab4";

$where = '';
if (isset($_GET["email"]) && !empty($_GET["email"])) {
    $email = $_GET["email"];
    $where = "WHERE email = '$email'";
}


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Pobrać zawartość tabeli questions
    $sql = "SELECT * FROM questions $where";
    $sth = $conn->prepare($sql);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Fail: " . $e->getMessage();
}
?>

<!doctype html>
<html lang="pl" data-bs-theme="">
  <head>
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zad9</title>
    <link href="css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
    <div id="inne" class="container mt-5 mb-3">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-8">
                <h2>Zapytania o ofertę</h2>
                <form method="get" action="zad9.php">
                    <div class="form-group mt-2 mb-3">
                        <label for="exampleFormControlInput1">Adres email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com" name="email" value="<?php echo isset($_GET['email']) ? htmlspecialchars($_GET['email']) : '' ?>">
                    </div>
                    <div class="form-group mb-3 d-flex justify-content-center">
                        <button class="btn btn-primary" type="submit">Filtruj</button>
                    </div>
                </form>
                
            
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">email</th>
                            <th scope="col">offer_type</th>
                            <th scope="col">budget</th>
                            <th scope="col">comment</th>
                        </tr>
                    </thead>
                    <?php foreach ($result as $row => $link): ?>
                    <tbody>
                        <tr>
                        <th scope="row"><?php echo htmlspecialchars($link['id']); ?></th>
                            <td><?php echo htmlspecialchars($link['email']); ?></td>
                            <td><?php echo htmlspecialchars($link['offer_type']); ?></td>
                            <td><?php echo htmlspecialchars($link['budget']); ?></td>
                            <td><?php echo htmlspecialchars($link['comment']); ?></td>
                            
                        </tr>
                    </tbody>
                    <?php endforeach; ?>
                   
                </table>
            </div>
        </div> 
    <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>

