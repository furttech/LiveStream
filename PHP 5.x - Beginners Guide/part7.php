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
    <title>Part 7 :: PHP - The Basics</title>
    </head>
    <body><div class='container'>";
    echo "<h1 class='pageHead'>PHP - The Basics :: Part 7 - Decision Structures </h1>";

    echo "<h3 class='p1'> Making decisions is important in PHP!</h3>";

    // ---=- Using Decision Structures -=---- //

    echo "<p class='p2'>Just as in many programing languages PHP uses simple <i>if/else</i> statements<br>
        remember the basic syntax:<br><br>

        ie: if ( some clause ) { execute } else { execute this code}<br><br>

        With this form of decision structure a program controls flow based<br>
        on parameters provided to the decision statment</p>";



    // begin array output html
    echo '<div style="background: #f1f1f1;">
        <h4>Output from the if/else staments:</h4>
        <p style="text-align: center;">';

///
///
///
///
////////// ----------- IF : ELSE STATMENT CODE   ----------- \\\\\\\\\\


    // if statments allow for procedural program function
    // if ( some clause ) { execute } else { execute this code}

    $cat = "tom";
    $tornado = "warning";

    // cat will pass outputting the first code segment
    if($cat == "tom"){ 
        echo "found my cat";
        $cat = "mot";
    }else{
        echo "noooooo kitty!!!";
    }

    // compound conditional staments
    if ($cat == "tom") {
        echo "found my cat"; 
    } else if ($tornado == "warning") {
        echo "holy fook";
    } else {
        echo "i cant find my cant but the weather is nice";
    }


////////// ----------- END IF:ELSE CODE   ----------- \\\\\\\\\\
///
///
///
///

    // this html code ends the div for dysplaying the array
    echo '</p></div>';



    echo '<p class="p2"> Using decision structures must be done with care:</p>
            <h4> = , == , ===  Each have a different effect in statments!</h4>
            <p class="p3">
            Using the "=" sign alone will asign values as shown with variables<br>
            The "==" is used to compare one "object" to another. This idea may be confusing at first.<br>
            Finally the "===" is used to compare on a object type level, examining the type of each value.<br>
            </p>';

    // begin array output html
    echo '<div style="background: #f1f1f1;">
        <h4>Output from the == staments:</h4>
        <p style="text-align: left;">';


        // the difference betwenn =, == and ===

///
///
///
///
////////// ----------- = , == STATMENT CODE   ----------- \\\\\\\\\\



    // Assignment:
    // basic assignment situation : $varible = value;
    $variable = "hello";

    // Comparitive Opperator:
    // first comparitive situation : $varible == value;
    // the comparision $varible and value is type free, object comparison
    $variable = "hello";

    // evalute true
    if ($variable == "hello") {
        echo 'Yes: "$varible" is equal to "hello"<br><br>'; 
    }
    // ofcourse this fails
    if ($variable == "4"){
        // nothing is outputted
    }else{
        echo 'Nope: "$varible" is not equal to "4"<br><br>'; 
    }


////////// ----------- = , == , === CODE   ----------- \\\\\\\\\\
///
///
///
///

    // this html code ends the div for dysplaying the array
    echo '</p></div>';

    // begin array output html
    echo '<div style="background: #f1f1f1;">
            <h4>Output from the === staments:</h4>
            <p style="text-align: left;">';


// the difference betwenn =, == and ===

///
///
///
///
////////// ----------- == , === STATMENT CODE   ----------- \\\\\\\\\\




    // now change $varible to the <number> four
    $variable = 4;
    // now create a socond varible with the value four in text ""
    $variable2 = "4";

    // passes because 4 and 4 are the same as object
    //   <text>   ==  <number>
    if ($variable2 == $variable) {
        echo 'Wait: "$varible" is not equal to "4"<br>
        when using a == equals is does object comparison<br>
        the number 4 and the character 4 are the same object<br><br>';
    }

    // second comparitive situation : $varible === value
    // now this will fail due to type considerations
    if ($variable2 === $variable){
       //nothing happens
    }else{
        echo 'Ahh Finally: "$varible" is not equal to "4"<br>
        when using a === equals is does actual comparison<br>
        the number 4 and the character 4 are not the same object<br>';
    }

////////// ----------- = , == , === CODE   ----------- \\\\\\\\\\
///
///
///
///

// end html code section
echo "</p></div><br><br><div>
        <button class='bleft' id='bnext'>Next</button>
        <button class='btuts' id='btuts'>Tutorial Index</button>
        <button class='brght' id='blast'>Last</button>
    </div></body>";

// java script for nav footer
echo "<script type='text/javascript'>

        document.getElementById('bnext').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/part8.php');
        }
        
        document.getElementById('btuts').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/sect.php');
        }

        document.getElementById('blast').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/part6.php');
        }
        
    </script></html>";
?>
