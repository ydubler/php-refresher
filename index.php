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
    <div id="strings-single-double-quotes" style="margin:20px;padding:20px;border:1px solid black;border-radius:20px">
    <h3 style="margin-top:0px"><u>Strings Single vs Double Quotes</u></h3>
        <pre>
$currency = "penny";
$singleQuote = '\'A &lt;b&gt;$currency&lt;/b&gt; saved is a &lt;b&gt;$currency&lt;/b&gt; earned.\' (Single quotes do not insert variables)';
$doubleQuote = "\"A &lt;b&gt;$currency&lt;/b&gt; saved i a &lt;b&gt;$currency&lt;/b&gt; earned.\" (Double quotes insert variables)";

echo $singleQuote . "&lt;br/&gt;";
echo $doubleQuote;
        </pre>
        <hr style="margin-top:0px">
        RESULT
        <hr style="margin-bottom:0px">
        <br/>
        <?php
        // String single vs double quote
        $currency = "penny";
        $singleQuote = '\'A <b>$currency</b> saved is a <b>$currency</b> earned.\' (Single quotes do not insert variables)';
        $doubleQuote = "\"A <b>$currency</b> saved is a <b>$currency</b> earned.\" (Double quotes do insert variables)";

        echo $singleQuote . "<br/>";
        echo $doubleQuote;
        ?>
    </div>
    <div id="eot" style="margin:20px;padding:20px;border:1px solid black;border-radius:20px">
    <h3 style="margin-top:0px"><u>EOT & print()</u></h3>
        <pre>
echo <<&lt;EOT
To be or not to be, that is the question. Whether 'tis nobler in mind to suffer the slings and arrows of outrageous
fortune or tocome to terms with a sea of troubles and by opposing end them...&lt;br/&gt;&lt;br/&gt;
EOT;

print("This is a print statement.");
        </pre>
        <hr style="margin-top:0px">
        RESULT
        <hr style="margin-bottom:0px">
        <br/>
        <?php
        // here document >>> eot
echo <<<EOT
<pre>To be or not to be, that is the question. Whether 'tis nobler in mind to suffer the slings and arrows of outrageous
fortune or tocome to terms with a sea of troubles and by opposing end them...</pre><br/><br/>
EOT;

        print("This is a print statement.");
        ?>
    </div>
    <div id="echo-print-print-r" style="margin:20px;padding:20px;border:1px solid black;border-radius:20px">
    <h3 style="margin-top:0px"><u>echo vs print() vs print_r()</u></h3>
        <pre>
$array = [1,2,3,"four", "V", "sqrt(36)"];

echo 'echo $array : ';
echo $array . "&lt;br/&gt;(...echo doesn't show the contents of the array)";
echo "&lt;br/&gt;&lt;br/&gt;";

print('print($array) : ');
print($array);
print("&lt;br/&gt;(...print() doesn't show the contents of the array)");
print("&lt;br/&gt;&lt;br/&gt;");

print_r('print_r($array) : ');
print_r($array);
print_r("&lt;br/&gt;(...print_r() DOES show the contents of the array)");
        </pre>
        <hr style="margin-top:0px">
        RESULT
        <hr style="margin-bottom:0px">
        <br/>
        <?php
        // print_r prints the contents of an array
        $array = [1,2,3,"four", "V", "sqrt(36)"];

        echo 'echo $array : ';
        echo $array . "<br/>(...echo doesn't show the contents of the array)";
        echo "<br/><br/>";

        print('print($array) : ');
        print($array);
        print("<br/>(...print() doesn't show the contents of the array)");
        print("<br/><br/>");

        print_r('print_r($array) : ');
        print_r($array);
        print_r("<br/>(...print_r() DOES show the contents of the array)");
        ?>
    </div>
    <div id="working-with-arrays-1" style="margin:20px;padding:20px;border:1px solid black;border-radius:20px">
    <h3 style="margin-top:0px"><u>Working With Arrays I: in_array(), array_push(), array[], array_pop(), unset()</u></h3>
        <pre>
$array = [1,2,3];
$count = count($array);

echo "\$array = [ ";
for($i=0; $i<$count; $i++)
{
    if($i < $count - 1)
    {
        echo $array[$i] . " , ";
    }
    else
    {
        echo $array[$i] . " ]";
    }
}
echo "&lt;br/&gt;";

echo "Is 3 in the array? ";
$inArray = in_array(3, $array);
echo $inArray ? "Yes" : "No";
echo "&lt;br/&gt;&lt;br/&gt;";

echo 'array_push($array, 4);&lt;br/&gt;&lt;br/&gt;';
array_push($array, 4);
$count = count($array);
echo "\$array = [ ";
for($i=0; $i<$count; $i++)
{
    if($i < $count - 1)
    {
        echo $array[$i] . " , ";
    }
    else
    {
        echo $array[$i] . " ]";
    }
}
echo "&lt;br/&gt;";
echo "Is 4 in the array? ";
$inArray = in_array(4, $array);
echo $inArray ? "Yes" : "No";
echo "&lt;br/&gt;";
echo "Is 5 in the array? ";
$inArray = in_array(5, $array);
echo $inArray ? "Yes" : "No";
echo "&lt;br/&gt;";
echo "Is 6 in the array? ";
$inArray = in_array(6, $array);
echo $inArray ? "Yes" : "No";
echo "&lt;br/&gt;&lt;br/&gt;";

echo 'array_pop($array) = ';
$poppedValue = array_pop($array);
echo $poppedValue;
echo "&lt;br/&gt;";

$count = count($array);
echo "\$array = [ ";
for($i=0; $i<$count; $i++)
{
    if($i < $count - 1)
    {
        echo $array[$i] . " , ";
    }
    else
    {
        echo $array[$i] . " ]";
    }
}
echo "&lt;br/&gt;&lt;br/&gt;";

echo 'unset($array[0]);&lt;br/&gt;';
unset($array[0]);
$count = count($array);
echo "\$array = [ ";
for($i=array_key_first($array); $i<$count; $i++)
{
    if($i < $count - 1)
    {
        echo $array[$i] . " , ";
    }
    else
    {
        echo $array[$i] . " ]";
    }
}
        </pre>
        <hr style="margin-top:0px">
        RESULT
        <hr style="margin-bottom:0px">
        <br/>
        <?php
        // print_r prints the contents of an array
        $array = [1,2,3];
        $count = count($array);

        echo "\$array = [ ";
        for($i=0; $i<$count; $i++)
        {
            if($i < $count - 1)
            {
                echo $array[$i] . " , ";
            }
            else
            {
                echo $array[$i] . " ]";
            }
        }
        echo "<br/>";

        echo "Is 3 in the array? ";
        $inArray = in_array(3, $array);
        echo $inArray ? "Yes" : "No";
        echo "<br/><br/>";

        echo 'array_push($array, 4);<br/><br/>';
        array_push($array, 4); // push a value to the array 
        $array[] = 5; // another way to push a value to the array
        $count = count($array);
        echo "\$array = [ ";
        for($i=0; $i<$count; $i++)
        {
            if($i < $count - 1)
            {
                echo $array[$i] . " , ";
            }
            else
            {
                echo $array[$i] . " ]";
            }
        }
        echo "<br/>";
        echo "Is 4 in the array? ";
        $inArray = in_array(4, $array);
        echo $inArray ? "Yes" : "No";
        echo "<br/>";
        echo "Is 5 in the array? ";
        $inArray = in_array(5, $array);
        echo $inArray ? "Yes" : "No";
        echo "<br/>";
        echo "Is 6 in the array? ";
        $inArray = in_array(6, $array);
        echo $inArray ? "Yes" : "No";
        echo "<br/><br/>";

        echo 'array_pop($array) = ';
        $poppedValue = array_pop($array); // we pop the value at the end of the array off the array
        echo $poppedValue;
        echo "<br/>";

        $count = count($array);
        echo "\$array = [ ";
        for($i=0; $i<$count; $i++)
        {
            if($i < $count - 1)
            {
                echo $array[$i] . " , ";
            }
            else
            {
                echo $array[$i] . " ]";
            }
        }
        echo "<br/><br/>";

        echo 'unset($array[0]);<br/>';
        unset($array[0]); // unset removes a key/value pair by key from the array
        $count = count($array);
        echo "\$array = [ ";
        for($i=array_key_first($array); $i<$count; $i++)
        {
            if($i < $count - 1)
            {
                echo $array[$i] . " , ";
            }
            else
            {
                echo $array[$i] . " ]";
            }
        }
        ?>
    </div>
    <div id="working-with-arrays-2" style="margin:20px;padding:20px;border:1px solid black;border-radius:20px">
    <h3 style="margin-top:0px"><u>Working With Arrays II: Multidimensional Arrays</u></h3>
        <pre>
$array = [[1,2,3],[4,5,6,7],[8,9,10,11,12]];
$count = count($array);

echo "\$array = [ ";
for($i = 0; $i<$count; $i++)
{
    $count2 = count($array[$i]);

    for($j = 0; $j<$count2; $j++)
    {
        if($j == 0)
        {
        echo " [ " . $array[$i][$j] . " , ";      
        }
        else if($j < ($count2 - 1))
        {
        echo $array[$i][$j] . " , ";   
        }
        else
        {
        echo $array[$i][$j] . " ] ";     
        }
    }

    if($i < ($count-1))
    {
        echo " , ";
    }
}
echo " ]";
        </pre>
        <hr style="margin-top:0px">
        RESULT
        <hr style="margin-bottom:0px">
        <br/>
        <?php
        // Simple example of multidimensional array
        $array = [[1,2,3],[4,5,6,7],[8,9,10,11,12]];
        $count = count($array); // count of outer array

        echo "\$array = [ ";
        for($i = 0; $i<$count; $i++)
        {
            $count2 = count($array[$i]); // count of inner array

            for($j = 0; $j<$count2; $j++)
            {
                if($j == 0)
                {
                echo " [ " . $array[$i][$j] . " , ";      
                }
                else if($j < ($count2 - 1))
                {
                echo $array[$i][$j] . " , ";   
                }
                else
                {
                echo $array[$i][$j] . " ] ";     
                }
            }

            if($i < ($count-1))
            {
                echo " , ";
            }
        }
        echo " ]";
        ?>
    </div>
    <div id="functions-1" style="margin:20px;padding:20px;border:1px solid black;border-radius:20px">
    <h3 style="margin-top:0px"><u>Functions I: Basic Function Call</u></h3>
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
    <h3 style="margin-top:0px"><u>Functions II: Passing arguments to functions</u></h3>
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
        listOfBooksByAuthor("Vonnegut");
        echo "<br/>";
        listOfBooksByAuthor("George R R Martin");
        ?>
    </div>
    <div id="functions-3" style="margin:20px;padding:20px;border:1px solid black;border-radius:20px">
    <h3 style="margin-top:0px"><u>Functions III: Calling a function by string variable</u></h3>
        <pre>
$quotes = array("'To be or not to be, that is the question.' -Shakespeare / Hamlet", '"There are years that ask questions and years that answer." -Zora Neale Hurston / Their Eyes Were Watching God', '"So it goes..." -Kurt Vonnegut / Slaughterhouse V');

function famousQuote(){
    foreach($quotes as $quote)
    {
        echo $quote . "&lt;br/&gt;";
    }
}

$functionName = "famousQuote";
$functionName();
        </pre>
        <hr style="margin-top:0px">
        RESULT
        <hr style="margin-bottom:0px">
        <br/>
        <?php
        // Functions
        function famousQuote(){
            $quotes = array("'To be or not to be, that is the question.' -- Shakespeare / Hamlet", '"There are years that ask questions and years that answer." -- Zora Neale Hurston / Their Eyes Were Watching God', '"So it goes..." -- Kurt Vonnegut / Slaughterhouse V');
            foreach($quotes as $quote)
            {
                echo $quote . "<br/>";
            }
        }

        echo "<u>Famous Quotations</u><br/>";
        $functionName = "famousQuote";
        $functionName(); // call a function by a variable defined as a string containing the name of the function
        ?>
    </div>
    <div id="classes-1" style="margin:20px;padding:20px;border:1px solid black;border-radius:20px">
    <h3 style="margin-top:0px"><u>Classes I: Class and subclass with a constructor, constant, properties, and functions</u></h3>
        <pre>
class Person
{
    function __construct($name="Author Name", $age="Author Age"){
        $this->name = $name;
        $this->age = $age;
    }

    const DESCRIPTION = "This class describes an author's basic information.";
    public $name = "";
    public $age = 0;

    function setNameAndAge($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function getName()
    {
        return $this->name;
    }

    function getAge()
    {
        return $this->age;
    }
}

class Author extends Person
{
    public $famousBook = "";

    // Constructor
    function __construct($name="Author Name", $age="Author Age", $book="Author's Famous Book")
    {
        $this->name = $name;
        $this->age = $age;
        $this->famousBook = $book;
    }
}

$author = new Author("William Shakespeare", 396, "Romeo and Juliet");

echo "&lt;u&gt;Author Information&lt;/u&gt;&lt;br/&gt;";
echo $author->name;
echo "&lt;br/&gt;";
echo $author->age;
echo "&lt;br/&gt;";
echo $author->famousBook;
echo "&lt;br/&gt;&lt;br/&gt;";

$author->name="J. K. Rowling";
$author->age=55;
$author->famousBook = "Harry Potter";
echo "&lt;u&gt;Author Information&lt;/u&gt;&lt;br/&gt;";
echo $author->name;
echo "&lt;br/&gt;";
echo $author->age;
echo "&lt;br/&gt;";
echo $author->famousBook;
echo "&lt;br/&gt;&lt;br/&gt;";

$author->setNameAndAge("Kurt Vonnegut", 101);
$author->famousBook = "Slaughterhouse V";
echo "&lt;u&gt;Author Information&lt;/u&gt;&lt;br/&gt;";
echo $author->getName();
echo "&lt;br/&gt;";
echo $author->getAge();
echo "&lt;br/&gt;";
echo $author->famousBook;
echo "&lt;br/&gt;&lt;br/&gt;";

echo "What does the Person class do?&lt;br/&gt;";
echo $author::DESCRIPTION;
        </pre>
        <hr style="margin-top:0px">
        RESULT
        <hr style="margin-bottom:0px">
        <br/>
        <?php
        // Classes I
        class Person
        {
            // Constructor
            function __construct($name="Author Name", $age="Author Age"){
                $this->name = $name;
                $this->age = $age;
            }

            const DESCRIPTION = "This class describes an author's basic information.";
            public $name = "";
            public $age = 0;

            function setNameAndAge($name, $age)
            {
                $this->name = $name;
                $this->age = $age;
            }

            function getName()
            {
                return $this->name;
            }

            function getAge()
            {
                return $this->age;
            }
        }

        class Author extends Person
        {
            public $famousBook = "";

            // Constructor
            function __construct($name="Author Name", $age="Author Age", $book="Author's Famous Book")
            {
                $this->name = $name;
                $this->age = $age;
                $this->famousBook = $book;
            }
        }

        $author = new Author("William Shakespeare", 396, "Romeo and Juliet");

        echo "<u>Author Information</u><br/>";
        echo $author->name;
        echo "<br/>";
        echo $author->age;
        echo "<br/>";
        echo $author->famousBook;
        echo "<br/><br/>";

        $author->name="J. K. Rowling"; // direct assignment of property
        $author->age=55; // direct assignment of property
        $author->famousBook = "Harry Potter";
        echo "<u>Author Information</u><br/>";
        echo $author->name;
        echo "<br/>";
        echo $author->age;
        echo "<br/>";
        echo $author->famousBook;
        echo "<br/><br/>";

        $author->setNameAndAge("Kurt Vonnegut", 101); // using function to assign property
        $author->famousBook = "Slaughterhouse V";
        echo "<u>Author Information</u><br/>";
        echo $author->getName();
        echo "<br/>";
        echo $author->getAge();
        echo "<br/>";
        echo $author->famousBook;
        echo "<br/><br/>";

        echo "What does the Person class do?<br/>";
        echo $author::DESCRIPTION;
        ?>
    </div>
    <div id="classes-2" style="margin:20px;padding:20px;border:1px solid black;border-radius:20px">
    <h3 style="margin-top:0px"><u>Classes II: Subclassing, static, private, and protected properties</u></h3>
        <pre>
// Classes II
// private properties can only be accessed inside the specific class that defined it
// protected properties can be accessed by the class and any of its subclasses
// use parent::__construct() to call the parent constructor
// use self::staticPropertyName to access static properties
class Animal
{
    public const KINGDOM_DESCRIPTION = "The Kingdom of Animalia includes all animals.";
    private static $numberOfAnimals = 0;
    private static $numberOfDogs = 0;
    private static $numberOfCats = 0;
    private $name = "Animal";

    function __construct($nameIn = "Animal")
    {
        echo "The Kingdom of Animalia has been instantiated.";
        echo "&lt;br/&gt;";
        $this->name = $nameIn;
    }

    protected static function incrementNumberOfAnimals()
    {
        self::$numberOfAnimals++;
    }

    protected static function incrementNumberOfDogs()
    {
        self::$numberOfDogs++;
    }

    protected static function incrementNumberOfCats()
    {
        self::$numberOfCats++;
    }

    public static function getNumberOfAnimals()
    {
        return self::$numberOfAnimals;
    }

    public static function getNumberOfDogs()
    {
        return self::$numberOfDogs;
    }

    public static function getNumberOfCats()
    {
        return self::$numberOfCats;
    }

    protected function setName($nameIn)
    {
        $this->name=$nameIn;
    }

    public function getName()
    {
        return $this->name;
    }
}

class Dog extends Animal
{
    function __construct($nameIn)
    {
        // To set the name of the animal we could either call:
        // 1) the parent constructor using parent::__construct($nameIn) , or ,
        // 2) the setName($nameIn) function

        // parent::__construct($nameIn);    // 1 (not using this)
        $this->setName($nameIn);            // 2 (using this)
        self::incrementNumberOfAnimals();
        self::incrementNumberOfDogs();
        echo "A DOG has been born into the kingdom of Animalia.";
        echo "&lt;br/&gt;";
    }
}

class Cat extends Animal
{
    function __construct($nameIn)
    {
        // To set the name of the animal we could either call:
        // 1) the parent constructor using parent::__construct($nameIn) , or ,
        // 2) the setName($nameIn) function

        // parent::__construct($nameIn);    // 1 (not using this)
        $this->setName($nameIn);            // 2 (using this)
        self::incrementNumberOfAnimals();
        self::incrementNumberOfCats();
        echo "A CAT has been born into the kingdom of Animalia.";
        echo "&lt;br/&gt;";
    }
}

class DogCat extends Dog
{
    function __construct($nameIn)
    {
        // To set the name of the animal we could either call:
        // 1) the parent constructor using parent::__construct($nameIn) , or ,
        // 2) the setName($nameIn) function

        // parent::__construct($nameIn);    // 1 (not using this)
        $this->setName($nameIn);            // 2 (using this)
        self::incrementNumberOfAnimals();
        self::incrementNumberOfCats();
        self::incrementNumberOfDogs();
        echo "A DOGCAT has been born into the kingdom of Animalia.";
        echo "&lt;br/&gt;";
    }
}

$Animal = new Animal();
$dogs = [];
$cats = [];
$dogcats = [];

echo $Animal::KINGDOM_DESCRIPTION . "&lt;br/&gt;";
echo "Currently " . $Animal::getNumberOfAnimals() . " animals exist.";
echo "&lt;br/&gt;&lt;br/&gt;";

$dog1 = new Dog("Rufus");
$dogs[] = $dog1;
echo "The dog's name is " . $dog1->getName() . ".";
echo "&lt;br/&gt;";
echo "Currently " . $dog1::getNumberOfDogs() . " dogs exist: ";
foreach($dogs as $dog){
    echo " " . $dog->getName() . " , ";
}
echo "&lt;br/&gt;";
echo "Currently " . $Animal::getNumberOfAnimals() . " animals exist.";
echo "&lt;br/&gt;&lt;br/&gt;";

$cat1 = new Cat("Gustav");
$cats[] = $cat1;
echo "The cat's name is " . $cat1->getName() . ".";
echo "&lt;br/&gt;";
echo "Currently " . $cat1::getNumberOfCats() . " cats exist: ";
foreach($cats as $cat){
    echo " " . $cat->getName() . " , ";
}
echo "&lt;br/&gt;";
echo "Currently " . $Animal::getNumberOfAnimals() . " animals exist.";
echo "&lt;br/&gt;&lt;br/&gt;";

$dog2 = new Dog("Rocket");
$dogs[] = $dog2;
echo "The dog's name is " . $dog2->getName() . ".";
echo "&lt;br/&gt;";
echo "Currently " . $dog2::getNumberOfDogs() . " dogs exist: ";
foreach($dogs as $dog){
    echo " " . $dog->getName() . " , ";
}
echo "&lt;br/&gt;";
echo "Currently " . $Animal::getNumberOfAnimals() . " animals exist.";
echo "&lt;br/&gt;&lt;br/&gt;";

$cat2 = new Cat("Achilles");
$cats[] = $cat2;
echo "The cat's name is " . $cat2->getName() . ".";
echo "&lt;br/&gt;";
echo "Currently " . $cat2::getNumberOfCats() . " cats exist: ";
foreach($cats as $cat){
    echo " " . $cat->getName() . " , ";
}
echo "&lt;br/&gt;";
echo "Currently " . $Animal::getNumberOfAnimals() . " animals exist.";
echo "&lt;br/&gt;&lt;br/&gt;";

$dogcat1 = new Dogcat("Crispy");
$dogs[] = $dogcat1;
$cats[] = $dogcat1;
echo "The dogcat's name is " . $dogcat1->getName() . ".";
echo "&lt;br/&gt;";
echo "Currently " . $dogcat1::getNumberOfDogs() . " dogs exist: ";
foreach($dogs as $dog){
    echo " " . $dog->getName() . " , ";
}
echo "&lt;br/&gt;";
echo "Currently " . $dogcat1::getNumberOfCats() . " cats exist: ";
foreach($cats as $cat){
    echo " " . $cat->getName() . " , ";
}
echo "&lt;br/&gt;";
echo "Currently " . $Animal::getNumberOfAnimals() . " animals exist.";
echo "&lt;br/&gt;&lt;br/&gt;";
echo "It doesn't make sense!!";
        </pre>
        <hr style="margin-top:0px">
        RESULT
        <hr style="margin-bottom:0px">
        <br/>
        <?php
        // Classes II
        // private properties can only be accessed inside the specific class that defined it
        // protected properties can be accessed by the class and any of its subclasses
        // use parent::__construct() to call the parent constructor
        // use self::staticPropertyName to access static properties
        class Animal
        {
            public const KINGDOM_DESCRIPTION = "The Kingdom of Animalia includes all animals.";
            private static $numberOfAnimals = 0;
            private static $numberOfDogs = 0;
            private static $numberOfCats = 0;
            private $name = "Animal";
            public $dogs = [];
            public $cats = [];
            public $dogcats = [];


            function __construct($nameIn = "Animal")
            {
                echo "The Kingdom of Animalia has been instantiated.";
                echo "<br/>";
                $this->name = $nameIn;
            }

            protected static function incrementNumberOfAnimals()
            {
                self::$numberOfAnimals++;
            }

            protected static function incrementNumberOfDogs()
            {
                self::$numberOfDogs++;
            }

            protected static function incrementNumberOfCats()
            {
                self::$numberOfCats++;
            }

            public static function getNumberOfAnimals()
            {
                return self::$numberOfAnimals;
            }

            public static function getNumberOfDogs()
            {
                return self::$numberOfDogs;
            }

            public static function getNumberOfCats()
            {
                return self::$numberOfCats;
            }

            protected function setName($nameIn)
            {
                $this->name=$nameIn;
            }

            public function getName()
            {
                return $this->name;
            }
        }

        class Dog extends Animal
        {
            function __construct($nameIn)
            {
                // To set the name of the animal we could either call:
                // 1) the parent constructor using parent::__construct($nameIn) , or ,
                // 2) the setName($nameIn) function

                // parent::__construct($nameIn);    // 1 (not using this)
                $this->setName($nameIn);            // 2 (using this)
                self::incrementNumberOfAnimals();
                self::incrementNumberOfDogs();
                echo "A DOG has been born into the kingdom of Animalia.";
                echo "<br/>";
            }
        }

        class Cat extends Animal
        {
            function __construct($nameIn)
            {
                // To set the name of the animal we could either call:
                // 1) the parent constructor using parent::__construct($nameIn) , or ,
                // 2) the setName($nameIn) function

                // parent::__construct($nameIn);    // 1 (not using this)
                $this->setName($nameIn);            // 2 (using this)
                self::incrementNumberOfAnimals();
                self::incrementNumberOfCats();
                echo "A CAT has been born into the kingdom of Animalia.";
                echo "<br/>";
            }
        }

        class DogCat extends Dog
        {
            function __construct($nameIn)
            {
                // To set the name of the animal we could either call:
                // 1) the parent constructor using parent::__construct($nameIn) , or ,
                // 2) the setName($nameIn) function

                // parent::__construct($nameIn);    // 1 (not using this)
                $this->setName($nameIn);            // 2 (using this)
                self::incrementNumberOfAnimals();
                self::incrementNumberOfCats();
                self::incrementNumberOfDogs();
                echo "A DOGCAT has been born into the kingdom of Animalia.";
                echo "<br/>";
            }
        }

        $Animal = new Animal();
        $dogs = $Animal->dogs;
        $cats = $Animal->cats;
        $dogcats = $Animal->dogcats;

        echo $Animal::KINGDOM_DESCRIPTION . "<br/>";
        echo "Currently " . $Animal::getNumberOfAnimals() . " animals exist.";
        echo "<br/><br/>";

        $dog1 = new Dog("Rufus");
        $dogs[] = $dog1;
        echo "The dog's name is " . $dog1->getName() . ".";
        echo "<br/>";
        echo "Currently " . $dog1::getNumberOfDogs() . " dogs exist:<br/>";
        foreach($dogs as $dog){
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $dog->getName() . "<br/>";
        }
        echo "Currently " . $Animal::getNumberOfAnimals() . " animals exist.";
        echo "<br/><br/>";

        $cat1 = new Cat("Artemis");
        $cats[] = $cat1;
        echo "The cat's name is " . $cat1->getName() . ".";
        echo "<br/>";
        echo "Currently " . $cat1::getNumberOfCats() . " cats exist:<br/>";
        foreach($cats as $cat){
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $cat->getName() . "<br/>";
        }
        echo "Currently " . $Animal::getNumberOfAnimals() . " animals exist.";
        echo "<br/><br/>";

        $dog2 = new Dog("Rocket");
        $dogs[] = $dog2;
        echo "The dog's name is " . $dog2->getName() . ".";
        echo "<br/>";
        echo "Currently " . $dog2::getNumberOfDogs() . " dogs exist:<br/>";
        foreach($dogs as $dog){
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $dog->getName() . "<br/>";
        }
        echo "Currently " . $Animal::getNumberOfAnimals() . " animals exist.";
        echo "<br/><br/>";

        $cat2 = new Cat("Achilles");
        $cats[] = $cat2;
        echo "The cat's name is " . $cat2->getName() . ".";
        echo "<br/>";
        echo "Currently " . $cat2::getNumberOfCats() . " cats exist:<br/>";
        foreach($cats as $cat){
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $cat->getName() . "<br/>";
        }
        echo "Currently " . $Animal::getNumberOfAnimals() . " animals exist.";
        echo "<br/><br/>";

        $dogcat1 = new Dogcat("Crispy");
        $dogs[] = $dogcat1;
        $cats[] = $dogcat1;
        echo "The dogcat's name is " . $dogcat1->getName() . ".";
        echo "<br/>";
        echo "Currently " . $dogcat1::getNumberOfDogs() . " dogs exist:<br/>";
        foreach($dogs as $dog){
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $dog->getName() . "<br/>";
        }
        echo "Currently " . $dogcat1::getNumberOfCats() . " cats exist:<br/>";
        foreach($cats as $cat){
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $cat->getName() . "<br/>";
        }
        echo "Currently " . $Animal::getNumberOfAnimals() . " animals exist.";
        echo "<br/><br/>";
        echo "It doesn't make sense!!";
        ?>
    </div>
</body>
</html>