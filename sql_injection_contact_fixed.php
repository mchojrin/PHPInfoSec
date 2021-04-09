<?php

try {
    $db = new PDO('sqlite:mydb.sq3');
} catch (PDOException $exception) {
    die($exception->getMessage());
}

$sql = "INSERT INTO contacts (name, email, message) VALUES (:name, :email, :message)";

?>
    <p>Executing: <pre><?php echo $sql; ?></pre></p>
<?php
$st = $db->prepare($sql);

try {
    if ($st->execute([
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'message' => $_POST['message'],
    ])) {
?><h1>Inserted!</h1><?php
    } else {
        ?><h1>Not inserted :( <?php echo print_r($db->errorInfo(), 1);?> </h1><?php
    }
} catch (PDOException $exception) {
    die($exception->getMessage());
}