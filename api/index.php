<?php
$url = "https://hltv-api.vercel.app/api/results.json";
$results = json_decode(file_get_contents($url));
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/index.css">
  <link rel="shortcut icon" href="../images/image.png" type="image/x-icon">
  <title>HLTV | Main Page</title>
</head>

<body>
  <nav class="navbar">
    <ul>
      <li><a href="./index.php">Página principal / Resultados</a></li>
      <li><a href="./teams-ranking.php">Ranking</a></li>
    </ul>
  </nav>

  <h1 class="title">Página principal | Counter-Strike</h1>
  <div class="container">
    <?php foreach ($results as $result): ?>
      <div class="event">
        <img src="<?php echo $result->event->logo ?>" alt="Logo do Evento">
        <h2><?php echo $result->event->name ?></h2>
      </div>
      <div class="match">
        <h2>Resultado da Partida</h2>
        <div class="teams">
          <?php foreach ($result->teams as $team): ?>
            <div class="team">
              <img src="<?php echo $team->logo ?>" alt="Logo do time">
              <p><?php echo $team->name ?></p>
              <p><?php echo $team->result ?></p>
            </div>
          <?php endforeach; ?>
        </div>
        <p class="maps">Formato: <?php echo $result->maps ?></p>
        <!-- <p class="time">Data: <?php echo date("dd/mm/yyyy, H:i \U\T\C", strtotime($result->time)); ?></p> -->
      </div>
    <?php endforeach; ?>
  </div>
</body>

</html>