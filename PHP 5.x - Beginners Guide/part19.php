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
                <title>Part 19 :: PHP - The Basics</title>
                </head>
                <body><div class='container'>";

echo "<h1 class='pageHead'>PHP - The Basics :: Part 19 - Exception Handling </h1>";

echo "<h3 class='p1'> Exceptions can be thought of as a step beyond error handling.</h3>";

echo '<p class="p5">The use of exception based programming is crucial for creating<br>
                    robust and dynamic programming design. One must create a script that <br>
                    has proper exception handling for any situation were failure is<br>
                    expected to occur</p>';


// ---- Using Proper Error Handling ---- //

// begin output html
echo '<div style="background: #f1f1f1;">
             <h5>Exceptions:</h5>
                <p style="text-align: left;">';

///
///
///
///
////////// ----------- EXCEPTION : CODE   ----------- \\\\\\\\\\

// ---- Exceptions ---- //

// here is an example of a function that throws and exception
/**
 * @param $val
 * @return mixed
 * @throws Exception
 */
function check($val){
    if ($val !== 1) {
        throw new Exception("Hark! An exception is thrown as the sun falls to the night. they value is not a 1");
    }
    return $val;
}

// to use the function properly
// handle the exception being thrown
// place the function call inside a try-catch block

// throw function in try-catch
try {

    check(2);

} catch (Exception $e) {

   echo "<br>exception: ".$e->getMessage();
    // handle the error ass such
}


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

        window.location.assign('http://furttech.vedev.space/php/part20.php');
    }
    
    document.getElementById('btuts').onclick = function(){

        window.location.assign('http://furttech.vedev.space/php/sect.php');
    }

    document.getElementById('blast').onclick = function(){

        window.location.assign('http://furttech.vedev.space/php/part18.php');
    }
    
</script></html>";
?>
