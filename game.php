<!DOCTYPE html>

	<? 
            session_start();
                        
            include("controls/notSetUser.php");     //se non sei loggato non puoi accedere

        ?>

<html>

	<head>
		
		<meta http-equip="Content-Type" content="text/html; charset=utf-8">
		
		<!-- selezione degli stili css-->
		<link rel="stylesheet" type="text/css"	href="css/style.css" media="screen">	
                
                <script src="libs/jquery-2.1.4.js"></script> <!-- inserimento jquery -->

		<title>UniCAsin&ograve; </title>  
		
	</head>

	<body>
            
            <script src="controls/javascript/startGame.js"></script>
	
            <div class='homepage'>
			
                    <img id="banner" src="images/unicacasino700.png" alt="UniCAsino banner">
                    
                    </br>
                    
                    <script>
                        
                        totalCoins = <?php echo $_SESSION["monete"] ; ?>; 
                        
                    /*questa riga non è bellissima da vedere, 
                     * ma è l'implementazione quick&dirt perfetta per ricavare il numero di monete a dispozione
                     * Per la mia gioia è persino una implementazione non sicura 
                     * 
                        */
                    </script>

                    <p id="score" >Coins: <?= $_SESSION["monete"] ?></p>

                    <? include("views/caselle.php"); ?>     <!--visualizza le caselle della slot machine-->
                    
                    <? include("views/colonna.php"); ?>     <!-- visualizza la fessura e la manopola -->

		</div>	<!--chiusura class homepage-->
		
		<!-- visualizzazione del footer -->
            <? include("views/footer.php");?>

	</body> 
	 
 </html>
