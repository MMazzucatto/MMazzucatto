<?php
include_once("header.php");
?>

<div class="container">

<form class="row g-3" action="../controler/inserirCadastro.php" method="Get">
  <div class="col-md-6">
    <label for="inputNome4" class="form-label">Nome</label>
    <input type="text" name="nomeusu" class="form-control" id="inputNome4" required>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Gênero</label>
    <input type="email" name="emailusu" class="form-control" id="inputEmail4" rsequired>
  </div>
  <div class="col-12">
    <label for="inputFone" class="form-label">Código</label>
    <input type="text" name="foneusu" class="form-control" id="inputfone" placeholder="123456789" required>
  </div>
  <div class="col-md-12">
    <label for="inputTipo" class="form-label">Plataforma</label>
    <select id="inputTipo" name="tipousu" class="form-select">
      <option selected>Escolha...</option>
      <option value="1">PC</option>
      <option value="2">Xbox</option>
      <option value="3">PlayStation</option>
      <option value="2">Nintendo Switch</option>
    </select>
  </div>
 
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Aceita-se os termo de uso do sistema de jogos
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>

</div>

<?php
include_once("footer.php");
?>
