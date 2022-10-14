<?php
    if(!isset($_SESSION['token'])){
      header('Location: /?page=register');
    }
?>

?>
<style>
  body{
    background-color: gray;
  }
  #info{
     z-index: 1;
     border: 1px solid black;
     width: 1500px;
     height: 100px;
     position: fixed;
     left: calc((100% - 1500px) / 2);
     top: 55px;
     background-color: white;
  }
  #screen-left{
    position: absolute;
    top: 100px;
    left: calc((100% - 1900px) / 2);
    position: fixed;
    background: linear-gradient(purple,blue);
    border-radius: 1rem;
    border: 10px solid blue;
    width: 200px;
    height: 800px;
  }
  #screen{
    position: absolute;
    top: 165px;
    left: calc((100% - 1500px) / 2);
    background-color: white;
    border: 5px solid black;
    width: 1500px;
    height: 1500px;
  }
  #screen-right{
    position: absolute;
    top: 165px;
    right: calc((100% - 1900px) / 2);
    position: fixed;
    background-color: white;
    border: 5px solid green;
    width: 200px;
    height: 500px;
  }
  .player_dot{
    position: absolute;
    border-radius: 1px;
    box-shadow:
      0px 0px 10px black,
      0px 0px 10px black,
      0px 0px 10px black,
      0px 0px 10px black,
      0px 0px 10px black
    ;
    width: 3px;
    height: 3px;
  }
</style>
<div id="info">
</div>
<script>
  var infodiv = document.getElementById("info");
  function setInfo(name, x, y)
  {
    infodiv.innerHTML = name + "<br />X: " + x + "<br />Y: " + y;
  }
</script>
<div id="screen-left" class="container">
  <div class="col">
    <div class="row">
      <button class="bg-danger">
        <u><b>Industrie</b></u><br>
        possédé:
        <?php
          $req = $bdd->prepare('SELECT crea_indu FROM players,players_stats WHERE players.id=players_stats.player_id');
          $req->execute(array($_SESSION['id'])); 
          $test = $req->fetch();?>
          <p>
            <?php 
              echo($test["crea_indu"]);
            ?>
          </p>
        Coût:<br>
        - 200 d'industrie<br>
        - 10 d'énergie
      </button>
    </div>
    <div class="row">
      <button class="bg-info"  method="post">
        <u><b>Centrale</b></u><br>
        possédé:
        <?php
          $req = $bdd->prepare('SELECT centrale FROM players,players_stats WHERE players.id=players_stats.player_id');
          $req->execute(array($_SESSION['id'])); 
          $test = $req->fetch();?>
          <p>
            <?php 
              echo($test["centrale"]);
            ?>
          </p>
        Coût:<br>
        - 200 d'industrie<br>
        - 20 d'énergie
      </button>
    </div>
    <div class="row">
      <button class="bg-primary" method="post">
        <u><b>Canon</b></u><br>
        possédé:
        <?php
          $req = $bdd->prepare('SELECT canon FROM players,players_stats WHERE players.id=players_stats.player_id');
          $req->execute(array($_SESSION['id'])); 
          $test = $req->fetch();?>
          <p>
            <?php 
              echo($test["canon"]);
            ?>
          </p>
        Coût:<br>
        - 15 d'industrie<br>
        - 2 d'énergie
      </button>
      <button class="bg-primary" method="post">
        <u><b>troupe offensive</b></u><br>
        possédé:<?php
          $req = $bdd->prepare('SELECT troupe_offensive FROM players,players_stats WHERE players.id=players_stats.player_id');
          $req->execute(array($_SESSION['id'])); 
          $test = $req->fetch();?>
          <p>
            <?php 
              echo($test["troupe_offensive"]);
            ?>
          </p>
        Coût:<br>
        - 10 d'industrie<br>
      </button>
      <button class="bg-primary" method="post">
        <u><b>troupe logistique</b></u><br>
        possédé:
        <?php
          $req = $bdd->prepare('SELECT troupe_logistique FROM players,players_stats WHERE players.id=players_stats.player_id');
          $req->execute(array($_SESSION['id'])); 
          $test = $req->fetch();?>
          <p>
            <?php 
              echo($test["troupe_logistique"]);
            ?>
          </p>
        Coût:<br>
        - 10 d'industrie<br>
      </button>
    </div>
  </div>
</div>
<div id="screen">
  <?php 
  $req = $bdd->prepare('SELECT pseudo,x_coord,y_coord,color FROM players,players_stats WHERE players.id=players_stats.player_id');
  $req->execute(array($_SESSION['id']));
  $data = $req->fetch();
  while($data != false) { ?>
    <div
       class="player_dot"
       style="top: <?=$data['y_coord'] * 3; ?>px; left: <?=$data['x_coord'] * 3; ?>px; background-color: <?=$data['color']; ?>;"
       onmouseover="setInfo('<?=$data['pseudo']; ?>', <?=$data['x_coord']; ?>, <?=$data['y_coord']; ?>);">
    </div>
  <?php $data= $req->fetch();} ?>
</div>
<div id="screen-right" class="container"></div>