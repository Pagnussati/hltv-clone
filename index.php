<?php
$url = "https://hltv-api.vercel.app/api/player.json";
$players = json_decode(file_get_contents($url));
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/index.css">
  <title>HLTV | Clone</title>
</head>

<body>
  <h1>Jogadores</h1>
  <div class="team-container">
    <?php foreach ($players as $team): ?>
      <div class="team">
        <h2><?php echo $team->name; ?></h2>
        <img src="<?php echo $team->logo; ?>" alt="Logo do time" class="team-logo">
        <div class="player-container">
          <?php foreach ($team->players as $player): ?>
            <div class="player">
              <img src="<?php echo $player->image; ?>" alt="<?php echo $player->fullname; ?>" class="player-image">
              <h3><?php echo $player->nickname; ?></h3>
              <p><?php echo $player->fullname; ?></p>
              <img src="<?php echo $player->country->flag; ?>" alt="<?php echo $player->country->name; ?> Flag" class="country-flag">
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>

</html>