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
                <title>Part 15 :: PHP - The Basics</title>
                </head>
                <body><div class='container'>";

echo "<h1 class='pageHead'>PHP - The Basics :: Part 15 - Using Cookies </h1>";

echo "<h3 class='p1'> Lets take a moment to briefly talk about Cookies in PHP and how they can be used.</h3>";

echo '<p class="p4"> Cookies can be blocked and/or not accepted, also they are<br>
                    not very secure. Remember! DONT use cookies for sensitive<br>
                    or important fuctions within your program design. Always <br>
                    code an alternative method for handling disabled cookies!</p>';

// ---- A brief lesson on PHP and Cookies ----- //

// begin output html
echo '<div style="background: #f1f1f1;">
             <h5>OutPut:</h5>
                <p style="text-align: center;">';

///
///
///
///
////////// ----------- COOKIES : CODE   ----------- \\\\\\\\\\


// to set a cookie on a user machine
//setcookie(...,...,...,...,...);

/*  setcookie pass in values:
    name -> cookies name
    value -> data to store in cookie contents
    expire (opt)-> date on which the cookie invalidates
    path (opt)-> optional recommend path or storage locating
    domain (opt)-> origin domain
    secure (opt)-> security related options
    httponly (opt)-> allows to specify non-https
*/


// example using setcookie
setcookie("furttech","visted:true");

// now to check for a cookie we use $_COOKIE[]
if(isset($_COOKIE["furttech"])){
    // have access to the cookie name
    echo "<h4>".$_COOKIE["furttech"]."</h4><br>";

}

// to check if cookies are even enabled
// set a cookie first

// check to see if count() returns data on $_COOKIES
if(count($_COOKIE)>0){

    echo "<h4>Cookies Are Enabled</h4><br><br>";

}


// to modify the pre-existing cookie
// simply reset the cookie as done initially
// setcookie("furttech","visted:false");



/*
// to delete a cookie, expire the cookie
// set cookie time to value prior to current time
setcookie("furttech","",time() - 5000);
*/


////////// ----------- END CODE   ----------- \\\\\\\\\\
///
///
///
///

echo "</p>";


// end example html code section

echo "</div><div>
    <button class='bleft' id='bnext'>Next</button>
    <button class='btuts' id='btuts'>Tutorial Index</button>
    <button class='brght' id='blast'>Last</button>
</div></body>";

// java script for nav footer
echo "<script type='text/javascript'>

    document.getElementById('bnext').onclick = function(){

        window.location.assign('http://furttech.vedev.space/php/part16.php');
    }
    
    document.getElementById('btuts').onclick = function(){

        window.location.assign('http://furttech.vedev.space/php/sect.php');
    }

    document.getElementById('blast').onclick = function(){

        window.location.assign('http://furttech.vedev.space/php/part14.php');
    }
    
</script></html>";
?>
