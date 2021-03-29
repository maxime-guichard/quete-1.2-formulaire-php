
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <title>Les formulaires en php</title>
  </head>
  <body>

  <?php var_dump($_POST);
//Validation: empty error

$firstnameError = "";
$lastnameError = "";
$emailError = "";
$telephoneError = "";
$subjectError = "";
$messageError = "";

  if (empty($_POST["firstname"])) {           //checks if firstname is empty
    $firstnameError = "Le prénom est obligatoire!"; 
  } else {                                      //attributes value to variable
    $firstname = $_POST["firstname"];
  }

  if (empty($_POST["lastname"])) {           //checks if lastname is empty
    $lastnameError = "Le nom est obligatoire!";
  } else {
    $lastname = $_POST["lastname"];
  }

  if (empty($_POST["email"])) {                                      //checks if email is empty
      $emailError = "L'email est obligatoire!";
  } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) { //checks email format
      $emailError = "Ceci n'est pas une adresse email valide";
  } else {                                                          // attributes value to variable
      $email = $_POST["email"]; 
  }

  if (empty($_POST["telephone"])) {           //checks if telephone is empty
    $telephoneError = "Le téléphone est obligatoire!";
  } else {                                  //attributes value to variable
    $telephone = $_POST["telephone"];
  }

  if (empty($_POST["subject"])) {           //checks if subject is empty
    $subjectError = "Le sujet est obligatoire!";
  } else {                                  //attributes value to variable
    $subject = $_POST["subject"];
  }

  if (empty($_POST["message"])) {           //checks if message is empty
    $messageError = "Le message est obligatoire!";
  } else {                                  //attributes value to variable
    $message = $_POST["message"];
  }
  
?>

  <section class="errors">

  <p> <?php echo $firstnameError ; ?> </p>
  <p> <?php echo $lastnameError; ?> </p>
  <p> <?php echo $emailError; ?> </p>
  <p> <?php echo $telephoneError; ?> </p>
  <p> <?php echo $subjectError; ?> </p>
  <p> <?php echo $messageError; ?> </p>
  

  </section>

    <p> Merci 
      <?php echo $_POST['firstname'] . " " . $_POST['lastname'] . " de nous avoir contacté à propos de " . $_POST['subject'] . ".";
      ?>
    </br>
    </br>

    <?php echo "Un de nos conseiller vous contactera soit à l’adresse " . $_POST['email'] . " ou par téléphone au " . $_POST['telephone'] . " dans les plus brefs délais pour traiter votre demande : ";
    ?>

    </br>
    </br>

    <em>"<?php echo $_POST['message']; ?>"</em>
    </p>

  </body>
</html>