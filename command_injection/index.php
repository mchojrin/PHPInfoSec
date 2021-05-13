<?php
$command = "ping -c {$_POST['c']} {$_POST['ip']}";
?>
<p>Executing: <pre><?php echo $command; ?></pre></p>
Result:
<pre>
<?php
file_put_contents('test.txt', 'test');
$result_code = 0;
passthru($command, $result_code);
?>
</pre>
<p>Result code: <?php echo $result_code; ?></p>
