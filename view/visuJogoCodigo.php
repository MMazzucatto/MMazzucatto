<?php

include_once("../view/header.php");
include_once("../model/conexaoJogo.php");
include_once("../model/jogoModel.php");

?>


<div class="centroform">

<form action="#" method="Post" class="row row-cols-lg-auto g-3 align-items-center">
  <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Código do jogo</label>
    <div class="input-group">
      <div class="input-group-text">Código</div>
      <input type="text" name="codigojogo" class="form-control" id="inlineFormInputGroupUsername" placeholder="Codigo do jogo">
    </div>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Pesquisar</button>
  </div>
</form>



<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Gênero</th>
      <th scope="col">Código</th>
    </tr>
  </thead>
  <tbody>
  <?php
$codigojogo = isset ($_POST["codigojogo"])? $_POST["codigojogo"]:"" ;

if($codigojogo){

$dado = visuJogoCodigo($conn,$codigojogo);

foreach($dado as $nomeUsuarios): 
?>
    <tr>
      <th scope="row"><?=$nomeUsuarios["idusu"] ?></th>
      <td><?=$nomeUsuarios["nomeusu"] ?></td>
      <td><?=$nomeUsuarios["emailusu"] ?></td>
      <td><?=$nomeUsuarios["foneusu"] ?></td>
    </tr>
    <?php
      endforeach;
    }
    ?>
  </tbody>
</table>

</div>

<?php

include_once("../view/footer.php")

?>