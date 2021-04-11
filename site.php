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
        <?php
            $charName = "John Salchichón";
            $charAge = 42;
            echo "I'd like my name to be: $charName.<br> I like the name $charName and I'm $charAge years old.<br> I don't know if
            I want to be $charAge years old<br>";
            echo "<hr>";
        ?>
<!--The different functions we can apply to String variables-->
        <?php
            $phrase = "Ejemplo de una frase";
            echo "<h2>Data Types</h2>";
            echo "<h3>Strings</h3>";
            echo "String example: ";
            echo "$phrase<br>"; 
            echo "A string has been declared, here are some examples of functions that can be used. <br>";
            echo "<br>String to lowercase: ";
            echo strtolower($phrase);
            echo "<br>String to uppercase: ";
            echo strtoupper($phrase);
            echo "<br>String length: ";
            echo strlen($phrase);
            echo "<br>Specific Character from a position: $phrase[0] or $phrase[8]";
            echo "<br>Replace a string of characters: ";
            echo str_replace("a frase", " potacsio", $phrase);
        ?>

    </body>
</html>