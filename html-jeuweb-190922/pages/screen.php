<?php
    if(!isset($_SESSION['token'])){
      header('Location: /?page=register');
    }
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
    top: 165px;
    left: calc((100% - 1900px) / 2);
    position: fixed;
    background-color: linear-gradient(purple,blue);
    border-radius: 1rem;
    border: 5px solid blue;
    width: 200px;
    height: 712px;
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
        possédé:<br>
        
        <br>
        Coût:<br>
        - 200 d'industrie<br>
        - 10 d'énergie
      </button>
    </div>
    <div class="row">
      <button class="bg-info">
        <u><b>Centrale</b></u><br>
        possédé:<br>
        <?php
          $req = $bdd->prepare('SELECT central FROM players,players_stats WHERE players.id=players_stats.player_id');
          $req->execute(array($_SESSION['id'])); 
          $test = $req->fetch();?>
          <div class="text">
            <?php 
              echo $test;
            ?>
          </div>
        <br>
        Coût:<br>
        - 200 d'industrie<br>
        - 20 d'énergie
      </button>
    </div>
    <div class="row">
      <button class="bg-primary">
        <u><b>Canon</b></u><br>
        possédé:<br>
        <br>
        Coût:<br>
        - 15 d'industrie<br>
        - 2 d'énergie
      </button>
      <button class="bg-primary">
        <u><b>troupe offensive</b></u><br>
        possédé:<br>
        <br>
        Coût:<br>
        - 10 d'industrie<br>
      </button>
      <button class="bg-primary">
        <u><b>troupe logistique</b></u><br>
        possédé:<br>
        <br>
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