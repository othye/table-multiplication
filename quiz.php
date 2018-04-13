<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Quiz</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />

         <link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">  
         <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
         <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet"> 
        
    </head>
    <body>
        
        <section class="container text-center">

            <header class="text-center">
                <ul id="navigation">
                    <li> <a  href="index.php">Accueil</a></li>
                    <li><a  disabled="disabled">Quiz</a><li>
                </ul>

                <h3>Quiz tables de multiplication</h3>

            </header>
            

            <div class=" text-center">

                <div id='myQuiz' class="col-12 ">
                    <form method="post">
                        <?php
                            echo "<span>Veuillez choisir votre tables de multiplication: </span>
                                  <SELECT id='selectQuiz' name='select' value='.$i.'>";
                                  
                            // for($i=1; $i<=10; $i++){    
                            //     echo "<OPTION>$i</OPTION>";
                            // }
                            
                            for ($i=1; $i <= 10; $i++) { 
                                if ($i == $_POST['select']) {
                                    echo '<option value="'.$i.'" selected >Table de '.$i.'</option>';
                                } else {
                                    echo '<option value="'.$i.'" >Table de '.$i.'</option>';
                                }
                            }echo "</SELECT>";            
                        ?>
                        
                        <input type ="submit" name="valid" value="Valider">
                    </form>
                </div>


                <div id="question"  >
                
                    <form   method="post">

                        <?php
                            
                            if(isset($_POST['valid'])){  
                                $nbrRand = 5;

                                
                                for($valuRandom=1; $valuRandom<= $nbrRand; $valuRandom++){
                                    $random = rand(1,10);
                                    echo '<lu>

                                        <li><span class="col-6">'.$random.' x '.$_POST['select']. '</span> </li>
                                        <li> <input class="col-6" type="text" name="result[]"></li>
                                        <li><input type="hidden" name="randomHide[]" value="'.$random.'"></li>
                                    </lu>';
                                    
                                } 
                        
                            }

                        ?>
     
                        <input type="hidden" name="valueHide" value="<?php echo $_POST['select']; ?>">
                        <input type ="submit" name="validResult" value="Resultat">
                    </form>
                </div>
                <?php
                    if(isset($_POST['validResult'])){

                        
                        
                        $randomHide = $_POST['randomHide'];
                        $valueHide  = $_POST['valueHide'];
                        $results    = $_POST['result'];
                        $score      = 0;

                        for($i=0; $i< 5; $i++){

                            if(($randomHide[$i] * $valueHide) == $results[$i]) {

                                $score++;

                            }


                        }
                        
                        
                        if($score == 5){
                            echo('<h3 id="score" >Bien joué 5 / 5</h3>');
                        }
                        else{
                            echo '<h3  id="score" >Score =  '.$score.' / 5</h5>';
                        }
                        
                    }
                ?> 

            </div>
        
        </section>

        <section>

        <section>
        
    </body>
</html>
