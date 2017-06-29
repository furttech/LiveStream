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
    <title>Part 8 :: PHP - The Basics</title>
    </head>
    <body><div class='container'>";
    echo "<h1 class='pageHead'>PHP - The Basics :: Part 8 - Switch Statements</h1>";

    echo "<h3 class='p1'> Making decisions is important in PHP! We can Also use Switch Statements</h3>
        <p class='p2'>Switch statements can be thought of as a group of decisions<br><br>";

    // begin array output html
    echo '<div style="background: #f1f1f1;"><p style="text-align: center;">';

///
///
///
///
////////// ----------- FOR : LOOP CODE   ----------- \\\\\\\\\\

    $cat = "tom";

    // here is a basic example of useing switch statement
    // this allows multiple if else staments to be condensed
    
    switch($cat){

        // note: 
        // the fist case checks $cat against tom
        case "tom":{

            // here we send a response for no reason
            // notice the embeded if statment 
            echo "found kitty<br>";
            $kitty = "cat";
            
            if($kitty !== "kitty"){
                echo "<i>Big kitty</i>!<br>";
            }
            // never forget to break
            break;
        }
        
        // the second case checks $cat against mot
        case "mot":
            echo "well that is not my kitty<br>";
            break;
        
        // the default case when all else fails
        default:{
            echo "what the heck is a kitty<br>";
            break;
        }
    }

////////// ----------- END SWITCH CODE   ----------- \\\\\\\\\\
///
///
///
///

    // this html code ends the div for dysplaying the array
    echo '</p></div>';

    echo "<h4>Another alternative decision statement</h4>";

///
///
///
///
////////// ----------- ALT IF CODE   ----------- \\\\\\\\\\


    // this is also another form of if/else conditional
    $retVal = ($cat == "mot") ? "this is pass<br>" : "this is fail<br>" ;
    $retVal2 = ($cat == "tom") ? "this is pass<br>" : "this is fail<br>" ;


////////// ----------- END IF CODE   ----------- \\\\\\\\\\
///
///
///
///
///
    // begin array output html
    echo '<div style="background: #f1f1f1;"><p style="text-align: center;">
        With the alternative decision syntax the return value is stored<br><br>
            "$retVal" results in: '.$retVal.'<br>
            "$retVal2" results in: '.$retVal2.'<br>';

// this html code ends the div for dysplaying the data
// end html code section
echo "</p></div><div>
        <button class='bleft' id='bnext'>Next</button>
        <button class='btuts' id='btuts'>Tutorial Index</button>
        <button class='brght' id='blast'>Last</button>
    </div></body>";

// java script for nav footer
echo "<script type='text/javascript'>

        document.getElementById('bnext').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/part9.php');
        }
        
        document.getElementById('btuts').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/sect.php');
        }

        document.getElementById('blast').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/part7.php');
        }
        
    </script></html>";
?>
