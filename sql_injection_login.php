<?php

try {
    $db = new PDO('sqlite:mydb.sq3');
} catch (PDOException $exception) {
    die($exception->getMessage());
}

$sql = "SELECT * FROM users WHERE username like '{$_POST['username']}' AND password = '{$_POST['password']}'";
?>
<h1>Executing <?php echo $sql ?></h1>
<?php

try {
    if ($res = $db->query($sql)) {
        $rows = $res->fetchAll(PDO::FETCH_ASSOC);
    }
} catch (PDOException $exception) {
    die($exception->getMessage());
}

if ($rows) {
?>
<h1>Welcome <?php echo $rows['username']; ?></h1>
<?php
} else {
?>
<h1>Sorry... unknown</h1>
<?php
}
