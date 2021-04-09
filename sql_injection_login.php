<?php

try {
    $db = new PDO('sqlite:mydb.sq3');
} catch (PDOException $exception) {
    die($exception->getMessage());
}

$sql = "SELECT * FROM users WHERE username like '{$_POST['username']}' AND password = '{$_POST['password']}'";
?>
<p>Executing <pre><?php echo $sql ?></pre></p>
<?php

try {
    if ($res = $db->query($sql)) {
        $rows = $res->fetchAll(PDO::FETCH_ASSOC);
        if ($rows) {
            ?>
            <h1>Welcome <?php echo current($rows)['username']; ?></h1>
            <?php
        } else {
            ?>
            <h1>Sorry... unknown</h1>
            <?php
        }
    }
} catch (PDOException $exception) {
    die($exception->getMessage());
}