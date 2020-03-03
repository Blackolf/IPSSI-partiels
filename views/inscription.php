<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inscription</title>
  </head>
  <body>
    <form id="formulaire" method="post">

      <fieldset>
        Login<br>
        <input type="text" placeholder="Choisissez un login" name="login" value=""><br>
        Votre mot de passe <br>
        <input type="text" placeholder=" 5 caractères minimun" name="mdp" value=""><br>
        Confirmer votre mot de passe <br>
        <input type="text" placeholder="resaisir votre mot de passe" name="cmdp" value=""><br>
        <!-- Votre email <br>
        <input type="text" name="email" value=""> <br>
        Confirmer votre email <br>
        <input type="text" name="cemail" value=""><br> -->
        <br>
        <input type="submit" name="valide" onclick="submitForm('valide')" value="Connect">

        <input type="submit" name="Retourn" onclick="submitForm('inscription')" value="inscription">

      </fieldset>
    </form>

    <script type="text/javascript">
      function submitForm(action) {
        var form = document.getElementById('formulaire');
        form.action = "authent.php?page=identifier&btn=" + action;
        form.submit();
      }
    </script>
  </body>
</html>
