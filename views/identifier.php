<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
  </head>
  <body>
    <form class="" action="authent.php?page=identifier" method="post">

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
        </fieldset>
        <div>
          <div stlye="">
            <div>
              <input type="submit" name="valide" value="Connect">
              <input type="reset"  name="annuler" value="annuler">
              <input type="submit" name="inscription" value="inscription">
            </div>
          </div>
        </div>
      </div>

    </form>
  </body>
</html>
