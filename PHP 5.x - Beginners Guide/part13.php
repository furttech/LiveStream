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
 * Date: 6/15/2017
 * Time: 8:51 PM
 */

// using echo to pass html back to the client
echo "<!DOCTYPE html>
                <html>
                <head>
                <title>Part 13 :: PHP - The Basics</title>
                </head>
                <body><div class='container'>";

echo "<h1 class='pageHead'>PHP - The Basics :: Part 13 - Including Files</h1>";

echo "<h3 class='p1'> Including Files is another important Aspect of PHP:</h3>";

echo '<p class="p4">Inorder to advance past a single page php scrypt it is important<br>
                    to understand how to include other php files into a current project.</p>';

// ---------- accessing files with php  ----------- //

echo '<p class="p2"> Including other files is easier than one might think.</p>
                <h4> Remember Your File Must Exist to include it! </h4>
                <p class="p2">Assume a file exists call user.php <br>
                and we want to include this file for use <br>
                this gives us access to contents/declarations - ect<br>
                </p>
                <h4>Two primary methods exist: </h4>
                <p class="p5"><br>
                <i> include [filename]</i><br>
                <i> require [filename]</i><br>
                <br><br>
                The biggest difference is in how the file inclusion is handled,<br>
                with an include[filename] a script will not halt<br>
                when the file is not found.<br><br>
                On the other hand require[filename] will halt the script preventing<br>
                potentially unknown behalvior or serious faults in scripts that need<br>
                the contents of the included file.<br><br>';

// ----  Include or Require external files ----- //

    echo '<h4>Here we include the user.php file:</h4>';

    // begin output html
    echo '<div style="background: #f1f1f1;">
             <h5>Example:</h5>
                <p style="text-align: left;">';

include "user.php";

    echo '<br><br></p></div>';

// this will halt the script if fnf
// require "user.php"
//
// this will continue scipt if fnf
// include "user.php"

// end html code section

echo '</p>';

echo '<h4> An important part of including a file is the directory its in! </h4>
                <p class="p2">Assume a file exists called user.php <br>
                and we want to include this file as before except <br>
                this time the file is located in a different folder than<br>
                the working directory of the current php file.
                </p>
                <p class="p2">When working with a file it is important to know<br>
                 the files location. Some limitations do apply but for the most<br>
                 part php uses linux file structure rules.</p>
                <p class="p2">
                 Some tips:<br>
                 ./filename.php - will look in the current working directory<br>
                 ../anotherFile.php - checks for file in a the parent dir<br>
                 ../folder1/filename.php - file is in a folder located in the parent dir
                 <br></p>';


echo "</div><div>
        <button class='bleft' id='bnext'>Next</button>
        <button class='btuts' id='btuts'>Tutorial Index</button>
        <button class='brght' id='blast'>Last</button>
    </div></body>";

// java script for nav footer
echo "<script type='text/javascript'>

        document.getElementById('bnext').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/part14.php');
        }
        
        document.getElementById('btuts').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/sect.php');
        }

        document.getElementById('blast').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/part12.php');
        }
        
    </script></html>";
?>
