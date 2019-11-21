$(document).ready(function(){
	$('.delete_time').on('click',function(){
		
		$(this).parent().css('display','none');
	})

	$('a#next').on('click',function(){

		$(this).siblings('a#prev').css('visibility','visible');
	})
	$('.next_footer').on('click',function(){
		$(this).css('visibility','hidden');
		
	})
	$('.prev_footer').on('click',function(){
		$(this).css('visibility','hidden');
		$(this).siblings('a#next').css('visibility','visible');
		
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
    $('.search_content input').focusin(function(){
    	$(this).parent().css({'background':'white','border':'1px solid #ddd'});
    });


    // Set the date we're counting down to
	  var countDownDate = new Date("Jan 25, 2020 15:37:25").getTime(); // tet nguyen dan 1/1 ( 25-1-2020)

	// Update the count down every 1 second
	  var x = setInterval(function() {

	  // Get today's date and time
	  var now = new Date().getTime();
	    
	  // Find the distance between now and the count down date
	  var distance = countDownDate - now;
	    
	  // Time calculations for days, hours, minutes and seconds
	  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
	    
	  // Output the result in an element with id="demo"
	  document.getElementById("clock_count").innerHTML = days + "d " + hours + "h "
	  + minutes + "m " + seconds + "s ";
	    
	  // If the count down is over, write some text 
	  if (distance < 0) {
	    clearInterval(x);
	    document.getElementById("clock_count").innerHTML = "EXPIRED";
	  }
	}, 1000);


	$('[data-toggle="popover"]').hover(function(){
		$name_course = $(this).attr('value');
	});
	 // popover
	$('[data-toggle="popover"]').popover({
		trigger: "manual",
	    html:true,
	    content:function(){
	    return (
	    	
				'<small>Last updated : 11/2019</small>'+
				'<div class="">'+
					'<a class="course_name" href="#">'+$name_course+'</a>'+
				'</div>'+
				
				'<div class="popover_sell mb-2">'+
					'<div class="popover_sale_price">BESTSELLER</div>'+
					'<span>in'+ 
						'<a href="#">Comunication Skills</a>'+
						'| Bussiness'+
					'</span>'+
				'</div>'+
				'<div class="popover_time mb-3">'+
					'<span>'+
						'<i class="fa fa-play-circle"></i>'+
						'550 lectures'+
					'</span>'+
					'<span>'+
						'<i class="fa fa-clock"></i>'+
						'29 hours'+
					'</span>'+
					'<span>'+
						'<i class="fab fa-artstation"></i>'+
						'All levels &nbsp; <i class="fa fa-closed-captioning"></i>'+
					'</span>'+
					
				'</div>'+
				'<p>Communication Skills for Persuasion, Assertiveness and all Business Communication Needs</p>'+
				'<ul class="popover_content_benefit mb-4">'+
					'<li>Communicate confidently in all business and personal situations</li>'+
					'<li>Communicate in an understandable manner</li>'+
					'<li>Communicate in a memorable way</li>'+
				'</ul>'+
				'<div class="add_to_cart">'+
					
					'<a href="#" class="btn_add_to_cart">Add to cart</a>'+
					'<i class="far fa-heart"></i>'+
				

				'</div>'
			

	    	);
	    },
    }).on("mouseenter", function () {
        var _this = this;
        $(this).popover("show");
        $(".popover").on("mouseleave", function () {
            $(_this).popover('hide');
        });
    }).on("mouseleave", function () {
        var _this = this;
        setTimeout(function () {
            if (!$(".popover:hover").length) {
                $(_this).popover("hide");
            }
        }, 300);
	});  
});
    
