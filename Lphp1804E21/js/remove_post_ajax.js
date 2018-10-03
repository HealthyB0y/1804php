$(document).ready(function(){
	$('.postRemove').on('click',function(){
		$.ajax({	
			url: '../Lphp1804E21/js/remove_post_ajax.php',//tuong tu action
			type: 'post',//tuong tu nethod
			data: {postId: $(this).attr('postId')},//	
			dataType:'json',
			beforeSend: function(){

				$('#loading').css('display','block');
				
			},
			success: function(response){	
				if(response.status == 'success'){
					$('tr[postId=post-'+ response.data + ']').remove();
				}
			},
			error: function(error){
				console.log(error.responseText);
	
			},
			complete: function(){
				$('#loading').css('display', 'none');
				
			}
		});
	});
});