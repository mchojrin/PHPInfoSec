<?php

try {
    $db = new PDO('sqlite:mydb.sq3');
} catch (PDOException $exception) {
    die($exception->getMessage());
}

$sql = "INSERT INTO contacts (name, email, message) VALUES ('{$_POST['name']}', '{$_POST['email']}', '{$_POST['message']}')";

?>
    <h1>Executing :<?php echo $sql; ?></h1>
<?php
try {
    if ($db->exec($sql)) {
?><h1>Inserted!</h1><?php
    } else {
        ?><h1>Not inserted :( <?php echo print_r($db->errorInfo(), 1);?> </h1><?php
    }
} catch (PDOException $exception) {
    die($exception->getMessage());
}