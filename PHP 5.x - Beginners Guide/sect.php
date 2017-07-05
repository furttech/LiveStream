<style>

    div.container {
        display: inline-block;
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

    table.part{


        height: auto;
        margin: 0 auto;
        text-align: center;

    }

    th {
        border-collapse: collapse;
        border-bottom: 1px solid #000;
    }

    div.dpart{
        display: block;
        position: inherit;
        margin-bottom: 5%;
        text-align: center;
        border: 1px solid green;
        padding: 5px;
    }
    a{
        text-decoration: none;
    }

</style><?php

// using echo to pass html back to the client
echo "<!DOCTYPE html>
    <html>
    <head>
    <title>Overview :: PHP - The Basics</title>
    </head>
    <body><div class='container'>";

echo "<header><h1 class='pageHead'>PHP - The Basics :: An Overview of Syntax and Technique</h1></header>";

echo "<h4 class='p3'><a href='https://github.com/furttech/LiveStream/tree/master/PHP%205.x%20-%20Beginners%20Guide'>
        Git the Code Here!</a></h4>
        <div class='dpart'><table class='part'>";

    $pages = array("Some Basics",
        "Some Variables",
        "Arrays",
        "More Arrays",
        "Functions",
        "Variable/Function Scope",
        "Decision Structures",
        "Switch Statements",
        "Loops - While / For",
        "Loops - ForEach",
        "Working w/ Files",
        "More Working w/ Files",
        "Including Files",
        "Uploading Files",
        "Using Cookies",
        "Understanding Sessions",
        "Filters",
        "Error Handling",
        "Exception Handling",
        "Using MySql",
        "Using Classes");
    
    $videoLinks = array("watch?v=7c4G3hJHE-k",
                        "watch?v=0IBcB2XxdAg");

        echo '<tr>
                <th>Sections</th>
                <th>Title</th>
                <th>YouTube</th>
            </tr>';

    $index = 1;
    foreach($pages as $value){

        echo '<tr>
                    <td><a href="http://furttech.vedev.space/php/part'.$index.'.php">Part '.$index.':</a></td>
                    <td><label>'.$value.'</label></td>
                    <td><a class="fa fa-youtube-play" href="https://www.youtube.com/'.$videoLinks[$index-1].'"></a></td>
             </tr>';

        $index++;
    }

echo '</table></div>';


// end html code section
echo "</div><div>
        <button class='bleft' id='bnext'>Next</button>
        <button class='btuts' id='btuts'>Tutorial Index</button>
        <button class='brght' id='blast'>Last</button>
    </div></body>";


// java script for nav footer
echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
      <script type='text/javascript'>

        document.getElementById('bnext').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/part1.php');
        }
        
        document.getElementById('btuts').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/sect.php');
        }

        document.getElementById('blast').onclick = function(){

            window.location.assign('http://furttech.vedev.space/php/sect.php');
        }
        
    </script></html>";
?>
