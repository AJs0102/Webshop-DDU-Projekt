
<?php

require "config.php";

function createDSN($host, $dbname) {
    // Build your DSN here
    return "mysql:host=" . $host . ";dbname=" . $dbname . ";charset=utf8mb4";
}
// Call your function here


// We're using the variables "$host" and "$dbname" that i've created in "config.php"
$dsn = createDSN($host, $dbname);



try {
    // Create your PDO connection here
        // Making a "new PDO" object, using data from config.php, which was ignored in .gitignore
    $connection = new PDO($dsn, $username, $password);
    echo "Connection successful!";

    // If the connection fails, itll output it using the "Catch" command
} catch (PDOException $e) {
    echo "Connection failed!";
}

?>
