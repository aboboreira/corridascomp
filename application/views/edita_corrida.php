
<section id="contact" class="gray">	
			<div class="branded-section">
				<div class="masked">
					<div class="container">
						<div class="heading">
                       <h1>Cadastro de Corridas</h1>
                       </div>
                       		<div class="alert alert-success alert-insert" style="display: none;">Corrida cadastrada com sucesso.
                       		</div>
						<form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url('edita_corrida/save'); ?>">
							<div class="form-group">
								
								
								

								<div class="col-sm-12" style="position:relative; margin-bottom: 30px;">
									<p style="text-align: left;margin-left: 0px;" >Nome do Motorista:</p>
									<select multiple class="form-control label_better" id="nm_motorista" name="nm_motorista" >
									 <?php foreach ($motorista as $content): ?>
										  <?php if ($content->status =="Ativo" ): ?>
										  	<option value="<?php echo $content->nm_motorista; ?>"><?php echo $content->nm_motorista; ?></option>
										  <?php endif ?>
										  	
									<?php endforeach ?>  								 									
										</select>
                					
								</div>

								<div class="col-sm-12" style="position:relative; margin-bottom: 30px;">
									<p style="text-align: left;margin-left: 0px;" >Nome do Passageiro:</p>
									 
										<select multiple class="form-control label_better" id="nm_passageiro" name="nm_passageiro" >
											<?php foreach ($passageiro as $content): ?>
										  <option value="<?php echo $content->nm_passageiro; ?>"><?php echo $content->nm_passageiro; ?></option>
										  <?php endforeach ?>									 									
										</select>
                					
								</div>	

								<div class="col-sm-12" style="position:relative; margin-bottom: 30px;">
									<input type="text" name="vl_corrida" required class="form-control label_better" placeholder="Valor Corrida">
								</div>			
								
									
							</div>
							<div class="form-group commands">
								<button class="btn btn-primary btn-inserir">inserir </button>
							</div>
						</form>					
				</div>
			</div>
</section>
