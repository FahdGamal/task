<?php 

         // Assignment 1 : 

     $num1 = 2 ;
     $num2 = 4 ;
     $num3 = 5 ;
     $sum = $num1 + $num2 ;
     $total = $sum* $num3;
    echo  "The Total is = " . $total ;
    echo "<br>";


            function hamade1 ($num1 , $num2 , $num3){
            $sum = $num1 + $num2 ;
            return $total = $sum * $num3 ;
            }
            echo " The Total is = ".hamade1(2,4,5);
            echo "<br>";

//==========================================================

            //  Assignment 2 :

    $length = 5 ;
    $width = 10 ;
    $height = 2 ;
    $siz = $length * $width * $height ;
    echo "The Siz is = $siz " ;
    echo "<br>";


            function hamade2 ($length , $width , $height){
                $siz = $length * $width * $height;
                return $siz;
            }
            echo "The Siz is =".hamade2(5,10,2);
            echo "<br>";
            
//===================================================================

         //   Assignment 3 

    $hous = 5 ;
    $scends = $hous * 3600 ;
    echo "The Total Hous is  = $scends";
    echo "<br>";


            function hamade3 ($hous){
                $mentus = 60 ;
                $scends = 60 ;
                return $converts =$hous * $mentus * $scends ;
                    }
                echo "The Total Hous is".hamade3(2);
                echo "<br>";


//=================================================================
                    
            //    Assignment 4 

    $base = 5;
    $height = 5;
    $area = 0.5 * $base * $height ;
    echo $area ;
    echo "<br>";
            
            
            function hamade4 ($base , $height){
                $area = 0.5 * $base * $height ;
                return $area ;
            }
            echo hamade4(5 , 5);
            echo "<br>";

//====================================================    

            //   Assignment 5

    $age = 10 ;
    $day = $age * 365 ;
    echo $day ;
    echo "<br>";
            
            
            function hamade5 ($age){
                $day = $age * 365 ;
                return $day ;
            }
            echo hamade5(10);
            echo "<br>";


//====================================================    

            //   Assignment 6

$text = "EraaSoft Learn by practice";

// Get the length of the sentence
$lengthWithSpaces = strlen($text);

// Get the length of the sentence without spaces
$lengthWithoutSpaces = strlen(str_replace(' ', '', $text));

// Split the sentence into words
$words = explode(' ', $text);

// Check if the word 'by' exists in the string
$wordExists = in_array('by', $words);

// Get the word 'EraaSoft' from the string
$eraaSoft = $words[0];

// Remove the word 'by' from the string
$newText = str_replace('by', '', $text);

// Print the results
echo "Length with spaces: $lengthWithSpaces <br>";
echo "Length of the sentence without spaces: $lengthWithoutSpaces <br>";
echo "Word 'by' exists in the string: $wordExists<br>";
echo "Word 'EraaSoft': $eraaSoft <br>";
echo "Sentence without 'by': $newText <br>";
echo "Original string: $text <br>";


//====================================================    

            //   Assignment 7



            // 1. Make a new variable called (Full_string) that concatenate string_one and string_two
            $string_one = "Eraa";
            $string_two = "Soft";
            $full_string = $string_one . $string_two;
            
            // 2. Compare the full_string and this string (EraaSoft)
            if ($full_string === "EraaSoft") {
                echo "The full string is equal to the string \"EraaSoft\"<br>";
            } else {
                echo "The full string is not equal to the string \"EraaSoft\"<br>";
            }
            
            // 3. Write a PHP script to split the following string.
            // Sample string: 'ErraSoft'
            //          Expected Output: Er/ra/So/ft
            $sample_string = "ErraSoft";
            $split_string = "/";
            $array = str_split($sample_string);
            $new_string = "";
            
            foreach ($array as $key => $value) {
                if ($key < count($array) - 1) {
                    $new_string .= $value . $split_string;
                } else {
                    $new_string .= $value;
                }
            }
            
            echo "Split string: " . $new_string . "<br>";
            
            // 4. Write a PHP script that stores the number as a variable and checks if it is odd or even.
            $number = 10;
            
            if ($number % 2 == 0) {
                echo "The number " . $number . " is even<br>";
            } else {
                echo "The number " . $number . " is odd<br>";
            }
            
            // 5. Write a PHP script that stores the string as a variable and checks if the length is odd or even.
            $string = "EraaSoft";
            $length = strlen($string);
            
            if ($length % 2 == 0) {
                echo "The length of the string '" . $string . "' is even<br>";
            } else {
                echo "The length of the string '" . $string . "' is odd <br>";
            }
            
            
    //====================================================    

            //   Assignment 8


            // Check if the string contains "gain" or "peen"
            $description = "no pain , no gain ";
            
            if (strpos($description, "gain") !== false || strpos($description, "peen") !== false) {
                echo "success word<br>";
            } else {
                echo "wrong word<br>";
            }
            
            // Convert an int Boolean to its opposite
            $intBoolean = 1;
            $oppositeBoolean = $intBoolean == 1 ? 0 : 1;
            echo "Opposite of int Boolean: " . $oppositeBoolean . "<br>";
            
            // Determine if a word is singular or plural
            $word = "cats";
            
            if ($word[strlen($word) - 1] == "s") {
                echo "The word '" . $word . "' is plural.<br>";
            } else {
                echo "The word '" . $word . "' is singular.<br>";
            }
            
            // Create a calculator with various operations
            $operation = "+";
            $num1 = 10;
            $num2 = 5;
            
            switch ($operation) {
                case "+":
                    echo "Addition: " . $num1 + $num2 . "<br>";
                    break;
                case "-":
                    echo "Subtraction: " . $num1 - $num2 . "<br>";
                    break;
                case "*":
                    echo "Multiplication: " . $num1 * $num2 . "<br>";
                    break;
                case "/":
                    echo "Division: " . $num1 / $num2 . "<br>";
                    break;
                case "^":
                    echo "Power: " . $num1 ** $num2 . "<br>";
                    break;
                case "%":
                    echo "Modulus: " . $num1 % $num2 . "<br>";
                    break;
                default:
                    echo "Invalid operation <br>";
            }
            
            ?>