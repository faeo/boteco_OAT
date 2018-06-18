
<div class="col-sm-9 text-center">
    <h2>Formulário</h2>
  
  <form name="frm" method="POST"  action="?pg=processar_formulario" >
  <div class="row">
    <div class="col-4 col-sm-6 form-group">
      <label>Nome:</label> 
      <input class="form-control" type="text" name="nome">
    </div>  
    <div class="col-4 col-sm-6 form-group">
      <label>CPF: </label> 
      <input class="form-control" type="number" name="cpf">
      </div>
    </div>
  <div class="row">
    <div class="col-4 col-sm-6 form-group">
      <label>E-mail:</label> 
      <input class="form-control" type="email" name= "email">
    </div>  
    <div class="col-4 col-sm-6 form-group">
      </label>Telefone:</label>
      <input class="form-control" type ="tel" name= "telefone">
    </div>
  </div>
  <div class="row form-group">
    <textarea class="form-control" rows="4" name= "msg" placeholder="Digite sua mensagem"></textarea>
  </div>
  <div class="row">
    <div class="col align-self-end">
      <!-- input type="submit" name="enviar" -->
      <button type="submit" class="btn btn-primary btn-lg btn-block" name="enviar" onclick="return validar()">Enviar</button>
    </div>
  </div>
  </form>
</div>          
