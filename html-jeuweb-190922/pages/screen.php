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
    top: 100px;
    left: calc((100% - 1900px) / 2);
    position: flex;
    background: linear-gradient(purple,blue);
    border-radius: 1rem;
    border: 10px solid blue;
    width: 200px;
    height: 869px;
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
<?php
  /*$req = $bdd->prepare('SELECT pseudo,x_coord,y_coord,color,energie,industrie FROM players,players_stats WHERE players.id=players_stats.player_id');
  $req->execute(array($_SESSION['id']));
  $data = $req->fetch();
  $pse=$data["pseudo"];
  $x_co=$data["x_coord"];
  $y_co=$data["y_coord"];
  $indu=$data["industrie"];
  $ener=$data["energie"];*/?>
  <div >
    <?php
      #echo "pseudo :",$pse,"<br>   X : ", $x_co ," , Y : ", $y_co ,"<br>  industrie : ", $indu ," <br>  energie : ", $ener;
    ?>
  </div>
</div>
<script>
  var infodiv = document.getElementById("info");
  function setInfo(name, x, y, energie,industrie)
  {
    infodiv.innerHTML = name + "<br />X: " + x + "; Y: " + y +"<br/> energie:"+energie+"<br/> industrie: "+industrie;
  }
</script>
<div id="screen-left" class="container">
  <div class="col">
    <div class="row">
      <div class="bg-danger">
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
      
      <form method="post">
        <input type="submit" name="button1"
                class="button" value="test" />
      </form>
      <?php
        $req = $bdd->prepare('UPDATE players_stats SET crea_indu=crea_indu+ 1, industrie=industrie-200, energie=energie-10 WHERE WHERE players.id=players_stats.player_id');
        $req->execute(array($_SESSION['id']));
      ?>
</div>
<div class="bg-primary">
      <u><b>central</b></u><br>
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
        - 10 d'énergie
        
      <form method="post">
        <input type="submit" name="button2"
                class="button" value="test 2" />
      </form>
      <?php
          $req = $bdd->prepare('UPDATE players_stats SET centrale=centrale+ 1, industrie=industrie-200, energie=energie-10 WHERE players.id=players_stats.player_id');
    $req->execute(array($_SESSION['id']));
  ?>
</div>
<div class="bg-info">
      <u><b>canon</b></u><br>
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
        
      <form method="post">
        <input type="submit" name="button3"
                class="button" value="test 3" />
      </form>
      <?php
          $req = $bdd->prepare('UPDATE players_stats SET canon=canon+ 1, industrie=industrie-15, energie=energie-2 WHERE players.id=players_stats.player_id');
          $req->execute(array($_SESSION['id']));
  ?>
</div>
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
<!--
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
          #$req = $bdd->prepare('SELECT troupe_logistique FROM players,players_stats WHERE players.id=players_stats.player_id');
          #$req->execute(array($_SESSION['id'])); 
          #$test = $req->fetch();?>
          <p>
            <?php 
            #  echo($test["troupe_logistique"]);
            #?>
          </p>
        Coût:<br>
        - 10 d'industrie<br>
      </button>-->
    </div>
  </div>
</div>
<div id="screen">
  <?php 
  $req = $bdd->prepare('SELECT pseudo,x_coord,y_coord,color,industrie,energie FROM players,players_stats WHERE players.id=players_stats.player_id');
  $req->execute(array($_SESSION['id']));
  $data = $req->fetch();
  while($data != false) { ?>
    <div
       class="player_dot"
       style="top: <?=$data['y_coord'] * 3; ?>px; left: <?=$data['x_coord'] * 3; ?>px; background-color: <?=$data['color']; ?>;"
       onmouseover="setInfo('<?=$data['pseudo']; ?>', <?=$data['x_coord']; ?>, <?=$data['y_coord']; ?>,<?=$data['industrie']; ?>,<?=$data['energie']; ?>);">
    </div>
  <?php $data= $req->fetch();} ?>
</div>
<div id="screen-right" class="container"></div>