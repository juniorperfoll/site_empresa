<div class="row">
  <div class="col-md-12">
    <form method="post" action="enviar.php">
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control">
      </div>
      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" class="form-control">
      </div>
      <div class="form-group">
        <label for="mensagem">Mensagem</label>
        <textarea  name="mensagem" rows="5" id="mensagem" class="form-control"></textarea>
      </div>
      <button type="submit" name="enviar" value="enviar" class="btn btn-success">Enviar</button>
    </form>
  </div>
</div>
