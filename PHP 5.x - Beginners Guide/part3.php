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
    <title>Part 3 :: PHP - The Basics</title>
    </head>
    <body><div class='container'>";
    echo "<h1 class='pageHead'>PHP - The Basics :: Part 3 Arrays</h1>";

    echo "<h3 class='p1'>Performing math calulations is standard</h3><p>";


    // begin output html
    echo '<div style="background: #f1f1f1;">
             <h5>Example:</h5>
                <p style="text-align: center;"><br>';

///
///
///
///
///
////////// ----------- MATH CODE   ----------- \\\\\\\\\\


    $result = 6+1;
    $result2 = 9/3;
    echo "6 + 1 = ".$result;
    echo "<br>";
    echo "9 / 3 = ".$result2;
    echo "</p><br>";

////////// ----------- END : MATH CODE   ----------- \\\\\\\\\\
///
///
///
///

    // end html output
    echo '<br><br></p></div>';

    echo "<h3>Using Different Types of Array Initialization</h3>";
    // examples of value assignment for different array types


    // begin output html
    echo '<div style="background: #f1f1f1;">
             <h5>Example:</h5>
                <p style="text-align: left;"><br>';

///
///
///
///
///
////////// ----------- ARRAY CODE   ----------- \\\\\\\\\\

    // USING ARRAYS : 3 types
    // numerical array - std indexed array val[0],val[1]...
    // associative array - basically give the index a name val['donk']
    // multidimensional array - array inside a parent array [[...],[...],[...]]


    // basic array using object assignment method
    $basicArr = array ('one',2,'3',"four");

    // basic using assignment method by index
    $anotherBasicArray[0] = "one";
    $anotherBasicArray[1] = "two";
    $anotherBasicArray[2] = "nachos with meat!";

    // access array by index
    // here you see the output from both initalization methods
    echo "<p>Assigning by vall = array() index 2 equals: ".$basicArr[2]."<br><br>";  // outputs '3'
    echo "Assigning by index: ".$anotherBasicArray[2]."<br><br>"; // outputs "nachos with meat!"
    echo "Notice Both values are both easily retrived by index<br></p><br><br>";


////////// ----------- END : ARRAY CODE   ----------- \\\\\\\\\\
///
///
///
///

    // end html output
    echo '<br><br></p></div>';

    echo '<h3>Arrays have many opperations in PHP</h3>
    <p class="p2">One useful tool is the ability to merge arrays:<br>"$newArray" = array_merge("$array1" , "$array2")<br>
    This will concatinate the second array to the first and set it equal to "$newArray"</p>';


    // begin output html
    echo '<div style="background: #f1f1f1;">
             <h5>Example:</h5>
                <p style="text-align: left;"><br>';

///
///
///
///
///
////////// ----------- ARRAY UTILITIES CODE   ----------- \\\\\\\\\\

    // lets try combining our arrays
    $newArray = array_merge($basicArr ,$anotherBasicArray);

    echo "The newly combined array: <br>";
    // now we out put details of out new array
    print_r($newArray);

////////// ----------- END : ARRAY CODE   ----------- \\\\\\\\\\
///
///
///
///

// end html code section
echo "<br><br></div><div>
        <button class='bleft' id='bnext'>Next</button>
        <button class='btuts' id='btuts'>Tutorial Index</button>
        <button class='brght' id='blast'>Last</button>
    </div></body>";

// java script for nav footer
echo "<script type='text/javascript'>

        document.getElementById('bnext').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/part4.php');
        }
        
        document.getElementById('btuts').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/sect.php');
        }

        document.getElementById('blast').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/part2.php');
        }
        
    </script></html>";
?>
