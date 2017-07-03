<style>

    div.container {
        width: 99%;
        border: 1px solid lightgray;
        padding : 5px;
        position: relative;
    }

    .pageHead{

        background-color: #72c66b;
        text-align: center;
        padding: 1em;
        clear: left;

    }

    .p1{
        background-color: #afd3ff;
        padding: 4%;
        text-align: justify;
    }

    .p2{
        background-color: darkgrey;
        padding: 2%;
        text-align: justify;
    }

    .p3{
        background-color: #f1f1f1;
        padding: 1%;
        text-align: justify;
    }

    .p4{
        background-color: #f59868;
        padding: 3%;
        text-align: justify;
    }

    .p5{
        background-color: #2cf5b0;
        padding: 5%;
        text-align: justify;
    }

    button.bleft{
        position: absolute;
        left: 2%;
        margin-right: -98%;
        transform: translate(-0%, -50%);
    }

    button.brght{
        position: absolute;
        margin-left: -98%;
        right:2%;
        transform: translate(-0%, -50%);
    }

    button.btuts{
        position: absolute;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
    }

    textarea.ta{

        height: auto;
        width : auto;

        position: inherit;
        overflow: hidden;
        resize: none;


        -ms-overflow-style: none

    }

</style><?php
/**
 * User: Furt_Tech
 * Date: 6/15/2017
 * Time: 8:51 PM
 */

// using echo to pass html back to the client
echo "<!DOCTYPE html>
                <html>
                <head>
                <title>Part 20 :: PHP - The Basics</title>
                </head>
                <body><div class='container'>";

echo "<h1 class='pageHead'>PHP - The Basics :: Part 20 - Using MySql </h1>";

echo "<h3 class='p1'> PHP is a powerful language and when paired with a data base it becomes doubly so!</h3>";

echo '<p class="p4">A PHP script can handle most of the developers needs but on occasion the need<br>
                    arises to store data, sometimes large amounts of it, on a per user bases. <br>
                    Keeping track of this information can be very difficult and a server alone <br>
                    is not outfitted to handle such a task.<br>
                    Storing user generated data on a local file system can not only be slow, but<br>
                    present a potentially serious security vulnerability.<br>
                    </p>';

echo "<p class='p5'>Luckily, over the years a few clever developers came up with the idea to integrate<br>
                    a database with a web application and the golden stack was born.<br>
                    Now almost every major web platform that handles user data will rely on some <br>
                    form of data base as a back end support module.<br>
                    This provides quick and easy storage/access to all data via simple interface<br>
                    or system framework.</p>";


// ---- Using Proper Error Handling ---- //

// begin output html
echo '<div style="background: #f1f1f1;">
             <h5>Examples:</h5>
                <p style="text-align: left;">';

///
///
///
///
////////// ----------- MYSQL : CODE   ----------- \\\\\\\\\\

// ---- Using php with MySQL ---- //


/*
    PHP has three seperate form in which a data base
    communication is fashioned
    1. Object Oriented MySQLi)
    2. PDO style
    3. MySQL Procedural
    Both allow communication but differ in syntax
*/


///* Object Oriented MySQLi)

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

    // run a check to verify the crdetials are correct
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


///**  Procedural Method

$ProConnector = mysqli_connect($myServer,$username,$password);

// for error checking we add a statment
if (!$ProConnector) {
    error_log("DB connection failed");
}

// now the data base is ready for communications
// remember to close th econnection when done!
mysql_close($ProConnector);

// databases can be used to store data nicly
// below shows and example of making a INSERT query
// this allows data to be placed into the DB from PHP

$myServer = "localhost"; // could also be an ip
$username = "username";
$password = "taco1234";
$dbname = "myDB";

// like befor we create a new connection this time include
// the database name as the last argument

$dbConnector = new mysqli($myServer,$username,$password,$dbname);

    // run a check to verify the crdetials are correct
if (mysqli_connect_error()) {
    // throw an error when connection fails
    throw new Exception("Failed dbConnector", 1);
} else {

    error_log("DB connection success!");
}


// the most direct and unsafe way to insert into a data base
// this offers no protection against msql injection (covered later)
$query = "INSERT INTO random ( num1 , num2 , num3 ) VALUES ('1','2','4')";

// execture the query and check for error
if ($dbConnector->query($sql) === TRUE) {
    error_log("Query Success");
} else {
    error_log("Query Failed");
}


// more to come in later video

////////// ----------- END CODE   ----------- \\\\\\\\\\
///
///
///
///

echo "<br></p><br>";


// end example html code section

echo "</div><br><br></nt><div>
<button class='bleft' id='bnext'>Next</button>
<button class='btuts' id='btuts'>Tutorial Index</button>
<button class='brght' id='blast'>Last</button>
</div></body>";

// java script for nav footer
echo "<script type='text/javascript'>

document.getElementById('bnext').onclick = function(){

    window.location.assign('http://furttech.vedev.space/php/part21.php');
}

document.getElementById('btuts').onclick = function(){

    window.location.assign('http://furttech.vedev.space/php/sect.php');
}

document.getElementById('blast').onclick = function(){

    window.location.assign('http://furttech.vedev.space/php/part19.php');
}

</script></html>";
?>
