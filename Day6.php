<!DOCTYPE html>
<html lang="eng" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
            <?php

                $newborn = 9;               

                $lanternfish_part1 = array(1,1,1,2,1,5,1,1,2,1,4,1,4,1,1,1,1,1,1,4,1,1,1,1,4,1,1,5,1,3,1,2,1,
                 1,1,2,1,1,1,4,1,1,3,1,5,1,1,1,1,3,5,5,2,1,1,1,2,1,1,1,1,1,1,1,1,5,4,1,1,1,1,1,3,1,1,2,4,4,1,
                 1,1,1,1,1,3,1,1,1,1,5,1,3,1,5,1,2,1,1,5,1,1,1,5,3,3,1,4,1,3,1,3,1,1,1,1,3,1,4,1,1,1,1,1,2,1,
                 1,1,4,2,1,1,5,1,1,1,2,1,1,1,1,1,1,1,1,2,1,1,1,1,1,5,1,1,1,1,3,1,1,1,1,1,3,4,1,2,1,3,2,1,1,2,
                 1,1,1,1,4,1,1,1,1,4,1,1,1,1,1,2,1,1,4,1,1,1,5,3,2,2,1,1,3,1,5,1,5,1,1,1,1,1,5,1,4,1,2,1,1,1,
                 1,2,1,3,1,1,1,1,1,1,2,1,1,1,3,1,4,3,1,4,1,3,2,1,1,1,1,1,3,1,1,1,1,1,1,1,1,1,1,2,1,5,1,1,1,1,
                 2,1,1,1,3,5,1,1,1,1,5,1,1,2,1,2,4,2,2,1,1,1,5,2,1,1,5,1,1,1,1,5,1,1,1,2,1);                  
            ?>
            
            <p>Solution for Part 1</p>

            <?php
                for($i = 0; $i < 80; $i++){
                    foreach ($lanternfish_part1 as &$number_test){  
    
                        if($number_test != 0){
                            $number_test = $number_test - 1;               
                        }

                        else if($number_test == 0){
                            array_push($lanternfish_part1, $newborn);
                            $number_test = $number_test + 6;   
                        }
                    }
                }

                echo count($lanternfish_part1);    
            ?>

            <p>Solution for Part 2</p>

            <?php 

            for($i = 0; $i < 0; $i++){
                foreach ($lanternfish_part1 as &$number_test){  

                    if($number_test != 0){
                        $number_test = $number_test - 1;           
                    }
                    
                    else if($number_test == 0){
                        array_push($lanternfish_part1, $newborn);
                        $number_test = $number_test + 6;   
                    }                  
                }
            }        
            
                echo "Incorrect for now";    
            ?>
    </body>
</html>

