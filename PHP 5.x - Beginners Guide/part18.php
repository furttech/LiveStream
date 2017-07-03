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
                <title>Part 18 :: PHP - The Basics</title>
                </head>
                <body><div class='container'>";

echo "<h1 class='pageHead'>PHP - The Basics :: Part 18 - Error Handling </h1>";

echo "<h3 class='p1'> Error handling is easy and good practice when programming.</h3>";

echo '<p class="p4"> Using a function is an easy task but sometimes a situation will<br>
                    occur when the input function parameter will cause an error! Bad <br>
                    programming choices can result in poor error handling and even <br>
                    complete failure of the executing script.</p>
      <p class="p5">The good news is one can write the code around an individual <br>
                    function call in order to manage a valid or error response. <br>
                    This will allow the script to fail elegantly, recover or <br>
                    exit the action correctly without having to stop the script.</p>';


// ---- Using Proper Error Handling ---- //

// begin output html
echo '<div style="background: #f1f1f1;">
             <h5>Errors:</h5>
                <p style="text-align: left;">';

///
///
///
///
////////// ----------- ERROR : CODE   ----------- \\\\\\\\\\



// somtimes calling a functions can produce errors
// for example the fopen will throw error if fnf
//fopen("idontexist.txt" , "r");

// avoid this issues with proper error handling
if(!file_exists("idontexist.txt")){

    echo "<h3>This is an example of error handling</h3>
            <p class='p4'>Notice the attempt of opening the file is not made<br>
              clearly in this example because it does not exist!</p>";

}else{
    //execute as normal
    $fPtr = fopen("idontexist.txt" , "r");
}

// advance error handling can be done with custom error functions

/**
 * @param $erroNumber
 * @param $errorText
 * @return int
 */
function myError($erroNumber, $errorText, $inFile, $onLine){
    echo "Error # Thrown: ".$erroNumber."<br>
    Error Text: ".$errorText."<br>
    In File: ".basename($inFile)."<br>
    On Line: ".$onLine."<br>";

    return(1);
}

echo "<h3>This is an example of our custom error handler</h3>
            <p class='p5'>We can now output specific infomation per error type!</p>";
// set the customized handler
set_error_handler("myError",E_USER_ERROR);

// here we trigger our custom defined error from above
trigger_error("CUST1", E_USER_ERROR);

/// more on that in later videos

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

        window.location.assign('http://furttech.vedev.space/php/part19.php');
    }
    
    document.getElementById('btuts').onclick = function(){

        window.location.assign('http://furttech.vedev.space/php/sect.php');
    }

    document.getElementById('blast').onclick = function(){

        window.location.assign('http://furttech.vedev.space/php/part17.php');
    }
    
</script></html>";
?>
