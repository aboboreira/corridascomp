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
                       <h1>Consulta de Passageiros</h1>
            </div>

            <div class="alert alert-success alert-save" style="display: none;">Passageiro atualizado com sucesso.</div>


            <table class="table">
             

              <tr>
                <td><b>Nome Passegeiro</b></td>
                <td><b>CPF</b></td>
                <td><b>Nascimento</b></td>
                <td><b>Sexo</b></td>                
                <td><b>Botão para Alterar</b></td>
                
              </tr>
              
                <?php foreach ($data as $content): ?>
                  <form>
                   <tr>
                   	<td style="display:none;"><?php echo $content->id_passageiro; ?></td>

                      <td><input type="text" name="nm_passageiro" placeholder="<?php echo $content->nm_passageiro; ?>" value="<?php echo $content->nm_passageiro; ?>"></td>

                      <td><input type="text" name="cpf_passageiro" placeholder="<?php echo $content->cpf_passageiro; ?>" value="<?php echo $content->cpf_passageiro; ?>"></td>

                      <td><input type="text" name="dtnasc_passageiro" placeholder="<?php echo $content->dtnasc_passageiro; ?>" value="<?php echo $content->dtnasc_passageiro; ?>"></td>

                      <td>
                        <select name="sexo_passageiro">
                          <option value="<?php echo $content->sexo_passageiro; ?>"><?php echo $content->sexo_passageiro; ?></option>
                          <option value="-">-----</option>
                          <option value="Masculino">Masculino</option>
                          <option value="Feminino">Feminino</option>
                          <select>
                      </td>

                                                             
                      
                      <td><button class="btn btn-default btn-xs btn-success btn-editar" value="<?php echo $content->id_passageiro; ?>">Alterar</td>

                   
                   </tr>
                   </form>
  
                
                <?php endforeach ?>
                </table>

    </div>
    </div>
  </div>
</section> 