$(document).ready(function(){
	$('#form_add_user').validate({
		rules:{
			name:"required",
			email:{
				required:true,
				email : true
			},
			password:"required"

		},
		messages:{
			name:'Vui lòng nhập tên',
			email:{
				required : 'Vui lòng nhập email',
				email : 'Vui lòng nhập đúng định dạng emal'
			},
			password:'Vui lòng nhập password'
			
		}
	})
	$(document).on('click','.btn_delete',function(e){
			e.preventDefault();

				var id = $(this).attr('id');
				
				$.confirm({
					title : '',
					content :'<div style="text-align:center; font-size:20px;">Bạn muốn xóa khóa học này?</div>',
					buttons: {
						ok: {
							text: 'Có',
							btnClass :'btn-primary',
							action: function action(){
								 window.location.href = 'delete.php?id='+id;
							}
						},
						no : {
							text: 'Hủy',
							btnClass :'btn-default'
						}
					}
				});
		});


})