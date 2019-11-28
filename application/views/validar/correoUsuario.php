<script>
	

	$(document).ready(function(){

		$('#correo').blur(function(){

			$id = $("#correo").val();

			$.ajax({

				type: 'ajax',
				method: 'post',
				url: '<?php echo base_url('usuario_controller/validarCorreo') ?>',
				data: {correo:$id},
				dataType: 'json',

				success: function(respuesta){

					if(respuesta==true){

						$('#infoCorreo').text('Correo NO disponible').css('color','red');

					}else{

						$('#infoCorreo').text('Correo disponible').css('color','green');
					}
				},
			});
		});
	});

</script>

<script type="text/javascript">
	

	$(document).ready(function(){
		$("#product").keyup(function(){

			$nombre = $("product").val();

			$.ajax({
				type: 'ajax',
				method: 'post',
				url: '<?php echo base_url('inm_controller/search') ?>',
				data: {product:$nombre},
				dataType: 'json',
					success: function(respuesta){ 

			})
		})

	})
</script>


<script type="text/javascript">

	$('.itemName').select2({ 
		ajax: {
			url: '/Controller_name/search',
			dataType: 'json',
			processResults: function (data) {
				return { 
					results: data }; }, 
					cache: true } }); ==Controller== 
	function search(){
		$this->load->database(); 
		$this->db->like('field_name',
			$this->input->get("q")); 
		$this->db->select('id,field_name as text');
		$this->db->from('software');
		$res = $this->db->get()->result_array(); echo json_encode($res); }
	</script>






	<script type="text/javascript">
		$(document).ready(function(){ 
			$("#search").keyup(function(){ 

				if($("#search").val().length>3){

					$.ajax({ 
						type: "post", 
						url: '<?php echo base_url('inm_controller/search') ?>',
						cache: false, 
						data:'search='+$("#search").val(),

						success: function(response){ 
							$('#finalResult').html(""); 
							var obj = JSON.parse(response);
							if(obj.length>0){
								try{ var items=[]; 
									$.each(obj, function(i,val){ 
										items.push($('').text(val.NAME)); });
									$('#finalResult').append.apply(
										$('#finalResult'), items); }
									catch(e) { alert('Exception while request..'); }
								}else{ 
									$('#finalResult').html($('').text("No Data Found")); } }, error: function(){ 
										alert('Error while request..'); 
									} 
								}); 
				} 
				return false; 
			}); 
		});    
	</script>