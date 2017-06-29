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
    <title>Part 2 :: PHP - The Baiscs</title>
    </head>
    <body><div class='container'>";
    echo "<h1 class='pageHead'>PHP - The Basics :: Part 2</h1>";

    echo "<h3 class='p1'>Here we use Some Variables</h3>";


    // begin output html
    echo '<div style="background: #f1f1f1;">
             <h5>Example:</h5>
                <p style="text-align: center;"><br>';

///
///
///
///
///
////////// ----------- VARIBLE CODE   ----------- \\\\\\\\\\



    // variables
    // in javascript var let name = "furt";

    // in c 
    // char value = 'a';

    // in php no variable type declarations 
    $name = "mike";
    $char = 'a';
    $bologna = 5;
    $n = "5"+"5";

    echo "With an echo() we print out ";
    // to pair values using .
    echo "name: ".$name."<br>";


////////// ----------- END : VARIBLE CODE   ----------- \\\\\\\\\\
///
///
///
///

    // end html output
    echo '<br><br></p></div>';


    // begin output html
    echo '<div style="background: #f1f1f1;">
             <h5>Example:</h5>
                <p style="text-align: center;"><br>';

///
///
///
///
///
////////// ----------- PRINT_R CODE   ----------- \\\\\\\\\\

    echo "Using print_r() outputs: ";
    // will dysplay information about the variable $char
    print_r($char);


////////// ----------- END : PRINT_R CODE   ----------- \\\\\\\\\\
///
///
///
///

    // end html output
    echo '<br><br></p></div>';
    
    echo "<h4 class='p2'>But wait, I lied their are Key words!</h4>";

    // begin output html
    echo '<div style="background: #f1f1f6;">
             <h5>Constants:</h5><br>';

///
///
///
///
///
////////// ----------- OTHER DECLARATIONS CODE   ----------- \\\\\\\\\\


    //constants
    echo '<div><h3 style="margin-left:5px;">Constants behave similar to C/C++</h3></div><p style="text-align: center;">';
    // to use constant outside of class declarations
    define('A_CONSTANT_VALUE', '3.2');

    echo "With define() a constant value of: ".A_CONSTANT_VALUE." is set to A_CONSTANT_VALUE<br>";

    //private - protected - public - global - static
    echo "<br>Private, Public, Protected, Global and Static scoped variables! See <a href='http://furttech.vedev.space/php/part6.php'>Part 6</a><br><br>";

////////// ----------- END : CODE   ----------- \\\\\\\\\\
///
///
///
///

// end html code section
echo "</div><div>
        <button class='bleft' id='bnext'>Next</button>
        <button class='btuts' id='btuts'>Tutorial Index</button>
        <button class='brght' id='blast'>Last</button>
    </div></body>";

// java script for nav footer
echo "<script type='text/javascript'>

        document.getElementById('bnext').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/part3.php');
        }
        
        document.getElementById('btuts').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/sect.php');
        }

        document.getElementById('blast').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/part1.php');
        }
        
    </script></html>";
?>
