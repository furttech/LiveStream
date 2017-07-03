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
                <title>Part 17 :: PHP - The Basics</title>
                </head>
                <body><div class='container'>";

echo "<h1 class='pageHead'>PHP - The Basics :: Part 17 - Filters </h1>";

echo "<h3 class='p1'> Filters can be a handy way of processing user data and managing input.</h3>";

echo '<p class="p4"> The need will come alone from time to time in which an individual<br>
                    will need to examine some user data. One problem comes frequently in<br>
                    design requiring data to be continuosly checked for specifics. One <br>
                    method for overcoming this task is by the use of filters.</p>
      <p class="p5">A common place for filters is found when any type of server side<br>
                    validation. A user may have entered an email for example and the <br>
                    server must be able to check the validitiy of the email itself. With<br>
                    the application of a filter a regex or pattern can be check easily <br>
                    time and time again for every user submission.</p>';


// ---- Using Filters in PHP ----- //

// begin output html
echo '<div style="background: #f1f1f1;">
             <h5>OutPut:</h5>
                <p style="text-align: left;">';

///
///
///
///
////////// ----------- FILTER : CODE   ----------- \\\\\\\\\\



//filters can allow restriction of user entered data
//filters can also check for various state or form restrictions

// here we have some value enterd from the use
// but we are only interested in the text
$userEnteredValue = "<h1>butthole</h1>";

// using the filter functions we are able to make the adjustment
$cleaned = filter_var($userEnteredValue, FILTER_SANITIZE_STRING);

// the functions has now returned a cleaned version
// the orginal text minus the html tags
echo "HTML:<br><br> ".$userEnteredValue."<br><br> NO HTML:<br><br>".$cleaned."<br><br>";

// filters offer other uses
// we can check for validation in values

// check value for valid integer
$valu = 100;
echo "<h3>Here we do a check for valid integer</h3>";

if (!filter_var($valu, FILTER_VALIDATE_INT) === false ) {
    echo "<p class='p5'>yea we have a valid integer</p>";
} else {
    echo "<p class='p4'>nope did not make the cut</p>";
}

echo "<h3>Here we do a check for valid ip</h3>";

// filter offers ip validation
if (!filter_var($valu, FILTER_VALIDATE_IP) === false ) {
    echo "<p class='p5'>yea we have a valid ip</p>";
} else {
    echo "<p class='p4'>nope did not make the cut</p>";
}



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

        window.location.assign('http://furttech.vedev.space/php/part18.php');
    }
    
    document.getElementById('btuts').onclick = function(){

        window.location.assign('http://furttech.vedev.space/php/sect.php');
    }

    document.getElementById('blast').onclick = function(){

        window.location.assign('http://furttech.vedev.space/php/part16.php');
    }
    
</script></html>";
?>
