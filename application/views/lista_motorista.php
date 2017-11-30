<style type="text/css">	
	.table{
width: 80%;
text-align: center;
	margin: 0 auto;
	}

table tr td{
text-align: center;
	}
</style>


<section id="contact" class="gray"> 
      <div class="branded-section">
        <div class="masked">
          <div class="container">
            <div class="heading">
                       <h1>Consulta de Motoristas</h1>
            </div>

            <div class="alert alert-success alert-save" style="display: none;">Motorista atualizado com sucesso.</div>


            <table class="table">
             

              <tr>
                <td><b>Nome Motorista</b></td>
                <td><b>CPF</b></td>
                <td><b>Nascimento</b></td>
                <td><b>Sexo</b></td>
                <td><b>Modelo Carro</b></td>
                <td><b>Status</b></td>
                <td><b>Botão para Alterar</b></td>
                
              </tr>
              
                <?php foreach ($data as $content): ?>
                  <form>
                   <tr>
                   	<td style="display:none;"><?php echo $content->id_motorista; ?></td>

                      <td><input type="text" name="nm_motorista" placeholder="<?php echo $content->nm_motorista; ?>" value="<?php echo $content->nm_motorista; ?>"></td>

                      <td><input type="text" name="cpf_motorista" placeholder="<?php echo $content->cpf_motorista; ?>" value="<?php echo $content->cpf_motorista; ?>"></td>

                      <td><input type="text" name="dtnasc_motorista" placeholder="<?php echo $content->dtnasc_motorista; ?>" value="<?php echo $content->dtnasc_motorista; ?>"></td>

                      <td>
                        <select name="sexo_motorista">
                          <option value="<?php echo $content->sexo_motorista; ?>"><?php echo $content->sexo_motorista; ?></option>
                          <option value="-">-----</option>
                          <option value="Masculino">Masculino</option>
                          <option value="Feminino">Feminino</option>
                          <select>
                      </td>

                      <td><input type="text" name="mod_carro" placeholder="<?php echo $content->mod_carro; ?>" value="<?php echo $content->mod_carro; ?>"></td>

                      <td>
                        <select name="status">
                          <option value="<?php echo $content->status; ?>"><?php echo $content->status; ?></option>
                          <option value="-">-----</option>
                          <option value="Ativo">Ativo</option>
                          <option value="Inativo">Inativo</option>
                          <select>
                      </td>

                                        
                      
                      <td><button class="btn btn-default btn-xs btn-success btn-alterar" value="<?php echo $content->id_motorista; ?>">Alterar</td>

                   
                   </tr>
                   </form>
  
                
                <?php endforeach ?>
                </table>

    </div>
    </div>
  </div>
</section> 