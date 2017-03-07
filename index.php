<pre>
<?php
	foreach ($_GET as $command => $arguments) {
		passthru("cd .. && git $command $arguments 2>&1");
	}
	$logEntry = date('c') . " | " . json_encode($_GET) . json_encode($_POST) ."\n";
	file_put_contents('cgit.log', $logEntry, FILE_APPEND);
?>
</pre>
