<style>

    div.container {
        display: inline-block;
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

    table.part{

        position: relative;
        width: auto;
        height: auto;
        left: 50%;
        margin-top: 10em;
        margin-right: -50%;
        transform: translate(-50%, -50%);

    }

</style><?php

// using echo to pass html back to the client
echo "<!DOCTYPE html>
    <html>
    <head>
    <title>Overview :: PHP - The Basics</title>
    </head>
    <body><div class='container'>";

echo "<header><h1 class='pageHead'>PHP - The Basics :: An Overview of Syntax and Technique</h1></header>";

echo "<br><br><table class='part'>";

    $pages = array("Some Basics",
        "Some Variables",
        "Arrays",
        "More Arrays",
        "Functions",
        "Varible/Function Scope",
        "Decision Structures",
        "Switch Statements",
        "Loops - While / For",
        "Loops - ForEach",
        "Working w/ Files",
        "More Working w/ Files",
        "Including Files",
        "Uploading Files",
        "Using Cookies",
        "Understanding Sessions",
        "Filters",
        "Error Handling",
        "Exception Handling",
        "Using MySql");

    $index = 1;
    foreach($pages as $value){

        echo '<tr>
                    <td><a href="http://furttech.vedev.space/php/part'.$index.'.php">Part '.$index.':</a></td>
                    <td><label>'.$value.'</label></td>
             </tr>';

        $index++;
    }

echo '</table>';


// end html code section
echo "</div><div>
        <button class='bleft' id='bnext'>Next</button>
        <button class='btuts' id='btuts'>Tutorial Index</button>
        <button class='brght' id='blast'>Last</button>
    </div></body>";

// java script for nav footer
echo "<script type='text/javascript'>

        document.getElementById('bnext').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/part1.php');
        }
        
        document.getElementById('btuts').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/sect.php');
        }

        document.getElementById('blast').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/sect.php');
        }
        
    </script></html>";
?>
