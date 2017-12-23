<!DOCTYPE HTML>
<html>
    <head>
        <title>PHP Practice</title>
        <link href="style.css" rel="stylesheet"/>
    </head>
    <body>



        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h2><?php echo "Arithmetical operators... " ?></h2>
                    <?php
                        $x = 20;
                        $y = 10;
                        $addition = $x + $y;
                        $subtraction = $x - $y;
                        $multiplication = $x * $y;
                        $division = $x / $y;
                        $modulus = $x % $y;

                        echo "Addition: 20 + 10 = ".$addition ."<br/>";
                        echo "Subtraction: 20 - 10 = ".$subtraction. "<br/>";
                        echo "Multiplication: 20 * 10 = ".$multiplication. "<br/>";
                        echo "Division: 20 / 10 = ".$division ."<br/>";
                        echo "Modulus: 20 % 10 = ".$modulus ;
                    ?>
                </div>
                <div class="col-4">
                    <h2><?php echo "Increment/Decrement operators..." ?></h2>
                    <?php
                        $afterPlus = 10;
                        $beforePlus = 10;
                        $afterSubtraction = 10;
                        $beforeSubtraction = 10;

                        echo "X = 10, X++ Show : ". $afterPlus++ ."<br/>";
                        echo 'X = 10, Only X  : '. $afterPlus ."<br/>";
                        echo "X = 10, ++X Show : ". ++$beforePlus ."<br/>";
                        echo "X = 10, Only X  :". $beforePlus . '<br/>';
                        echo "<hr/>";
                        echo "X = 10, X-- Show : ". $afterSubtraction-- .'<br/>';
                        echo "X = 10, Only X : ". $afterSubtraction. "<br/>";
                        echo "X = 10, --X Show : ".--$beforeSubtraction . '<br/>';
                        echo "X = 10, Only X : ".$beforeSubtraction;
                    ?>
                </div>
                <div class="col-4">
                    <h2><?php echo " Logical operators..." ?></h2>
                    <h4><?php echo "and / &&" ?></h4>
                        <?php
                            $x = 10;
                            $y = 20;
                            if( $x < 20 && $y > 10  ){
                                echo ' x = 10, y = 20, x < 20  &&  y > 10, Condition is true';
                            }
                        ?>
                    <h4><?php echo "or / ||" ?></h4>
                    <?php
                        $x = 10;
                        $y = 20;
                        if( $x > 20 || $y > 10  ){
                            echo ' x = 10, y = 20, x > 20  ||  y > 10 One condition is true then it,s true';
                        }
                    ?>
                    <h4><?php echo "xor / !" ?></h4>
                    <?php
                        $x = 10;
                        $y = 20;
                        if( $x != 20   ){
                            echo 'x = 10, x != 20, Condition is true';
                        }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                        <h2><?php echo " if else statements..."?></h2>
                    <?php

                        $x = 50;
                        $y = 80;

                        if( $x> 40){
                            echo "x = 50 if x > 40 :Then echo X grater then 40"."<br/>";
                        }

                        if( $y > 100 ){
                            echo " y = 80 if y > 100: Then echo Y grater then 100";
                        }else{
                            echo " y = 80 if y > 100: Then echo Y is not grater then 100";
                        }
                    ?>
                </div>
                <div class="col-4">
                    <h2><?php echo "Switch Statements"?></h2>
                     <?php
                        $marks = 80;
                        switch ($marks){
                            case 60:
                                echo 'Your result is A-';
                                break;

                            case 70:
                                echo "Your result is A";
                                break;

                            case 80:
                                echo "Your result is A+";
                        }
                     ?>
                </div>
                <div class="col-4">
                    <h2><?php echo "For Loop "?></h2>
                    <?php
                        echo "Print 0 to 10 with for loop "."<br/>";
//
                        for($forLoop = 0; $forLoop <= 10; $forLoop ++){
                            echo $forLoop ."<br/>";
                        }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <h2><?php echo "While Loop"?></h2>
                    <?php
                        echo "Print 0 - 10 with while loop"."<br/>";
                    $whileLoop = 0;
                    while($whileLoop <= 10){
                        echo $whileLoop."<br/>";
                        $whileLoop ++;
                    }
                    ?>
                </div>
                <div class="col-4">
                    <h2><?php  echo "Do While Loop"?></h2>
                    <?php
                        echo "Print 0 - 10 with do while loop"."<br/>";
                        $doWhile = 0;
                        do{
                            echo $doWhile++ ."<br/>";
                        }
                        while($doWhile <=10)
                    ?>
                </div>
            </div>
        </div>













    </body>
</html>