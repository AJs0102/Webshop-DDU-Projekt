
<?php

function connectDB($host, $dbname) {
    return "Connecting to " . $host . ", Database: " . $dbname;
}

// Call your function and display its result
echo connectDB("localhost", "webshop");
?>
