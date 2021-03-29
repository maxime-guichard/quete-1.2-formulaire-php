<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <title>Les formulaires en php</title>
  </head>
  <body>
    <p>Veuillez remplir ce formulaire</p>
  
    <form action="thanks.php" method="post"> <!---->
    <div>
        <label for="firstname">Prénom :</label>
        <input type="text" id="firstname" name="firstname">
    </div>
    <div>
        <label for="lastname">Nom de famille :</label>
        <input type="text" id="lastname" name="lastname">
    </div>
    <div>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" value="">
    </div>
    <div>
        <label for="telephone">Téléphone :</label>
        <input type="tel" id="telephone" name="telephone" value="">
    </div>
    <div>
        <label for="select-subject">Sujet de votre message:</label>
        <select name="subject" id="select_subject">
          <option value="votre dos">votre dos</option>
          <option value="votre tête">votre tête</option>
          <option value="vos jambes">vos jambes</option>
          <option value="vos bras">vos bras</option>
        </select>
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="message"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer</button>
    </div>
</form>
  </body>
</html>