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
                <td><b>Nome Motorista</b></td>
                <td><b>Nome Passegeiro</b></td>
                <td><b>Valor Corrida</b></td>
                
              </tr>
              
                <?php foreach ($data as $content): ?>
                  <form>
                   <tr>
                   	<td style="display:none;"><?php echo $content->id_corrida; ?></td>

                   	<td><input type="text" name="nm_motorista" placeholder="<?php echo $content->nm_motorista; ?>" value="<?php echo $content->nm_motorista; ?>"></td>

                      <td><input type="text" name="nm_passageiro" placeholder="<?php echo $content->nm_passageiro; ?>" value="<?php echo $content->nm_passageiro; ?>"></td>

                      

                      <td><input type="text" name="vl_corrida" placeholder="<?php echo $content->vl_corrida; ?>" value="<?php echo $content->vl_corrida; ?>"></td>

                      

                   
                   </tr>
                   </form>
  
                
                <?php endforeach ?>
                </table>

    </div>
    </div>
  </div>
</section> 