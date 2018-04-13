<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Table de multiplication</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />

         <link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">  
         <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
         <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet"> 

    </head>
    <body class="container-fluid">
        
        <section class="container text-center">

            <header class="text-center">
                <ul id="navigation">
                    <li><a disabled="disabled">Accueil</a></li>
                    <li><a  href="quiz.php">Quiz</a><li>
                </ul>
                <h3>Apprendre les tables de multiplication</h3>

            </header>
            

            <div class=" text-center">
                <!-- menu deroulante   -->
                <form action="index.php" method="post">
                    
                    <?php
                        echo "<SELECT name='valu' value='.$i.'>";
                        
                        for($i=1; $i<11; $i++){   
                            echo "<OPTION>$i<br></OPTION>"; 
        
                        }
                        echo "</SELECT>";  
                                  
                    ?>
                    
                    <input type="submit" value="Affichez" />

                </form><br>
                <?php
                    // menu deroulante    
                    if (isset($_POST["valu"])) {
                        $a=$_POST["valu"];
                    }else {
                        $a=3;
                    } 

                        echo "<h4>Table de multiplication de ".$a." <h4>";
                        echo "<table>";

                        for($i=1;$i<=10;$i++) {
                            $r=$a*$i;
                            echo "<tr><td> ".$i." </td><td> x </td><td> ".$a." </td><td> = </td><td>" .$r." </td></tr>";
                    } echo "</table>";
                ?>
            



                <!-- checkbox -->
                <form method="post">
                    <h3>Revision</h3>
                    <?php
                        for ($i=1;$i<=10;$i++){
                            
                            echo("<INPUT TYPE='checkbox' NAME='num[]' VALUE='$i'/>");
                            echo(" <label class='checkmark' for='$i'>$i</label> ");
                        }
                    ?>
                    <input type="submit" value="Affichez" />

                </form>
                
                <?php

                    if (isset($_POST["num"])) {
                        $a=$_POST["num"];
                        // var_dump($a);
                        $length = count($a);
                        
                        for($i=0; $i<$length; $i++){
                            // afficher chaque table 

                            echo "<h4>Table de multiplication de ".$a[$i]." <h4>";
                            echo "<table>";

                            for($j=1;$j<=10;$j++) {
                                $r=$a[$i]*$j;
                                echo "<tr><td> ".$j." </td><td> x </td><td> ".$a[$i]." </td><td> = </td><td>" .$r. "</td></tr>";
                            }echo "</table>";    

                        } 
                        
                    } 
                    
                ?>
            </div>

            <footer>
                
                <ul id="navigation">
                    <li> <a href="#"> Top-page </a></li>
                    <li><a  href="quiz.php">Quiz</a><li>
                </ul>
            <footer>
        
        </section>
    </body>
</html>