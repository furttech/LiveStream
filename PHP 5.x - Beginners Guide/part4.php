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

    // using echo to pass html back to the client 
    echo "<!DOCTYPE html>
    <html>
    <head>
    <title>Part 4 :: PHP - The Basics</title>
    </head>
    <body><div class='container'>";
    echo "<h1 class='pageHead'>PHP - The Basics :: Part 4 More Arrays</h1>";

    // ---------- Accessing Associative Arrays with php  ----------- //

    echo '<h3 class="p1"> Using Associative Types of Array Initialization</h3>
         <p class="p2">Associative Arrays use Pairs:<br> [Key] => [value] 
         <br>The Key can be thought of as the index or location in the array structure</p>';


    // begin array output html
    echo '<div style="background: #f1f1f1;">
             <h5>Example:</h5>
                <p style="text-align: left;"><br>';

///
///
///
///
///
////////// ----------- ASSOCIATIVE ARRAY CODE   ----------- \\\\\\\\\\

    // USING ARRAYS : 3 types
    // numerical array - std indexed array val[0],val[1]...
    // associative array - basically give the index a name val['donk']
    // multidimensional array - array inside a parent array [[...],[...],[...]]

    // using associative Arrays
    $snake1['type']='cobra'; 
    $snake1['venom']='danger';
    $snake1['length']=8;

    // accessing array by associative reference
    echo "Accessing the array with 'type' index key: ".$snake1['type'];
    
    // associative type using object type assignment
    $snake2 = array ('one'=>1,'two'=>2,'three'=>3,'four'=>"four");
    
    // this works in php 5.4 and up
    // basic array using bracketed notation
    // $basicArr2 = ['one'=>1,'two'=>2,'3'=>"three",'four'=>"four"];
    // echo "Assigning by array = [ 'key' => 'value'] index 'two' equals: ".$basicArr2['two']."<br><br>"; // outputs one 


////////// ----------- END : ASSOCIATIVE ARRAY CODE   ----------- \\\\\\\\\\
///
///
///
///

    echo '<br><br></p></div>';

    echo "<h3>Using Associative Types of Arrays as Multi Demensional </h3>
        <p class='p2'> Rememeber Associative Arrays use Pairs:<br>ie:  [Key] => [value] 
        <br><br> With this pairing an array can be assigned as the value:
        <br> ie:     [key] => array(val1, val2, val3)
        <br><br> Sub arrays can also be Associative:
        <br> ie:     [key] => array( 'val' => 'value1', 'val1' => 'value2', 'val3' => array ('vals1' => 'cals1', 'tacos' => 42, 'and' => 'so on' )) </p>";

    // begin array output html
    echo '<div style="background: #f1f1f1;">
             <h5>Example:</h5>
                <p style="text-align: left;"><br>';

///
///
///
///
///
////////// ----------- MULTI DIMENSIONAL ARRAY CODE   ----------- \\\\\\\\\\

    // multi dimensional array

    $condiments = array(
        //pos 0
        'bottles' => array(
            'ketchup' => 100,
            'mustard' => 50,
            'taco sauce'=> 10,
            'hot sauce' => 1,
            'bbq sauce' => 15
        ),
        // pos 1
        'packets' => array(
            'mayo' => 500,
            'ketchup' => 1000,
            'mustard' => 500,
            'relish' => 200,
            'taco' => 200,
            'bbq' => 100,
            'hot sauce' =>500
        ),
        'tubs' => array(
            'ketchup' => 10,
            'mustard' => 8,
            'mayo' => 5
        )
    );

echo 'Outputting values from the multidimensional array is as simple as normal arrays
        <br> One can simply access via associative index name
        <br><br>"$arrname["val1"]["val2"]"';

    // use assigned name instead of index
    echo "<br><br>ie: We can find out how many tubs of ketchup = ".$condiments['tubs']['ketchup']; //outputs 10

    ////////// ----------- END : MULTI ARRAY CODE   ----------- \\\\\\\\\\
    ///
    ///
    ///
    ///

// end html code section
echo "<br><br></div><div>
        <button class='bleft' id='bnext'>Next</button>
        <button class='btuts' id='btuts'>Tutorial Index</button>
        <button class='brght' id='blast'>Last</button>
    </div></body>";

// java script for nav footer
echo "<script type='text/javascript'>

        document.getElementById('bnext').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/part5.php');
        }
        
        document.getElementById('btuts').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/sect.php');
        }

        document.getElementById('blast').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/part3.php');
        }
        
    </script></html>";
?>
