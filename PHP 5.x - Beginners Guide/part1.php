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
    <title>Part 1 :: PHP - The Basics</title>
    </head>
    <body><div class='container'>";

    echo "<header><h1 class='pageHead'>PHP - The Basics :: Part 1</h1></header>";
    echo "<p class='p1'>Using echo allows us to pass html and JS from the server to the client</p>";


    // begin output html
    echo '<div style="background: #f1f1f1;">
             <h5>Example JS enabled button:</h5>
                <p style="text-align: center;"><br>';

///
///
///
///
///
////////// ----------- ECHO JS EXAMPLE CODE   ----------- \\\\\\\\\\

    // using echo to pass js back to the client is also possible

    echo "<input type='button' id='btn1' name='btn1' value='Click Me'>";
    echo "<script type='text/javascript'>

        document.getElementById('btn1').onclick = function(){

        alert('you clicked me');

         }

    </script>";

////////// ----------- END : JS CODE   ----------- \\\\\\\\\\
///
///
///
///

    // end html output
    echo '<br><br></p></div>';


///
///
///
///
///
////////// ----------- COMMENT EXAMPLE CODE   ----------- \\\\\\\\\\

    /*
      anything in here is a comment

      also here                               and wayyyy over here
    */
    // comment example

    # another form of comment

    // this will output messages to error log when logs are enabled
    error_log("message");

////////// ----------- END : COMMENT CODE   ----------- \\\\\\\\\\
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

            window.location.assign('http://furttech.vedev.space/php/part2.php');
        }
        
        document.getElementById('btuts').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/sect.php');
        }

        document.getElementById('blast').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/sect.php');
        }
        
    </script></html>";
?>
