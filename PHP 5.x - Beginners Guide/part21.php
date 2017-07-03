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
                <title>Part 21 :: PHP - The Basics</title>
                </head>
                <body><div class='container'>";

echo "<h1 class='pageHead'>PHP - The Basics :: Part 21 - Using Classes </h1>";

echo "<h3 class='p1'> PHP is a powerful language and when paired with a data base it becomes doubly so!</h3>";

echo '<p class="p4"></p>';

echo "<p class='p5'></p>";


// ---- Using Proper Error Handling ---- //

// begin output html
echo '<div style="background: #f1f1f1;">
             <h5>Examples:</h5>
                <p style="text-align: left;">';

///
///
///
///
////////// ----------- CLASSES : CODE   ----------- \\\\\\\\\\


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

    window.location.assign('http://furttech.vedev.space/php/part21.php');
}

document.getElementById('btuts').onclick = function(){

    window.location.assign('http://furttech.vedev.space/php/sect.php');
}

document.getElementById('blast').onclick = function(){

    window.location.assign('http://furttech.vedev.space/php/part20.php');
}

</script></html>";
?>
