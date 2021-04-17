<?php
$command = "ping -c {$_POST['c']} {$_POST['ip']}";
?>
<p>Executing: <pre><?php echo $command; ?></pre></p>
Result:
<pre>
<?php
passthru($command);
?>
</pre>
