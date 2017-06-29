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
        background-color: #f1f595;
        padding: 3%;
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
    <title>Part 6 :: PHP - The Basics</title>
    </head>
    <body><div class='container'>";
    echo "<h1 class='pageHead'>PHP - The Basics :: Part 6 - Varible/Function Scope</h1>";

    echo "<h3 class='p1'> Understanding Variable scope can be difficult</h3>";

    echo "<p class='p2'>But with a little help all the confussion will clear up!</p><br>";

    echo "<h4>Basically Scope pertains to how a Variable, Constant or Function is Accessable</h4>";
    // ----- Understanding Scope ------ //

    echo "<p class='p2'>When a variable is declared is has what is called a scope,<br>
            This scope idea is a programatic scheme which allows a variable to<br>
            hold significance within certain areas of the program code</p><br>

            <p class='p3'>
            <i> Picture this in you mind! </i>
            <br>       Program Code      <br>
            <br>-------------------------<br>
            <br>   varible d           
            <br>                       
            <br>   function p(d){      
            <br>     varible f = d     
            <br>   return  f           
            <br>                       
            <br>   }                   
            <br>                       
            <br>   d = p(d)            
            <br>-------------------------<br><br>

            <i> Now imagine this other  ! </i>
            <br>       Program Code      <br>
            <br>-------------------------<br>
            <br>   varible d           
            <br>                       
            <br>   function p(d){      
            <br>     varible f = d +1  
            <br>   return  f           
            <br>                       
            <br>   }                   
            <br>                       
            <br>   d = p(d)            
            <br>-------------------------<br></p>";

    echo "<h4>Notice how both sudo code segments represent a seperate program</h4><p class='p4'>
            When running each of these programs individually, each has its own set of parameters<br>
            The first and second program each has a variable d, they each have a function named p<br>
            Both of these programs run seperately without issue but when attempting to include one<br>
            withing the other or visa versa, a serious problem of scope comes into play.</p><br>";

    echo    "<h4>Any variable declared outside of a class or function will have the scope of global<br>
            unless otherwise declared with a keyword</h4>";

    echo    "<p class='p2'>The above sudo code would conflict due to the like names of the globally defined <br>
            variable d and function p<br><br>
            <i>One key thing to note is the variable f inside the functions p</i><br>
             thess are both local to their function because they are inside the {}</p><br>";

    // this is a regular variable
    // the global scope provides reach to any program this file is included with
    // global scope delaration
    $imGlobal = 'global1';

    // global scope function
    function FaName($value='shit'){
        // the <global> keyword allows a global delaration
        // despite restrictive local declaritive state
        global $imAsloGlobal;
        $imAsloGlobal = "global2";
       
        // note this is not the same as our $imGlobal 
        // local scope with in the function
        $imGlobal = "local value";
        // local scope varible 
        // local to the Function
        $imLocal = "local value";

        return $imLocal;
    }

    echo "<h4>Accessable or Not</h4>";

    // now outside of the function 
    // the imLocal varible is not defined
    echo '<p class="p3">$imLocal is not Accessable: '.$imLocal.'<br>
    This is because it belongs locally to the function FaName<br><br>';
    // this will however echo as desired
    // a call to the function must be made to set the varible
    echo 'Now $imAsloGlobal is still not Accessable: ['.$imAsloGlobal.' ]<br>
    Calling the Function FaName will declare the varible and make Accessable<br>';
    
    //to access the value inside the function retrive the returned local value 
    echo 'We can however access the return value from FaName: '.FaName().'<br>
    This returns the <i>local</i> value from within the function<br><br>';

     echo 'Now $imAsloGlobal is Accessable: ['.$imAsloGlobal.' ]<br>
    Calling the Function FaName declared the varible and made Accessable<br>
    This is because it was defined as global using the <i>global</i> keyword</p><br>';


// end html code section
echo "</div><div>
        <button class='bleft' id='bnext'>Next</button>
        <button class='btuts' id='btuts'>Tutorial Index</button>
        <button class='brght' id='blast'>Last</button>
    </div></body>";

// java script for nav footer
echo "<script type='text/javascript'>

        document.getElementById('bnext').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/part7.php');
        }
        
        document.getElementById('btuts').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/sect.php');
        }

        document.getElementById('blast').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/part5.php');
        }
        
    </script></html>";
?>
