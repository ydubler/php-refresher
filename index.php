<html>
<body>
    <h1 style="margin:20px">PHP-in-HTML Refresher</h1>
    <a style="margin:20px;margin-top:0px" href="https://github.com/ydubler/php-refresher">Link to Github</a>
    <br/>
    <div id="conditional" style="margin:20px;padding:20px;border:1px solid black;border-radius:20px">
    <h3 style="margin-top:0px"><u>Conditional</u></h3>
        <pre>
$x=1;

if($x==1)
{
    echo "$x==1 is true.";
}
else
{
    echo"$x==1 is not true.";
}
        </pre>
        <hr style="margin-top:0px">
        RESULT
        <hr style="margin-bottom:0px">
        <br/>
        <?php
        // Basic Conditional
        $x=1;

        if($x==1)
        {
            echo "\$x==1 is true.";
        }
        else
        {
            echo"\$x==1 is not true.";
        }
        ?>
    </div>
    <div id="listing-array" style="margin:20px;padding:20px;border:1px solid black;border-radius:20px">
    <h3 style="margin-top:0px"><u>Listing Contents of Array</u></h3>
        <pre>
$people = array("First Entry in Array","Second Entry in Array", "Third Entry", "Fourth");
$length = count($people);

foreach($people as $person)
{
    echo $person;
    echo "&lt;br/&gt;";
}
        </pre>
        <hr style="margin-top:0px">
        RESULT
        <hr style="margin-bottom:0px">
        <br/>
        <?php
        // List contents of array
        $people = array("First Entry in Array","Second Entry in Array", "Third Entry", "Fourth");

        foreach($people as $person)
        {
            echo $person;
            echo "<br/>";
        }
        ?>
    </div>
    <div id="sum-array" style="margin:20px;padding:20px;border:1px solid black;border-radius:20px">
    <h3 style="margin-top:0px"><u>Sum Contents of Array</u></h3>
        <pre>
$numbers = array(1,2,3,4,5);
$count = count($numbers);
$sum = 0;

for($i=0;$i<$count;$i++)
{
    if($i < $count-1){
        echo " $numbers[$i] + ";
    }
    else
    {
        echo " $numbers[$i] = ";
    }

    $sum += $numbers[$i];
}
echo "$sum"
        </pre>
        <hr style="margin-top:0px">
        RESULT
        <hr style="margin-bottom:0px">
        <br/>
        <?php
        // Sum contents of array
        $numbers = array(1,2,3,4,5);
        $count = count($numbers);
        $sum = 0;

        for($i=0;$i<$count;$i++)
        {
            if($i < $count-1){
                echo " $numbers[$i] + ";
            }
            else
            {
                echo " $numbers[$i] = ";
            }

            $sum += $numbers[$i];
        }
        echo "$sum"
        ?>
    </div>
    <div id="variable-types" style="margin:20px;padding:20px;border:1px solid black;border-radius:20px">
    <h3 style="margin-top:0px"><u>Variable Types</u></h3>
        <pre>
$int = 1234;
$float = 2.2;
$bool = true;
$string = "a string of characters";
define("NAME_OF_CONSTANT", "This is a constant!");

echo "\$int = $int;&lt;br/&gt;";
echo "is integer? " . is_int($int) . "&lt;br/&gt;";
echo var_dump($int) . "&lt;br/&gt;";
echo "&lt;br/&gt;";

echo "\$float = $float;&lt;br/&gt;";
echo "is float? " . is_float($float) . "&lt;br/&gt;";
echo var_dump($float) . "&lt;br/&gt;";
echo "&lt;br/&gt;";

echo "\$bool = $bool;&lt;br/&gt;";
echo "is bool? " . is_bool($bool) . "&lt;br/&gt;";
echo var_dump($bool) . "&lt;br/&gt;";
echo "&lt;br/&gt;";

echo '$string = "a string of characters"&lt;br/&gt;';
echo "is string? " . is_string($string) . "&lt;br/&gt;";
echo var_dump($string) . "&lt;br/&gt;";
echo "&lt;br/&gt;";

echo "NAME_OF_CONSTANT = NAME_OF_CONSTANT;&lt;br/&gt;";
echo "is string? " . is_string(NAME_OF_CONSTANT) . "&lt;br/&gt;";
echo var_dump(NAME_OF_CONSTANT) . "&lt;br/&gt;";
        </pre>
        <hr style="margin-top:0px">
        RESULT
        <hr style="margin-bottom:0px">
        <br/>
        <?php
        // Basic Conditional
        $int = 1234;
        $float = 2.2;
        $bool = true;
        $string = "a string of characters";
        define("NAME_OF_CONSTANT", "This is a constant!");
        
        echo "\$int = $int;<br/>";
        echo "is integer? " . is_int($int) . "<br/>";
        echo var_dump($int) . "<br/>";
        echo "<br/>";

        echo "\$float = $float;<br/>";
        echo "is float? " . is_float($float) . "<br/>";
        echo var_dump($float) . "<br/>";
        echo "<br/>";

        echo "\$bool = $bool;<br/>";
        echo "is bool? " . is_bool($bool) . "<br/>";
        echo var_dump($bool) . "<br/>";
        echo "<br/>";
        
        echo '$string = "a string of characters"<br/>';
        echo "is string? " . is_string($string) . "<br/>";
        echo var_dump($string) . "<br/>";
        echo "<br/>";

        echo 'NAME_OF_CONSTANT = "' . NAME_OF_CONSTANT . '"<br/>';
        echo "is string? " . is_string(NAME_OF_CONSTANT) . "<br/>";
        echo var_dump(NAME_OF_CONSTANT) . "<br/>";
        ?>
    </div>
    <div id="functions-1" style="margin:20px;padding:20px;border:1px solid black;border-radius:20px">
    <h3 style="margin-top:0px"><u>Functions I</u></h3>
        <pre>
function listOfGoodBooks(){
    echo "Romeo and Juliet&lt;br/&gt;";
    echo "Their Eyes Were Watching God&lt;br/&gt;";
    echo "The Count of Monte Cristo&lt;br/&gt;";
    echo "The Sun Also Rises&lt;br/&gt;";
    echo "The Grapes of Wrath&lt;br/&gt;";
    echo "Catcher in the Rye&lt;br/&gt;";
}

echo "&lt;u&gt;Good Books&lt;/u&gt;&lt;br/&gt;";
listOfGoodBooks();
        </pre>
        <hr style="margin-top:0px">
        RESULT
        <hr style="margin-bottom:0px">
        <br/>
        <?php
        // Functions
        function listOfGoodBooks(){
            echo "Romeo and Juliet<br/>";
            echo "Their Eyes Were Watching God<br/>";
            echo "The Count of Monte Cristo<br/>";
            echo "The Sun Also Rises<br/>";
            echo "The Grapes of Wrath<br/>";
            echo "Catcher in the Rye<br/>";
        }

        echo "<u>Good Books</u><br/>";
        listOfGoodBooks();
        ?>
    </div>
    <div id="functions-2" style="margin:20px;padding:20px;border:1px solid black;border-radius:20px">
    <h3 style="margin-top:0px"><u>Functions II</u></h3>
        <pre>
function listOfBooksByAuthor($author){
    $shakespeare = array("Romeo and Juliet", "Hamlet", "Macbeth", "Othello", "Midsummer Nights Dream", "King Lear");
    $zora = array("Their Eyes Were Watching God");
    $vonnegut = array("Slaughterhouse V", "Cat's Cradle");

    if($author == "Shakespeare")
    {
        echo "&lt;u&gt;Some of Shakespeare's Books:&lt;/u&gt;&lt;br/&gt;";
        foreach($shakespeare as $book)
        {
        echo $book;
        echo "&lt;br/&gt;";
        }
    }
    
    else if($author == "Hurston")
    {
        echo "&lt;u&gt;A Popular Book of Zora Neal Hurston:&lt;/u&gt;&lt;br/&gt;";
        foreach($zora as $book)
        {
        echo $book;
        echo "&lt;br/&gt;";
        }
    }

    else if($author == "Vonnegut")
    {
        echo "&lt;u&gt;A Couple Popular Books written by Kurt Vonnegut:&lt;/u&gt;&lt;br/&gt;";
        foreach($vonnegut as $book)
        {
        echo $book;
        echo "&lt;br/&gt;";
        }
    }
    else
    {
        echo "Author $author not found!";
    }
}

listOfBooksByAuthor("Shakespeare");
echo "&lt;br/&gt;";
listOfBooksByAuthor("Hurston");
echo "&lt;br/&gt;";
listOfBooksByAuthor("Vonnegut");
echo "&lt;br/&gt;";
listOfBooksByAuthor("George R R Martin");
        </pre>
        <hr style="margin-top:0px">
        RESULT
        <hr style="margin-bottom:0px">
        <br/>
        <?php
        // Functions
        function listOfBooksByAuthor($author){
            $shakespeare = array("Romeo and Juliet", "Hamlet", "Macbeth", "Othello", "Midsummer Nights Dream", "King Lear");
            $zora = array("Their Eyes Were Watching God");
            $vonnegut = array("Slaughterhouse V", "Cat's Cradle");

            if($author == "Shakespeare")
            {
                echo "<u>Some of Shakespeare's Books:</u><br/>";
                foreach($shakespeare as $book)
                {
                echo $book;
                echo "<br/>";
                }
            }
            
            else if($author == "Hurston")
            {
                echo "<u>A Popular Book of Zora Neal Hurston:</u><br/>";
                foreach($zora as $book)
                {
                echo $book;
                echo "<br/>";
                }
            }

            else if($author == "Vonnegut")
            {
                echo "<u>A Couple Popular Books written by Kurt Vonnegut:</u><br/>";
                foreach($vonnegut as $book)
                {
                echo $book;
                echo "<br/>";
                }
            }
            else
            {
                echo "Author $author not found!";
            }
        }

        listOfBooksByAuthor("Shakespeare");
        echo "<br/>";
        listOfBooksByAuthor("Hurston");
        echo "<br/>";
        $listOfBooksByAuthor = "listOfBooksByAuthor";  // setting the function name as a variable stringe
        $listOfBooksByAuthor("Vonnegut");              // calling the function as the variable
        echo "<br/>";
        $listOfBooksByAuthor("George R R Martin");     // calling the function as the variable
        ?>
    </div>
</body>
</html>