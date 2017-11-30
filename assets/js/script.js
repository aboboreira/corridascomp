$(function() {

	var baseUrl;

	baseUrl = $('#base_url').val();

	$('.btn-alterar').click(function(btn){
		btn.preventDefault();
		
console.log(baseUrl);
		
		var id_motorista = $(this).val();
		var nm_motorista = $(this).closest('tr').find('input[name="nm_motorista"]').val();	
		var cpf_motorista = $(this).closest('tr').find('input[name="cpf_motorista"]').val();
		var dtnasc_motorista = $(this).closest('tr').find('input[name="dtnasc_motorista"]').val();
		var sexo_motorista = $(this).closest('tr').find('select[name="sexo_motorista"]').val();
		var mod_carro = $(this).closest('tr').find('input[name="mod_carro"]').val();		
		var status = $(this).closest('tr').find('select[name="status"]').val();	

		$.post(baseUrl+'Lista_Motorista/alterar', { id_motorista:id_motorista, nm_motorista:nm_motorista, 
			cpf_motorista:cpf_motorista, dtnasc_motorista:dtnasc_motorista, sexo_motorista:sexo_motorista,
			 mod_carro:mod_carro,status:status} , function(){
			$('.alert-save').show().delay(5000).slideUp(500);
			window.location.reload();
		})
	})


	$('.btn-editar').click(function(btn){
		btn.preventDefault();
		
console.log(baseUrl);
		
		var id_passageiro = $(this).val();
		var nm_passageiro = $(this).closest('tr').find('input[name="nm_passageiro"]').val();	
		var cpf_passageiro = $(this).closest('tr').find('input[name="cpf_passageiro"]').val();
		var dtnasc_passageiro = $(this).closest('tr').find('input[name="dtnasc_passageiro"]').val();
		var sexo_passageiro = $(this).closest('tr').find('select[name="sexo_passageiro"]').val();
		

		$.post(baseUrl+'Lista_Passageiro/editar', { id_passageiro:id_passageiro, nm_passageiro:nm_passageiro, 
			cpf_passageiro:cpf_passageiro, dtnasc_passageiro:dtnasc_passageiro, sexo_passageiro:sexo_passageiro} , function(){
			$('.alert-save').show().delay(5000).slideUp(500);
			window.location.reload();
		})
	})
		
		
	
});