
<section id="contact" class="gray">	
			<div class="branded-section">
				<div class="masked">
					<div class="container">
						<div class="heading">
                       <h1>Cadastro de Passageiro</h1>
                       </div>
                       		<div class="alert alert-success alert-insert" style="display: none;">Passageiro cadastrado com sucesso.
                       		</div>
						<form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url('edita_passageiro/save'); ?>">
							<div class="form-group">
								
								<div class="col-sm-12" style="position:relative; margin-bottom: 30px;">
									<p style="text-align: left;margin-left: 0px;" >Sexo do Passageiro:</p>	
									<select multiple class="form-control label_better" id="sexo_passageiro" name="sexo_passageiro" >
									  <option value="Masculino">Masculino</option>
									  <option value="Feminino">Feminino</option>									
									</select>
								</div>
								<div class="col-sm-12" style="position:relative; margin-bottom: 30px;">
									<input type="text" name="nm_passageiro" required class="form-control label_better" placeholder="Nome do Passageiro">
								</div>
								<div class="col-sm-12" style="position:relative; margin-bottom: 30px;">
									<input type="text" name="cpf_passageiro" required class="form-control label_better" placeholder="CPF do passageiro">
								</div>

								<div class="col-sm-12" style="position:relative; margin-bottom: 30px;">
									<input type="text" name="dtnasc_passageiro" required class="form-control label_better" placeholder="Nascimento do passageiro">
								</div>				
								
								<input type="hidden" name="id_passageiro" value="" placeholder="id_passageiro">		
							</div>
							<div class="form-group commands">
								<button class="btn btn-primary btn-inserir">inserir </button>
							</div>
						</form>					
				</div>
			</div>
</section>
