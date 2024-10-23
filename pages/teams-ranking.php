<?php
$url = "https://hltv-api.vercel.app/api/player.json";
$ranking = json_decode(file_get_contents($url));
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/teams-ranking.css">
  <link rel="shortcut icon" href="../images/image.png" type="image/x-icon">
  <title>HLTV | Ranking</title>
</head>

<body>
  <nav class="navbar">
    <ul>
      <li><a href="../index.php">Página principal / Resultados</a></li>
      <li><a href="./teams-ranking.php">Ranking</a></li>
    </ul>
  </nav>

  <h1>Ranking Mundial | Counter-Strike</h1>
  <div class="team-container">
    <?php foreach ($ranking as $team): ?>
      <div class="team">
        <h2>#<?php echo $team->ranking; ?></h2>
        <img src="<?php echo $team->logo; ?>" alt="Logo do time" class="team-logo" width="100px">
        <h2><?php echo $team->name; ?></h2>

        <div class="players-container">
          <?php foreach ($team->players as $player): ?>
            <div class="player">
              <div class="player-info">
                <img src="<?php echo $player->image; ?>" alt="<?php echo $player->fullname; ?>" class="player-image">
                <h3><?php echo $player->nickname; ?></h3>
                <p><?php echo $player->fullname; ?></p>
                <img src="<?php echo $player->country->flag; ?>" alt="<?php echo $player->country->name; ?> Flag" class="country-flag">
              </div>
            </div>
          <?php endforeach; ?>
        </div>

      </div>
    <?php endforeach; ?>
  </div>


</body>

</html>