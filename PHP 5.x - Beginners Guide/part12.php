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
/**
 * User: Furt_Tech
 * Date: 6/15/2017
 * Time: 8:51 PM
 */

    // using echo to pass html back to the client
    echo "<!DOCTYPE html>
                <html>
                <head>
                <title>Part 12 :: PHP - The Basics</title>
                </head>
                <body><div class='container'>";

    echo "<h1 class='pageHead'>PHP - The Basics :: Part 12 - More Working w/ Files</h1>";

    echo "<h3> Accesing Files is an important Aspect of PHP:</h3>";

    echo '<p class="p1">Depending on the format or type of file access one desires <br>
        a few other methods exist for managing files within php scripts.</p>';

    // ---------- accessing files with php  ----------- //

    echo '<p class="p2"> Opening a file directly can throw errors when the file does not exist:</p>
                <h4> Your File Must Exist in order to read it! </h4>
                <p class="p2">A quick and dirty way to open a file can be accomplished useing <i>readfile(filename)</i><br>
                One must make certain the file exists or the resulting fuction will cause an error.             
                    <br></p>';

    // begin output html
    echo '<div style="background: #f1f1f1;">
             <h5>Example:</h5>
                <p style="text-align: left;"><br>';

///
///
///
///
///
////////// -----------  FGETS CODE   ----------- \\\\\\\\\\

    // this time a file is already created in local dir called tester.txt<br>
    $ourFileName = "./tester.txt";

    // create another new file
    $fp = fopen($ourFileName, "r+") or die("Unable to open file");

    // return one line of data from file at current file pointer locating
    // after this function is done executing it advances the pointer to the next line
    echo "We retrived the line: <br><br>".fgets($fp)."<br><br>";

    // after opening with fopen one needs to close the file
    fclose($fp);

////////// ----------- END FGETS CODE   ----------- \\\\\\\\\\
///
///
///
///

    // end example
    echo '</p></div>';

    // begin output html
    echo '<div style="background: #f1f1f1;">
             <h5>Example:</h5>
                <p style="text-align: left;"><br>';

///
///
///
///
///
////////// ----------- LOOPS W/ FGETS CODE   ----------- \\\\\\\\\\


    // create another new file
    $anotherNewFile = fopen($ourFileName, "r+") or die("Unable to open file");

    echo "We start fetching each line untill EOF: <br><br>";

    // feof can be used to capture line by line
    while(!feof($anotherNewFile)){

        // echos each line of the file
        echo fgets($anotherNewFile)."<br><br>";
        // advances filepointer to next line on completion
    }

    // end of file has been reached
    echo " : EOF : <br><br>";

    // after opening with fopen one needs to close the file
    fclose($anotherNewFile);

////////// ----------- END LOOPS W/ FGETS CODE   ----------- \\\\\\\\\\
///
///
///
///

    // end example
    echo '</p></div>';

    // begin output html
    echo '<div style="background: #f1f1f1;">
             <h5>Example:</h5>
                <p style="text-align: left;"><br>';

///
///
///
///
///
////////// ----------- LOOPS W/ FGETC CODE   ----------- \\\\\\\\\\


    // create another new file
    $anotherNewFile = fopen($ourFileName, "r+") or die("Unable to open file");


    // feof can also be used with fgetc() to read char by char
    while(!feof($anotherNewFile)){

        // echo each char of the file
        // advances pointer to next char in file
        echo fgetc($anotherNewFile)."<br>";
    }

    // end of file has been reached
    echo " : EOF : <br><br>";


    // after opening with fopen one needs to close the file
    fclose($anotherNewFile);


////////// ----------- END LOOPS W/ FGETC CODE   ----------- \\\\\\\\\\
///
///
///
///

    // end example
    echo '</p></div>';

// end html code section
echo "</div><div>
        <button class='bleft' id='bnext'>Next</button>
        <button class='btuts' id='btuts'>Tutorial Index</button>
        <button class='brght' id='blast'>Last</button>
    </div></body>";

// java script for nav footer
echo "<script type='text/javascript'>

        document.getElementById('bnext').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/part13.php');
        }
        
        document.getElementById('btuts').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/sect.php');
        }

        document.getElementById('blast').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/part11.php');
        }
        
    </script></html>";
?>

