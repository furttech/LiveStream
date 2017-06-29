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


</style><?php

    // using echo to pass html back to the client
    echo "<!DOCTYPE html>
    <html>
    <head>
    <title>Part 9 :: PHP - The Basics</title>
    </head>
    <body><div class='container'>";

    echo "<h1 class='pageHead'>PHP - The Basics :: Part 9 - Loops - While / For</h1>";

    echo '<h3 class="p1"> Loops are a powerful tool in All programming languages</h3>';

    echo '<p class="p2">We can use loops to quickly and easily execute instructions in a repetitive manner.<br>
        Accessing objects and arrays can now be performed via loops saving significant coding effort. <br>
        Loops also provide a platform for using recursion and other helpful programming techniques<br></p>';


    // ---- loops in php ---- //

    // we have four different types of loops on php
    // the traditional for and while
    // also do while and foreach

    echo "<h3>The for loop</h3>";

    echo '<p class="p2"> The function of the for loop is simple:</p>
            <pre class="p5" ><code> 
            for ( $start_index; $start_index [ < , > , = ] $end_index; $start_index [ ++ , -- ] ) {
            // Code
            } </code></pre>
            <p class="p4">
            The loop will execute the code inside the loop body, indicated by the open and closing brackets<br>
            This execution will continue until the termination condition is met. In the provided example, <br>
            a termination condition is set with the second statement in the loop declaration.
            <br></p>';

    // begin array output html
    echo '<div style="background: #f1f1f1;"><p style="text-align: center;">';


///
///
///
///
////////// ----------- FOR : LOOP CODE   ----------- \\\\\\\\\\


    // a for loop example
    for ($i=0; $i < 5; $i++) { 

        // we output a value each time the loop executes
        echo "Step: ".$i." : meow <br>";
    }


////////// ----------- END FOR CODE   ----------- \\\\\\\\\\
///
///
///
///

    // this html code ends the div for dysplaying the array
    echo '</p></div>';
 
    echo "<h3>The While loop</h3>";

    // notice in these echo statments the html begins to include style attributes
    echo '<p class="p2"> The function of the for while is simple:</p>
            <pre class="p5" ><code>
            $start_index=val; 
            while ( $start_index [ < , > , = ] $end_index; )
            {  $start_index [ ++ , -- ];
                // Code
            }</code></pre>
            <p class="p4">
            The loop will execute the code inside the loop body, indicated by the open and closing brackets<br>
            This execution will continue until the termination condition is met. In the provided example, <br>
            a termination condition is set with the while statement in the loop declaration before the body.
            <br></p>';

    // begin array output html
    echo '<div style="background: #f1f1f1;"><p style="text-align: center;">';


///
///
///
///
////////// ----------- WHILE : LOOP CODE   ----------- \\\\\\\\\\

    // an example of a simple while loop
    $i=0;
    while ($i!==5) {
        echo "Step: ".$i." : meow <br>";
        $i++;

        // inside of a while loop break stops the loop
        // break;
    }

////////// ----------- END WHILE CODE   ----------- \\\\\\\\\\
///
///
///
///

    // this html code ends the div for dysplaying the array
    echo '</p></div>';

    echo "<h3>The Do - While loop</h3>";

    echo '<p class="p2"> The function of the for do / while is also simple:</p>
           <pre class="p5" ><code>
             $start_index=val;
             do {  
             $start_index [ ++ , -- ];
             // Code
             } while ( $start_index [ < , > , = ] $end_index; )</code></pre>
            <p class="p4">
            The loop will execute the code inside the loop body, indicated by the open and closing brackets<br>
            This execution will continue until the termination condition is met. In the provided example, <br>
            a termination condition is set with the while statement after the loop body.
            <br></p>';


    // begin array output html
    echo '<div style="background: #f1f1f1;"><p style="text-align: center;">';

///
///
///
///
////////// ----------- DO WHILE : LOOP CODE   ----------- \\\\\\\\\\

    // you can also do this a another way
    // using the alternative do/while configuration
    $i=5;
    do{
        $i--;
        echo "Step: ".$i." : meow <br>";
    } while ($i>0);


////////// ----------- END DO WHILE CODE   ----------- \\\\\\\\\\
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

            window.location.assign('http://furttech.vedev.space/php/part10.php');
        }
        
        document.getElementById('btuts').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/sect.php');
        }

        document.getElementById('blast').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/part8.php');
        }
        
    </script></html>";
?>
