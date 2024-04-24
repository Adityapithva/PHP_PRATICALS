<?php
            $name= $_POST["name"];
            $contact= $_POST["contact"];
            $email= $_POST["email"];
            $bday= $_POST["bday"];
            echo "name : $name"."<br>";
            echo "contect no : $contact"."<br>";
            echo "emil : $email"."<br>";
            echo "birth date : $bday"."<br>";
            foreach ($_POST['check_list'] as $selected)
            {
                echo "languages : $selected"."<br>"; 
            }
            $countries=$_POST['fromcountries'];
            $ccount=count($countries);
            echo("you selected $countries countries : ");  
            for($i=0;$i<$ccount;$i++)
            {
                echo($countries[$i] . "<br> ");
            }
            if(!empty($_POST['blood']))
            {
                echo 'blood group : '.$_POST['blood']."<br> ";    
            }
            else
            {
                echo "please select blood";
            }
            $exp=$_POST['exp'];
            $color=$_POST["color"];
            $resume=$_POST["resume"];
            
            echo "experiance: $exp"."<br>";
            echo "color : $color"."<br>";
            echo "resume : $resume"."<br>";
            if($resume)
            {
                echo "resume uploaded";
            }
            else
            {
                echo "resume not uploaded"."<br>";
            }           
