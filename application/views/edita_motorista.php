
<section id="contact" class="gray">	
			<div class="branded-section">
				<div class="masked">
					<div class="container">
						<div class="heading">
                       <h1>Cadastro de Motorista</h1>
                       </div>
                       		<div class="alert alert-success alert-insert" style="display: none;">Motorista cadastrado com sucesso.
                       		</div>
						<form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url('edita_motorista/save'); ?>">
							<div class="form-group">
								
								<div class="col-sm-12" style="position:relative; margin-bottom: 30px;">
									<p style="text-align: left;margin-left: 0px;" >Sexo do Motorista:</p>	
									<select multiple class="form-control label_better" id="sexo_motorista" name="sexo_motorista" >
									  <option value="Masculino">Masculino</option>
									  <option value="Feminino">Feminino</option>									
									</select>
								</div>
								<div class="col-sm-12" style="position:relative; margin-bottom: 30px;">
									<input type="text" name="nm_motorista" required class="form-control label_better" placeholder="Nome do Motorista">
								</div>
								<div class="col-sm-12" style="position:relative; margin-bottom: 30px;">
									<input type="text" name="cpf_motorista" required class="form-control label_better" placeholder="CPF do Motorista">
								</div>

								<div class="col-sm-12" style="position:relative; margin-bottom: 30px;">
									<input type="text" name="dtnasc_motorista" required class="form-control label_better" placeholder="Nascimento do Motorista">
								</div>

								<div class="col-sm-12" style="position:relative; margin-bottom: 30px;">
									<p style="text-align: left;margin-left: 0px;" >Sexo do Motorista:</p>
									<select multiple class="form-control label_better" id="status" name="status" >
									  <option value="Ativo">Ativo</option>
									  <option value="Inativo">Inativo</option>									
									</select>
								</div>

								<div class="col-sm-12" style="position:relative; margin-bottom: 30px;">
									<input type="text" name="mod_carro" required class="form-control label_better" placeholder="Carro do Motorista">
								</div>
								
									<input type="hidden" name="id" value="" placeholder="Id">	
							</div>
							<div class="form-group commands">
								<button class="btn btn-primary btn-inserir">inserir </button>
							</div>
						</form>					
				</div>
			</div>
</section>
