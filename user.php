<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User page</title>
  </head>
  <body>
    <p>
    <?php
    if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['gender']))
    {
      echo 'Bonjour ' . $_POST['gender'] . ' ' . $_POST['lastname'] . ' ' . $_POST['firstname'];
    } else {
      echo 'Veuillez renseigner votre identité svp!';
    }

    ?>
  </p>
  </body>
</html>
