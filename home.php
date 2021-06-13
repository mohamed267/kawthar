
<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
    		<meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>ShopMeex Online Store</title>
            <link rel="stylesheet" href="home.css">
			
		</head>
		
		<body>
			
			
		
            <div>
                <h1>
                    <?php
                        include 'login.php';
                        include 'vérifier_login.php';
                        echo 'Bon jour '.$_SESSION['nom'].' '.$_SESSION['prenom'];
                        exit();
                        
                        
                    ?>

                </h1>

            <div>
		
	</body>

</html>
