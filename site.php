<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
<!--General description of the page. This is a playground to test the basics of the php languaje
I can change this later to make it look better.-->
        <?php
            echo "<h1>Cool Site</h1>";
            echo "<hr>";
            echo "<p>Site for testing basic php stuff</p>";
            echo "<hr>";
            echo "<h2>Variables</h2>";
        ?>
<!--Variables: In php we can declare variables we can use later in the document.-->
            <form action="site.php" method="get">
                Name: <input type="text" name="nom">
                Age: <input type="number" name="age">
                <input type="submit">
            </form>
        <?php
            $charName = $_GET["nom"] ?? null;
            $charAge = $_GET["age"] ?? null;
            echo "I'd like my name to be: $charName.<br> I like the name $charName and I'm $charAge years old.<br> I don't know if
            I want to be $charAge years old<br>";
            echo "<hr>";
        ?>
<!--The different functions we can apply to String variables-->
        <?php
            echo "<h2>Data Types</h2>";
            echo "<h3>Strings</h3>";
        ?>
            <form action="site.php" method="get">
                String: <input type="text" name="frase">
                <input type="submit">
            </form>
        <?php
            $fraseJa = $_GET["frase"] ?? null;
            echo "String example: ";
            echo $_GET["frase"];
            echo "<br>A string has been declared, here are some examples of functions that can be used. <br>";
            echo "<br>String to lowercase: ";
            echo strtolower($fraseJa);
            echo "<br>String to uppercase: ";
            echo strtoupper($fraseJa);
            echo "<br>String length: ";
            echo strlen($fraseJa);
        ?>
            <form action="site.php" method="get">
                Position of character: <input type="number" name="charPos">
                <input type="submit"> 
            </form>
        <?php
            $phrChar = $_GET["charPos"] ?? null;
            echo "<br>Specific Character from a position: $fraseJa[$phrChar]";
            echo "<br>Replace a string of characters: ";
            echo str_replace("a frase", " potacsio", $fraseJa);
        ?>

        <?php
            echo "<h3>Numbers</h3>";
            echo "We can play with numbers just like any other programming languaje, we can do basic operations and apply different functions, for example:<br>";
            echo "Absolute Value of 100 [abs()]: ";
            echo abs(-100);
            echo "<br>Square Root of 144 [sqrt()]: ";
            echo sqrt(144);
            echo "<br>Obtain the highest number of two [max(2, 4)]: ";
            echo max(2, 4);
            echo "<br>Obtain the lowest number of two [min(2, 4)]: ";
            echo min(2, 4);
            echo "<br>Rounds a number [round(3.2)] This rounds depending on the decimal: ";
            echo round(3.2);
            echo "<br>Rounds a number, always rounds to the next number [ceil(3.2)]: ";
            echo ceil(3.2);
            echo "<br>Rounds a number, always rounds to the bottom number [floor(3.9)]: ";
            echo floor(3.9);
        ?>

    </body>
</html>