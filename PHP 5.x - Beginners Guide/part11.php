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
            <title>Part 11 :: PHP - The Basics</title>
            </head>
            <body><div class='container'>";

    echo "<h1 class='pageHead'>PHP - The Basics :: Part 11 - Working w/ Files</h1>";

    echo "<h3> Accesing Files is an important Aspect of PHP:</h3>";

    echo '<p class="p1">Somtimes it can be handy to access a file on the local file system.<br>
            This must be done properly to ensure the file is opened correctly and/or to perform the <br>
            desired file related tasks.</p>';

    // ---------- accessing files with php  ----------- //

    echo '<p class="p2"> Opening a file directly can throw errors when the file does not exist:</p>
            <h4> Your File Must Exist in order to read it! </h4>
            <p class="p4">A quick and dirty way to open a file can be accomplished useing <i>readfile(filename)</i><br>
            One must make certain the file exists or the resulting fuction will cause an error.             
                <br></p>';

    // begin array output html
    echo '<div style="background: #f1f1f1;">
         <h5>Example:</h5>
            <p style="text-align: left;"><br>      
        
        //      this would throw and error<br>
        //      to read from the file directly<br>
        readfile($ourFileName);
        
        
        <br><br>
    </p></div>';


    echo '<p class="p2">One can create a new file automatically when the file is absent.</p>
            <h4>Now for the "better way" to open a file for reading, writing or both: </h4>
            <p class="p5">A better option for manipulating files can be found in the 
            <i>fopen(filename, <mode>)</i> <br> function which allows for multiple modes of file handling.<br>
            </p>';
///
///
///
///
///
    ////////// -----------  FOPEN CODE   ----------- \\\\\\\\\\


    /* fopen modes
    r   read only -> read from\\ begining of file
    w   write only -> recreate file or create new -> write from\\ begining
    a   append -> appends data to end of file -> \\
    x / x+  create new file - returns false if file exists
    r+  read/write -> \\beging
    w+  read/write -> overwrites from\\ begining -> creates new
    a+  read/write -> appends to end of file -> \\
    */

    // this time a file is automatically created in local dir called tester.txt<br>
    $ourFileName = "./tester.txt";

    // use fopen with filename and mode value to open a file for writing
    $fp = fopen($ourFileName, "w+") or die("Unable to open file");


    ////////// ----------- END FOPEN CODE   ----------- \\\\\\\\\\
///
///
///
///

    echo '<p class="p2"> The Return Value from fopen provides a file pointer:</p>
            <p class="p3"> Think of this file pointer as the cursor in a word document. <br>
            When a read or write call is performed using the returned pointer<br>
            the action will begin starting at the location of the File pointer.</p>
            <p class="p5">Write to a File pointer using <i>fwrite(filePointer,"value to write")</i><br>
            Remeber the writing starts and stops with the file pointer<br>
            tracking the location as the write occurs.<br></p>';


    // begin output html
    echo '<div style="background: #f1f1f1;">
             <h5>Example:</h5>
                <p style="text-align: left;"><br>';

///
///
///
///
///
    ////////// -----------  FWRITE CODE   ----------- \\\\\\\\\\

    echo "We <i>write</i> to the file: <br>ourfile<-[ We are writing a phrase to our file! Yippy! ]<br>";

    $p = fwrite($fp,"We are writing a phrase to our file! Yippy!");
    if($p==0){echo "<p>Nothing was written<br></p>";}else{echo "<p>$p bytes have been written<br></p>";}
    fclose($fp);

    ////////// ----------- END FWRITE CODE   ----------- \\\\\\\\\\
///
///
///
///

    echo '<br><br></p></div>';

    echo '<p class="p2">Remeber the reading also starts and stops with the file pointer<br>
            tracking the location as the read occurs.</p>
            <p class="p5">Reading from a File pointer using  <i>fread(filePointer,[length to read])</i><br>
            will return an object containing the number of values provided or all untill EOF was reached.</p>';

    // begin array output html
    echo '<div style="background: #f1f1f1;">
                 <h5>Example:</h5>
                    <p style="text-align: left;"><br>';


///
///
///
///
///
    ////////// -----------  F_READ CODE   ----------- \\\\\\\\\\



    echo "Here we attempt to read 16 bytes from the file <i>tester.txt</i><br><br>";

    // opens file a read and returns file pointer at BOF
    $fp = fopen($ourFileName, "r") or die("Unable to open file");

    //read sixteen bytes from the file
    $p = fread($fp,16);
    if($p==FALSE){echo "Read Fail<br>";}else{echo "File Out-Put ::<br>$p<br><br>";}

    // after opening with fopen one needs to close the file using the file pointer
    fclose($fp);


    ////////// ----------- END F_READ CODE   ----------- \\\\\\\\\\
///
///
///
///
///

// end html code section
echo "</p></div><br><br><div>
        <button class='bleft' id='bnext'>Next</button>
        <button class='btuts' id='btuts'>Tutorial Index</button>
        <button class='brght' id='blast'>Last</button>
    </div></body>";

// java script for nav footer
echo "<script type='text/javascript'>

        document.getElementById('bnext').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/part12.php');
        }
        
        document.getElementById('btuts').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/sect.php');
        }

        document.getElementById('blast').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/part10.php');
        }
        
    </script></html>";
?>

