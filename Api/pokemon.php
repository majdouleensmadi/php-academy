<?php
if (isset($_POST['search'])) {
  $searchTerm = $_POST['search'];
  $apiUrl = "https://pokeapi.co/api/v2/pokemon/$searchTerm";
  $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
  $pokemon = json_decode($response);

  if ($pokemon) {
    $pokemonName = ucfirst($pokemon->name);
    $pokemonImage = $pokemon->sprites->front_default;
    $pokemonType = ucfirst($pokemon->types[0]->type->name);
    $pokemonHeight = $pokemon->height;
    $pokemonWeight = $pokemon->weight;
  } else {
    $errorMsg = "Sorry, could not find the Pokemon you are looking for.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Pokemon Search</title>
  <style>
    form {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 50px;
    }
    input[type="text"] {
      width: 300px;
      height: 30px;
      margin-bottom: 20px;
      font-size: 20px;
    }
    button[type="submit"] {
      width: 100px;
      height: 30px;
      font-size: 16px;
    }
    .card {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 50px;
      border: 1px solid black;
      padding: 10px;
      width: 300px;
    }
    img {
      width: 200px;
      height: 200px;
    }
    .error-msg {
      color: red;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <form method="post">
    <label for="search">Search for a Pokemon:</label>
    <input type="text" id="search" name="search">
    <button type="submit">Search</button>
  </form>
  <?php if (isset($pokemon)): ?>
    <div class="card">
      <h2><?= $pokemonName ?></h2>
      <img src="<?= $pokemonImage ?>" alt="<?= $pokemonName ?>">
      <p>Type: <?= $pokemonType ?></p>
      <p>Height: <?= $pokemonHeight ?></p>
      <p>Weight: <?= $pokemonWeight ?></p>
    </div>
  <?php endif; ?>
  <?php if (isset($errorMsg)): ?>
    <div class="error-msg"><?= $errorMsg ?></div>
  <?php endif; ?>
</body>
</html>