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
/**
 * User: Furt_Tech
 * Date: 6/12/2017
 * Time: 4:33 PM
 */

    // using echo to pass html back to the client
    echo "<!DOCTYPE html>
            <html>
            <head>
            <title>Part 10 :: PHP - The Basics</title>
            </head>
            <body><div class='container'>";

    echo "<h1 class='pageHead'>PHP - The Basics :: Part 10 - Loops - ForEach</h1>";

    echo "<h3> Another Powerful Loop is the ForEach Loop</h3>";

    echo '<p class="p1">We can use loops to quickly and easily execute instructions in a repetitive manner.<br>
        Accessing objects and arrays can now be performed via loops saving significant coding effort. <br>
        ForEach loops provide a different type of looping. The loop iterates thru each key->{value}<br>
        of an associative array pair or on an indexed array when altered for proper iteration</p>';

    // -------- ForEach Loops in PHP -------- //

    echo "<h3>The ForEach loop</h3>";

    echo '<p class="p2"> The function of the ForEach loop is strait forward but can be confusing at first:</p>
            <pre class="p5" ><code>
            forEach ( "$array_name" as "$Key" => "$Value" ) 
            {  
            // Your Code  
            } </code></pre>
            <p class="p4">
            The loop will execute the code inside the loop body, indicated by the open and closing brackets <br>
            This execution will continue until the loop iterator has reach the final key value pair.
            <br></p>';



    // begin output html
    echo '<div style="background: #f1f1f1;">
             <h5>The ForEach loop Associative Output</h5>
                <p style="text-align: center;">';


///
///
///
///
///
////////// -----------  FOREACH CODE   ----------- \\\\\\\\\\


        // here we have an example of a for each loop
        // this alternative mechanism a way of incrementing
        // array () that is an associative array
        // using this associative Arrays
        $snake12['type']   = 'cobra';
        $snake12['venom']  = 'danger';
        $snake12['length'] = 10;

        // we can also provide an index for counting and access purposes
        $i=0;
        // this will step through the array until last index is reached
        foreach ($snake12 as $key => $value) {

            // one can think about this as a basic indexed array
            // ignoring the named association and treating i as index
            echo "index: ".$i++."     ";
            // print or compare or whatever with the index or key value ['val1','val2']
            echo "key: ".$key."     ";
            // print or compare or wahatever the value associated with the key
            echo "value: ".$value."<br>";
        }

////////// ----------- END FOREACH CODE   ----------- \\\\\\\\\\
///
///
///
///


    // this html code ends the div for dysplaying the array
    echo '</p></div>';


    echo "<h3>The ForEach loop with indexed arrays</h3>";

    echo '<p class="p2"> The function of the ForEach loop works the same with indexed arrays:</p>
            <pre class="p5" ><code> 
            forEach ( "$array_name" as "$Value" ) 
            {  
            // Your Code  
            } </code></pre>
            <p class="p4">
                The loop will execute the code inside the loop body, indicated by the open and closing brackets <br>
                This execution will continue until the loop iterator has reach the final key value pair. The main <br>
                difference is the key is now ommitted due to the index representing the key in the array structure.
                <br></p>';



    // begin output html
    echo '<div style="background: #f1f1f1;">
                 <h5>The ForEach loop indexed Output</h5>
                    <p style="text-align: center;">';
///
///
///
///
///
////////// ----------- NORMAL : FOREACH CODE   ----------- \\\\\\\\\\


        // to read from a normal array using the foreach
        $array = array(1,2,3,4);
        foreach ($array as $value) {
            echo "value: ".$value."<br>";
        }

////////// ----------- END FOREACH CODE   ----------- \\\\\\\\\\
///
///
///
///

    // this html code ends the div for dysplaying the array
    echo '</p></div>';


    echo '<p class="p2"> The function of the ForEach loop works the same with indexed arrays:</p>
           <pre class="p5" ><code> 
           forEach ( "$array_name" as "$Key" => "$Value" ) 
           {  
           // Your Code  
           } </code></pre>
            <p class="p4">
             Notice with the following indexed array one can still treat it as a standard ForEach but with the key<br>
             now acting as the index directly.
                <br></p>';


    // begin array output html
    echo '<div style="background: #f1f1f1;">
                 <h5>The ForEach loop index with associative iterator Output</h5>
                    <p style="text-align: center;">';


///
///
///
///
///
////////// -----------  FOREACH CODE   ----------- \\\\\\\\\\


        foreach ($array as $key => $value) {
            // echo index with $key [0,1,2,3]
            echo "key: ".$key."     ";
            // echo value with $value
            echo "value: ".$value."<br>";

        }

////////// ----------- END FOREACH CODE   ----------- \\\\\\\\\\
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

            window.location.assign('http://furttech.vedev.space/php/part11.php');
        }
        
        document.getElementById('btuts').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/sect.php');
        }

        document.getElementById('blast').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/part9.php');
        }
        
    </script></html>";
?>

