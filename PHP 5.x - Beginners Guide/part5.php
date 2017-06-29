<style>

    div.container {
        width: 99%;
        border: 1px solid lightgray;
        padding : 5px;
        position: relative
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


</style><?php

    // using echo to pass html back to the client 
    echo "<!DOCTYPE html>
    <html>
    <head>
    <title>Part 5 :: PHP - The Basics</title>
    </head>
    <body><div class='container'>";
    echo "<h1 class='pageHead'>PHP - The Basics :: Part 5 - Functions</h1>";

    echo "<h3 class='p1'> Creating a basic function is very easy</h3>";

    echo "<p class='p2'> Using the <i>function</i> key word one can assign a function name<br>
        The function can also have values passed for use within the function<br><br>
        Our bRoss() functions inputs a value by inserting the value into the function
        <br><br>ie: bRoss('value')<br></p>";
    // functions what are they and how to use them//

    function bRoss($paintbrush){

        echo "<h4>The function is called:</h4><p class='p3'>The paintbrush was ".$paintbrush."</p><br>";

        $paintbrush = "happy lil tree!";

        return $paintbrush;

    }

    // initiaize a variabnle for no reason but to pass into function as demo
    $paintbrush="empty";

    // calling the function
    $canvas = bRoss($paintbrush);

    echo "<h4>The function is called:</h4><p class='p3'>The return value from the function call produces: ".$canvas."</p>";

// end html code section
echo "</div><div>
        <button class='bleft' id='bnext'>Next</button>
        <button class='btuts' id='btuts'>Tutorial Index</button>
        <button class='brght' id='blast'>Last</button>
    </div></body>";

// java script for nav footer
echo "<script type='text/javascript'>

        document.getElementById('bnext').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/part6.php');
        }
        
        document.getElementById('btuts').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/sect.php');
        }

        document.getElementById('blast').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/part4.php');
        }
        
    </script></html>";
?>
