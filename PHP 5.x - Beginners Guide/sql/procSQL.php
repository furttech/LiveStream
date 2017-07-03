<?php
/**
 * User: FurtTech
 * Date: 7/3/2017
 * Time: 1:58 AM
 */

echo '</<textarea class="ta" cols="450" rows="140" readonly><pre><code>


///**  Procedural Method

$ProConnector = mysqli_connect($myServer,$username,$password);

// for error checking we add a statment
if (!$ProConnector) {
    error_log("DB connection failed");
}

// now the data base is ready for communications
// remember to close the connection when done!
mysql_close($ProConnector);

// databases can be used to store data nicely
// below shows and example of making a INSERT query
// this allows data to be placed into the DB from PHP

$myServer = "localhost"; // could also be an ip
$username = "username";
$password = "taco1234";
$dbname = "myDB";

// like before we create a new connection this time include
// the database name as the last argument

$dbConnector = new mysqli($myServer,$username,$password,$dbname);

// run a check to verify the credentials are correct
if (mysqli_connect_error()) {
    // throw an error when connection fails
    throw new Exception("Failed dbConnector", 1);
} else {

    error_log("DB connection success!");
}


// the most direct and unsafe way to insert into a data base
// this offers no protection against msql injection (covered later)
$query = "INSERT INTO random ( num1 , num2 , num3 ) VALUES (\'1\',\'2\',\'4\')";

// execute the query and check for error
if ($dbConnector->query($sql) === TRUE) {
    error_log("Query Success");
} else {
    error_log("Query Failed");
}
</code></pre></textarea>';

?>
