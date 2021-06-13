
<?php 
    $users = array(
        array("userId"=>"kawtarff", "password"=>"111", "prenom"=>"kawtar" , "nom"=>"boumaaza"),
        array("userId"=>"mohamedff", "password"=>"111", "prenom"=>"mohamed" , "nom"=>"rabah")
    );
    if ((isset($_POST['userId'])) && (!empty($_POST['password']))){
        $password = $_POST['password'];
        $userId = $_POST['userId'];
        $verified = false;
        foreach($users as $x => $x_value) {
            if($x_value['userId'] === $userId ){
                $verified = ($x_value['password'] === $password);
                break;
            }
        }
        if ($verified){
            $_SESSION['nom'] = $x_value['nom'];
            $_SESSION['prenom'] = $x_value['prenom'];
        }else{
            header('Location: index.php'); 
        }

    }

?>