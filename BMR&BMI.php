
<html>
    <head>
            <style>
                .rr{
                    background-color:#fcf5b0;
                    font-family:Algerian;
                }
            </style>
        
    </head>
        <body>
             <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <center>
        <div class="rr">
<?php

    if(isset($_GET['bmr'])){
        
         $gender=$_GET['gender'];
         
            if($gender=="1st"){
        
        $height=$_GET['height'];
        $weight=$_GET['weight'];
        $age=$_GET['age'];
        
        $bmr=66+(13.7*$weight)+(5*$height*2.54)-(6.8*$age);
        
        echo "Thank you Sir  (._.)<br><br><br>";
        echo "Your BMR is = ".$bmr." cal<br> <br><br>";
        
        $bmi=$weight/(($height*0.0253)*($height*0.0253));
        
        echo "Your BMI is = ".$bmi." kg/m2<br><br><br>";      

            }
       else if($gender=="2nd"){
           
        $height=$_GET['height'];
        $weight=$_GET['weight'];
        $age=$_GET['age'];
       
       //echo "H= ".$height."<br>";
      // echo "W= ".$weight."<br>";
      // echo "A= ".$age."<br>";

    
        $bmr=655+(9.6*$weight)+(1.8*$height*2.54)-(4.7*$age);
        
        echo "Thank you Ma"."'"."am  (-_-)<br><br><br>";
        echo "Your BMR is = ".$bmr." cal<br><br><br>";
        
        $bmi=$weight/(($height*0.0253)*($height*0.0253));
        
        
        echo "Your BMI is = ".$bmi." kg/m2<br><br><br>";
            }
       
       else echo "Amar kono dosh nai";
    }
      
?>

            </body>
        </div>
    </center>
</html>

