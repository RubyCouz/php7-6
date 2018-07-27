<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6</title>
  </head>
  <body>
    <?php
    if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['gender']))
    {
      echo 'Bonjour ' . $_POST['gender'] . ' ' . $_POST['lastname'] . ' ' . $_POST['firstname'];
    } else {
      ?>
      <form class="form" action="index.php" method="POST">
      <select class="select" name="gender">
      <option value="Monsieur">Mr</option>
      <option value="Madame">Mme</option>
      </select>
      <input type="text" name="lastname" placeholder="Nom" />
      <input type="text" name="firstname" placeholder="Prénom" />
      <input type="submit" name="valider" value="Valider">
      </form>
      <?php
    }

    ?>
  </body>
</html>
