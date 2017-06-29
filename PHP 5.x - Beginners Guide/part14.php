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
                <title>Part 14 :: PHP - The Basics</title>
                </head>
                <body><div class='container'>";

echo "<h1 class='pageHead'>PHP - The Basics :: Part 14 - Uploading Files</h1>";

echo "<h3 class='p1'> Uploading Files to a server is a delicate process:</h3>";

echo '<p class="p4">When a user uploads a file to your server it opens a potentially large security hole<br>
                    making it important to use the </p>';

// ---------- accessing files with php  ----------- //

echo '<p class="p2"> Including other files is easier than one might think.</p>
                <h4> Remember Your File Must Exist to include it! </h4>
                <p class="p2">Assume a file exists call user.php <br>
                and we want to include this file for use <br>
                this gives us access to contents/declarations - ect<br>
                </p>
                <h4>Two primary methods exist: </h4>
                <p class="p2"><br>
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

// ----- file uploads ------- //

// ussually coupled with some HTML form submission
/*
    <form action="ourFile.php" method="POST">

        <h3>Select a file:</h3>
        <input type="file" name="fileUpName" id="fileUpName" >
        <input type='submit' value="Upload Image" name="sub">

    </form>
*/


/*
// these <input> values can now be passed to php
// on submission the files are passed by POST
// php can grab the file with $_FILES[] attribute

// first a dir must be provided to store file
$ourDir = "./uploadsFile";

// create our target file path and name from post data
// assume have file /this/that/inbetween.you
// basename returns inbetween.you
$targetPath = $ourDir. basename($_FILES["fileUpName"]["name"]);

// get our file type ext
$fileExt = pathinfo($targetPath,PATHINFO_EXTENSION);

// check if restricted file type is uploaded
// this case checks for .jpg
if($fileExt != "jpg"){
    # do whatever
}

// restrict file size roughly a  1 MB
if($_FILES["fileUpName"]["size"] > 1024000){
    // error file size to big
}


// check for existing file name
if (file_exists($targetPath)) {
    //error file already exists
}

// one to keep in mind --
// exist a few obscure file checking functions
// ie: getimagesize()


// once the file passes checks
// to copy the physical file to drive
move_uploaded_file($_FILES["fileUpName"]["name"], $targetPath);

// storing a file in this manner is not best practice
// storing a using a direct file name can be a dangerous
// security vulnerability.

*/

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

            window.location.assign('http://furttech.vedev.space/php/part1.php');
        }
        
        document.getElementById('btuts').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/sect.php');
        }

        document.getElementById('blast').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/part13.php');
        }
        
    </script></html>";
?>
