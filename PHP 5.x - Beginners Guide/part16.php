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
                <title>Part 16 :: PHP - The Basics</title>
                </head>
                <body><div class='container'>";

echo "<h1 class='pageHead'>PHP - The Basics :: Part 16 - Understanding Sessions </h1>";

echo "<h3 class='p1'> Sessions play an integral part of web design when utilizing php correctly.</h3>";

echo '<p class="p4"> What happens when one decides they would like to store user inputted data<br>
                    but instead of using the information on the current page they need access<br>
                    to the data at a later point, after the page has been navagated away from?<br>
                    Well, in short without the aid of some php the task is possible but not ideal.</p>';

// ----- SESSIONs in PHP ----- //

// begin output html
echo '<div style="background: #f1f1f1;">
             <h5>OutPut:</h5>
                <p style="text-align: left;">';

///
///
///
///
////////// ----------- SESSION : CODE   ----------- \\\\\\\\\\



// sessions can be veiwed as user states
// each time a new session is started
// a user has a $_SESSION[] object to store values
// using the server "session" allows the site
// the ability to store data accross mutiple pages

// to start a session we use a function call
session_start();

// we can now set values within the session
$_SESSION['value1'] = "Number";
$_SESSION['copy'] = "bannanna";



// of course access the sesssion variable
echo "Our Session ['value1'] : <br><br><var>".$_SESSION['value1']."</var><br><br>";

// print our other session varible
echo "Our Session ['copy'] : <br><br><var>".$_SESSION['copy']."</var><br><br>";

// print all session varibles
echo "The Session values :<br><br>";
echo "<var>". var_dump($_SESSION)."</var><br><br>";



//unset a single session value
unset($_SESSION['value1']);

// now we try again to access the unset sesssion variable
echo "Our Unset Session ['value1'] : <br>".$_SESSION['value1']."<br>";

// unset all the session variables
//session_unset();


// to dystory session
//session_destroy();

//destroy a single session value
session_destroy("value1");

// finnaly we try one more time to access the now destroyed sesssion variable
echo "Our Unset Destroyed ['value1'] : <br>".$_SESSION['value1']."<br>";



////////// ----------- END CODE   ----------- \\\\\\\\\\
///
///
///
///

echo "</p>";


// end example html code section

echo "</div><div>
    <button class='bleft' id='bnext'>Next</button>
    <button class='btuts' id='btuts'>Tutorial Index</button>
    <button class='brght' id='blast'>Last</button>
</div></body>";

// java script for nav footer
echo "<script type='text/javascript'>

    document.getElementById('bnext').onclick = function(){

        window.location.assign('http://furttech.vedev.space/php/part17.php');
    }
    
    document.getElementById('btuts').onclick = function(){

        window.location.assign('http://furttech.vedev.space/php/sect.php');
    }

    document.getElementById('blast').onclick = function(){

        window.location.assign('http://furttech.vedev.space/php/part15.php');
    }
    
</script></html>";
?>
