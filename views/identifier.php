<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <form id="formulaire" action="authent.php?page=identifier" method="post">

      <div>
        <fieldset >
          <legend>identifiez vous</legend>
          <br>
          <div>Login</div>
          <div >
            <input type="text" name="loign">
          </div>
          <div>votre mot de passe</div>
          <div>
            <input type="text" name="mdp">
          </div>
          <br>

          <input type="submit" name="valide" onclick="submitForm('valide')" value="Connect">
          <input type="submit" name="inscription" onclick="submitForm('inscription')" value="inscription">

        </fieldset>

        <?php

        if(isset($MessageError)){
          ?>
          <div>
            <?= $MessageError ?>
          </div>
          <?php
        } ?>
      </div>

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
