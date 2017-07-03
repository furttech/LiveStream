<?php
/**
 * User: FurtTech
 * Date: 7/3/2017
 * Time: 1:58 AM
 */

echo '</<textarea class="ta" cols="450" rows="50" readonly><pre><code>

/// PDO style


// place creation inside of try-catch for exception handling
try {

    // again using our values from above and a few new ones
    // create connection object using PDO formatting
    $PDOconnector = new PDO("mysql:$myServer;dbname=furtDB",$username,$password);

    // note: this PDO connection requires an existing db name

    $PDOconnector -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    error_log("DB Connection Success");

} catch (PDOException $e) {
    // handle exception and alter program flow
    // you suck and your creds are wrong
    error_log($e->getMessage());
}



// after using a db connection it must be closed
$PDOconnector=null;

</code></pre></textarea>';

?>
