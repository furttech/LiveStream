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

echo "<h1 class='pageHead'>PHP - The Basics :: Part 14 - Uploading Files</h1>";

echo "<h3 class='p1'> Uploading Files to a server is a delicate process:</h3>";

echo '<p class="p4">When a user uploads a file to your server it opens a potentially large security hole<br>
                    making it important to use the proper techniques for user interactions!</p>';

// ---------- accessing files with php  ----------- //

echo '<p class="p2"> The first step is providing the user with an area to upload the file on the page.</p>
                <h4> Create the HTML form needed to submit the file info: </h4>
                <br>
                <div class="p2">
                <textarea rows="8" cols="110" class="ta" readonly>    
                    <form action="ourFile.php" method="POST">
                        <h3>Select a file:</h3>
                        <input type="file" name="fileUpName" id="fileUpName">
                        <input type="submit" value="Upload Image" name="sub">
                    </form>
                </textarea>
                </div>
                <h4>Two interaction methods exist in this form: </h4>
                <div class="p5"><br>
                <textarea rows="4" cols="110" class="ta" readonly>
                
                <var> <input type="file"> </var><br>
                <var> <input type="submit"> </var><br>
                </textarea>
                <br><br>
                The input file tag will act as the interfacing point which opens a local<br>
                file browser on the users system.<br>
                The submit button acts like a normal form submission button.<br>
                Once the user clicks the submit button the file is past onto the server.<br>
                </div>';

// ----  Include or Require external files ----- //

echo '<h4>Here we include the user.php file:</h4>';

// begin output html
echo '<div style="background: #f1f1f1;">
             <h5>Example:</h5>
                <p style="text-align: center;">';

///
///
///
///
////////// ----------- FILE UPLOAD FORM : CODE   ----------- \\\\\\\\\\

// ussually coupled with some HTML form submission
echo '<form action="ourFileUpLoader.php" method="POST" enctype="multipart/form-data">

        <h3>Select a file:</h3>
        <input type="file" name="fileUpName" id="fileUpName" >
        <input type="submit" value="Upload File" name="sub">

     </form><br><br>';


////////// ----------- END CODE   ----------- \\\\\\\\\\
///
///
///
///


    // end example
    echo '</p></div>';

    echo '<p class="p2"> The next step is deals with the server side handling of the uploaded file.</p>
                <h4> The Submitted file is passed via post to the server: </h4>
                <br>
                <p class="p4">
                When a file is past to the php server via a form it first looks for the php file<br>
                selected as the <i>action</i> atribute of the form tag.<br>
                </p>
                <h4>The submitted file is then stored in the local web server as an object: </h4>
                <p class="p5">
                <var>$_FILES[]</var> is a server variable or object which will contain the file passed<br>
                via the form submission.<br>
                A common mistake is to improperly specify the file location in the forms<br>
                <i>action=""</i> atribute, which will cause the post to fail and the<br>
                resulting upload with fail.<br>
                </p>';


// end example html code section

echo "<br></div><div>
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

            window.location.assign('http://furttech.vedev.space/php/part13.php');
        }
        
    </script></html>";
?>
