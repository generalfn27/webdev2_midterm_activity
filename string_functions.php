<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String Functions</title>
    <link rel="stylesheet" href="style_ni_felix.css">
</head>
<body>
    <div class="content">
        <h1> String function Example </h1>
        <?php

        echo "<h2>addcslashes ()<br></h2>";
        $str = "Hello, my name is Kai Jim.";
        echo $str."<br />";
        echo addcslashes($str,'m')."<br />";
        echo addcslashes($str, 'K')."<br />";

        echo "<h2>addslashes ()<br></h2>";
        $str = "Who's is Juan C'ruz.";
        echo addslashes($str). " This is safe is a database query.";

        echo "<h2>bin2hex()<br></h2>";
        $str = "a";
        echo bin2hex($str) . "<br>"; //61
        echo pack("H*", '61'). "<br>";


        echo "<h2>chr()<br></h2>";
        echo chr(52). "<br>";//4
        echo chr(052). "<br>"; //*
        echo chr(0x52). "<br>"; //R

        echo "<h2>chunk_split()<br></h2>";
        $str = "Hello World";
        echo chunk_split($str,2,"-"); //He-11-o -


        echo "<h2>convert_cyr_string() <b>DEPRECATED/REMOVED </b> <br></h2>";

        echo "<h2>convert_uudecode()<br></h2>"; //unit-to-unix
        $str_encoded = convert_uuencode("Hello World"); // Encode "Hello World" first
        echo convert_uudecode($str_encoded) . "<br>";

        echo "<br>";

        echo "<h2>convert_uuencode()<br></h2>"; //unit-to-unix
        $str = "Hello World";
        echo convert_uuencode($str);




        echo "<h2>crc32()<br></h2>"; // cyclic redundancy checksum
        $str = crc32("Hello World!");

        echo "without %u:" . $str . "<br>";
        echo "with %u:";
        printf("%u", $str);

        echo "<h2>echo()<br></h2>";


        echo "<h2>fprintf()<br></h2>";
        $str = "Hello";
        $number = 123;
        $file = fopen("test.txt", "w");
        echo fprintf($file, "%s world. Day number %u", $str, $number);

        echo "<h2>get_html_translation_table() <br></h2>"; print_r(get_html_translation_table()); //readable
        echo "<br>";
        print_r(get_html_translation_table (HTML_ENTITIES));


        echo "<h2>hebrev()<br></h2>";
        echo hebrev("á cùải äuuña ná cùải äuuña");
        echo "<br> á củai\n äúuña";


        echo "<h2>html_entity_decode()<br></h2>";
        $str = "Jane &amp; &#039; Tarzan&#039;"; //&quot; &lt; &gt;
        echo html_entity_decode($str);
        echo "<br>";
        echo html_entity_decode($str, ENT_QUOTES);//Encodes double quote and single
        echo "<br>";
        echo html_entity_decode($str, ENT_NOQUOTES);//does not display quotes

        echo "<h2>htmlentities()<br></h2>";
        $str = "Jane & 'Tarzan'";
        echo htmlentities($str, ENT_COMPAT); echo "<br />";
        echo htmlentities($str, ENT_QUOTES); echo "<br />";
        echo htmlentities($str, ENT_NOQUOTES);

        echo "<h2>htmlspecialcharacs()<br></h2>";
        $str = "Jane & 'Tarzan'";
        echo htmlspecialchars($str, ENT_COMPAT); echo "<br />";
        echo htmlspecialchars($str, ENT_QUOTES); echo "<br />";
        echo htmlspecialchars($str, ENT_NOQUOTES);

        echo "<h2>implode()<br></h2>";
        $arr = array('Hello', 'World!', 'Beautiful', 'Day!');
        echo implode("*", $arr); //Hello*World

        echo "<h2>levenshtein()<br></h2>";
        echo levenshtein("Hello World", "ello Wor") . "<br>";
        echo levenshtein("Hello World", "ello Wox", 10, 20, 30);


        echo "<h2>localeconv()<br></h2>";
        setlocale(LC_ALL, "US");
        $locale_info = localeconv();
        print_r($locale_info);

        echo "<h2>ltrim()<br></h2>";
        $str = "Hello World!";
        echo $str. "<br>";
        echo ltrim("Hello", $str);


        echo "<h2>md5()<br></h2>";
        $str = "Hello";
        echo md5($str); //message digest

        echo "<h2>md5_file()<br></h2>";
        $filename = "test.txt";
        $md5file = md5_file($filename);
        echo $md5file;


        echo "<h2>metaphone ()<br></h2>";
        $str = "Assistance";
        $str2 = "Assistants";

        echo metaphone($str); //ASSTNT
        echo "<br>";
        echo metaphone($str2);


        echo "<h2>money_format() <b>DEPRECATED </b><br></h2>"; $number = 1234.56;
        echo "The price is " . number_format($number, 2,);

        echo "<h2>number_format()<br></h2>";
        echo number_format("1000000")."<br>";
        echo number_format("1000000",2)."<br>";
        echo number_format("1000000",2,);


        echo "<h2>ord()<br></h2>";
        echo ord("h")."<br>";
        echo ord("hello")."<br>";

        echo "<h2>print()<br></h2>";
        print "Hello world!";

        echo "<h2>printf()<br></h2>";
        $number = 9;
        $str = "Beijing";
        printf("There are %u million bicycles in %s.", $number, $str);


        echo "<h2>setlocale()<br></h2>";
        echo setlocale (LC_ALL, "US");
        echo "<br>";
        echo setlocale(LC_ALL, NULL);

        echo "<h2>sha1()<br></h2>";
        $str = "Hello";
        echo sha1($str);

        echo "<h2>sha1_file()<br></h2>";
        $filename = "test.txt";
        $sha1file = sha1_file($filename);
        echo $sha1file;


        echo "<h2>soundex()<br></h2>";
        $str ="Assistance";
        $str2 = "Assistants";
        echo soundex($str);
        echo "<br>";
        echo soundex($str2);



        echo "<h2>sprintf()<br></h2>";
        $number = 9;
        $str ="Beijing";
        $txt = sprintf("There are %u million bicycles in %s.", $number, $str);
        echo $txt;


        echo "<h2>sscanf()<br></h2>";
        $str = "age: 30 weight: 60kg";
        sscanf($str, "age: %d weight: %dkg", $age, $weight); // show types and values
        var_dump($age, $weight);

        echo "<h2>strlen()</h2>";
        $str = "Hello, world!";
        $length = strlen($str);
        echo "The length of the string is: $length";

        echo "<h2>strtoupper()</h2>";
        $str = "hello, world!";
        $uppercase_str = strtoupper($str);
        echo "Uppercase string: $uppercase_str";


        echo "<h2>strtolower()</h2>";
        $str = "Hello, World!";
        $lowercase_str = strtolower($str);
        echo "Lowercase string: $lowercase_str";

        echo "<h2>strrev()</h2>";
        $str = "hello";
        $reversed_str = strrev($str);
        echo "Reversed string: $reversed_str";

        echo "<h2>str_word_count()</h2>";
        $text = "This is a simple example.";
        $wordCount = str_word_count($text);
        echo "Number of words: $wordCount";

        echo "<h2>substr()</h2>";
        $str = "Hello, world!";
        $extracted_str = substr($str, 0, 5);
        echo "Extracted string: $extracted_str";


        ?>

        <br>
        <br>
        <br>
            <a href="index.php">Back to Main Page</a>
    </div>
    <footer>
        <p>&copy;  Midterm Lessons and Activities. Nario, Felix II F. / BSIT 2-Y1-5. </a></p>
    </footer>
</body>
</html>