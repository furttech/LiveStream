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
                <title>Part 14 :: PHP - The Basics</title>
                </head>
                <body><div class='container'>";

echo "<h1 class='pageHead'>PHP - The Basics :: Part 14.5 - Checking the Uploaded File</h1>";

echo "<h3 class='p1'> Lets check the file information from the post submission:</h3>";

echo '<p class="p4">If you did not select the proper jpg file type you will recive an error!</p>';

// begin output html
echo '<div style="background: #f1f1f1;">
             <h5>OutPut:</h5>
                <p style="text-align: center;">';

///
///
///
///
////////// ----------- FILE UPLOAD : CODE   ----------- \\\\\\\\\\


// we add a button to check our upload file details
// this gives us a response from the file upload
// refer to the ourFileUpLoader.php to continue demo



// first a dir must be provided to store file
$ourDir = "./uploadsFile/";

// create our target file path and name from post data
// assume have file /this/that/inbetween.you
// basename returns inbetween.you
$targetPath = $ourDir . basename($_FILES["fileUpName"]["name"]);

// get our file type ext
$fileExt = pathinfo($targetPath,PATHINFO_EXTENSION);

// check if restricted file type is uploaded
// this case checks for .jpg
if($fileExt != "jpg"){
    # do whatever
    echo "<h4>Error :: Your file must be a .jpg file</h4>";
    die("file size");
}

// restrict file size to roughly 1 MB
if($_FILES["fileUpName"]["size"] > 1024000){
    // error file size to big
    echo "<h4>Error :: File Size is too big!</h4>";
    die("file size");
}


// check for existing file name
if (file_exists($targetPath)) {
    //error file already exists
    echo "<h4>Error :: Im sorry, but you cannot re-upload the same file!</h4>";
    die("file size");
}

// checks file info for mime type
$sizeObj = finfo_file(finfo_open(FILEINFO_MIME_TYPE), $_FILES["fileUpName"]['tmp_name']);

/* Process image with GD library */
$verifyimg = getimagesize($_FILES['fileUpName']['tmp_name']);

/* Make sure the MIME type is an image */
$pattern = "#^(image/)[^\s\n<]+$#i";

// if(!preg_match($pattern, $verifyimg['mime']){
// die("Only image files are allowed!");
// }

////////// ----------- END CODE   ----------- \\\\\\\\\\
///
///
///
///

echo "</p>";

// once the file passes checks
// to copy the physical file to drive
// we omit this step in the demonstration code

// move_uploaded_file($_FILES["fileUpName"]["name"], $targetPath);
echo "<h3> You have uploaded an Image:</h3>
    <p class='p5'>
     Base Name: ".basename($_FILES["fileUpName"]["name"])."<br>
     Size: <i>".$_FILES['fileUpName']['size']."</i><br>
     Target Path: ".$targetPath."<br>
     Mime Type: ".$verifyimg['mime']."<br>
     Error : ".$_FILES['fileUpName']['error']."<br>
    </p>";

// end example html code section

echo "</div><div>
        <button class='bleft' id='bnext'>Next</button>
        <button class='btuts' id='btuts'>Tutorial Index</button>
        <button class='brght' id='blast'>Last</button>
    </div></body>";

// java script for nav footer
echo "<script type='text/javascript'>

        document.getElementById('bnext').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/part15.php');
        }
        
        document.getElementById('btuts').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/sect.php');
        }

        document.getElementById('blast').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/part14.php');
        }
        
    </script></html>";
?>
