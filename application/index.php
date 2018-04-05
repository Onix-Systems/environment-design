<?php
    print "<h3>Welcome to environment demo!</h3><br>
    Current environment is: <b>" . getenv("ENVIRONMENT") . "</b>.";
?>
<h3>Testing environment settings...</h3>
<ol>
<li>Click <a href="./404.php">here</a> to cause <b>404</b> code.</li>
<li>Click <a href="./error.php">here</a> to cause <b>error</b> on server side.</li>
<li>Click <a href="./warning.php">here</a> to cause <b>warning</b> on server side.</li>
</ol>
