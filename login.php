<?php
    include 'includes/session.php';
?>

<?php
      if ((isset($_SESSION['login'])) && (!empty($_SESSION['login'])))
      {
        header('Location: home.php'); 
        exit();
      }  else {
        if ((isset($_POST['userId'])) && (!empty($_POST['password']))){
          $_SESSION['userId'] = $_POST['userId'];
          $_SESSION['password'] = $_POST['password'];
        }else {
          header('Location: index.php'); 
          exit();
        }
      }
    
?>

