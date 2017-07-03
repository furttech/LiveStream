<?php
/**
 * User: FurtTech
 * Date: 7/3/2017
 * Time: 1:58 AM
 */

echo '</<textarea class="ta" cols="450" rows="40" readonly><pre><code>
// Object Oriented MySQLi)

// a few values are needed to connect
$myServer = "localhost"; // could also be an ip
$username = "username";
$password = "taco1234";

// using the above values we can create
// a connection object that provide the
// sql database communication
$dbConnector = new mysqli($myServer,$username,$password);

// use a try catch block to handle exceptions
try {

    // run a check to verify the creds are correct
    if (mysqli_connect_error()) {
        // throw an error when connection fails
        throw new Exception("Failed dbConnector", 1);
    } else {

        error_log("DB connection success!");
    }

} catch (Exception $e) {
    // handle exception and alter program flow
    //you suck and you messed up your credentials
}


// remember to close the connection
$dbConnector->close();

</code></pre></textarea>';

?>
