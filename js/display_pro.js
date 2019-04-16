	$(function(){
		var url = "<?php echo base_url();?>"
		$('#btn').click(function(){
			$('#myModal').modal('show');
			$('#myModal').find('.modal-title').text('hello');
		});
			showAllPro();
		function showAllPro(){
			$.ajax({
				type: 'ajax',
				url: '<?php echo base_url()?>product/showAllProduct',
				async: false,
				dataType: 'json',
				success: function(data){
					var html = '';
					var i;
					for(i=0; i < data.length; i++){
											html += 

						    	'<div class="col-md-4">'+
					'<div class="thumbnail">'+
						'<img width="200" src="'+url+'assets/images/'+data[i].product_image+'" alt="NO Image">'+
						'<div class="caption">'+
							'<h4>'+data[i].product_name+'</h4>'+
						'	<div class="row">'+
								'<div class="col-md-7">'+
									'<h4>'+data[i].product_price+'</h4>'+
								'</div>'+
								'<div class="col-md-5">'+
									'<input type="number" name="quantity" id="" value="1" class="quantity form-control">'+
								'</div>'+
							'</div>'+
							
							'<button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-cart"></i> Add To Cart</button>'+							
						'</div>'+
					'</div>'+
				'</div>';
					}
					$('#showdata').html(html);
				},
				error: function(){
					alert('Could not get data from Database');
				}
			});
		}
	});
