<?php
    $username=$_POST[username];
    $marks=$_POST["marks"];


    echo"<h2>Student Results:  </h2>";
    echo"Student Name is $username<br>";

        if($results>50){
            echo"Student passed";
        }

        else{
            echo "Student Faild";
        }


    echo "Name is $username\n<br>";
    echo "Marks $marks;
    ?>
