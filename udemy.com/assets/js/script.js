$(document).ready(function(){
	$('.delete_time').on('click',function(){
		
		$(this).parent().css('display','none');
	})

	$('a#next').on('click',function(){

		$(this).siblings('a#prev').css('visibility','visible');
	})

	// show model
	$('.bt_content').addClass('hienra');
	$('.background_fade').addClass('mo');

	//xu li khi click vao
    $('.btn_ok').click(function(){
        $('.bt_content').removeClass('hienra');
         $('.background_fade').removeClass('mo');
    });
    $('.background_fade').click(function(){
        $('.bt_content').removeClass('hienra');
         $('.background_fade').removeClass('mo');
    });
    
    // message
    // stop erase animations from firing on load

	var q = document.querySelectorAll(".cb");
	for (var i in q) {
		if (+i < q.length) {
			q[i].addEventListener("click",function(){
				let c = this.classList,
					p = "pristine";
				if (c.contains(p)) {
					c.remove(p);
				}
			});
		}
	}

});
    
