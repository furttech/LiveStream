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

    table.stable {

        width: 100%;
        height: auto;

        position: inherit;

        padding: 10px;

        border-spacing: 5px;

    }

    .tdbtn{
        display: block;
        margin: auto;
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
                <title>Part 20 :: PHP - The Basics</title>
                </head>
                <body><div class='container'>";

echo "<h1 class='pageHead'>PHP - The Basics :: Part 20 - Using MySql </h1>";

echo "<h3 class='p1'> PHP is a powerful language and when paired with a data base it becomes doubly so!</h3>";

echo '<p class="p4">A PHP script can handle most of the developers needs but on occasion the need<br>
                    arises to store data, sometimes large amounts of it, on a per user bases. <br>
                    Keeping track of this information can be very difficult and a server alone <br>
                    is not outfitted to handle such a task.<br>
                    Storing user generated data on a local file system can not only be slow, but<br>
                    present a potentially serious security vulnerability.<br>
                    </p>';

echo "<p class='p5'>Luckily, over the years a few clever developers came up with the idea to integrate<br>
                    a database with a web application and the golden stack was born.<br>
                    Now almost every major web platform that handles user data will rely on some <br>
                    form of data base as a back end support module.<br>
                    This provides quick and easy storage/access to all data via simple interface<br>
                    or system framework.</p>";


// ---- Using Proper Error Handling ---- //

// begin output html
echo '<div style="background: #f1f1f1;">
             <h5>Select Examples:</h5>
                <div style="text-align: center;">';

///
///
///
///
////////// ----------- MYSQL : CODE   ----------- \\\\\\\\\\

// ---- Using php with MySQL ---- //


/*
    PHP has three separate form in which a data base
    communication is fashioned
    1. Object Oriented MySQLi)
    2. PDO style
    3. MySQL Procedural
    Both allow communication but differ in syntax
*/

echo '<table class="stable">
        <tr>
            <th>Object Based MSQLi</th>
            <th>PDO Style MySQL</th>
            <th>Procedural MySQL</th>
        </tr>
        <tr>
            <td><button class="tdbtn" id="objp">Load</button></td>
            <td><button class="tdbtn" id="pdop">Load</button></td>
            <td><button class="tdbtn" id="prop">Load</button></td>
        </tr>
        <tr>
            <td colspan="3">
                <div id="exp"></div>
            </td>  
        </tr>              
     </table>';



// more to come in later video

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
echo "<script
	src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'
	type='text/javascript'></script>
	<script type='text/javascript'>

// example button js

document.getElementById('objp').onclick = function(){

      $.ajax({
            type: 'POST',               
            processData: false, 
            contentType: false,  
            cache: false,
            url: './sql/objectSQL.php',
            success: function(data){
    
                document.getElementById('exp').innerHTML = data;
   
            }
       });
    
}

document.getElementById('pdop').onclick = function(){

          $.ajax({
            type: 'POST',               
            processData: false, 
            contentType: false,  
            cache: false,
            url: './sql/pdoSQL.php',
            success: function(data){
    
                document.getElementById('exp').innerHTML = data;
   
            }
       });
    
    
}

document.getElementById('prop').onclick = function(){

          $.ajax({
            type: 'POST',               
            processData: false, 
            contentType: false,  
            cache: false,
            url: './sql/procSQL.php',
            success: function(data){
    
                document.getElementById('exp').innerHTML = data;
   
            }
       });
       
}

// nav button js

document.getElementById('bnext').onclick = function(){

    window.location.assign('http://furttech.vedev.space/php/part21.php');
}

document.getElementById('btuts').onclick = function(){

    window.location.assign('http://furttech.vedev.space/php/sect.php');
}

document.getElementById('blast').onclick = function(){

    window.location.assign('http://furttech.vedev.space/php/part19.php');
}

</script></html>";
?>
