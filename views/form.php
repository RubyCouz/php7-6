<form class="form" action="index.php" method="POST" name="identity">
  <select class="select" name="gender" ng-model="gender">
    <option>Mr</option>
    <option>Mme</option>
  </select>
  <input type="text" name="lastname" ng-model="lastname" placeholder="Nom" />
  <input type="text" name="firstname" ng-model="firstname" placeholder="Prénom" />
  <input type="submit" name="valider" ng-click="showResult()" value="Valider">
</form>
