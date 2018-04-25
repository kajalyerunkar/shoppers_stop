$(document).ready(function(){
// 		$("img").hide();
// 		$("img:first").show();
// 		setInterval(function(){
// 			// alert(1);
// 			$("img:first").fadeOut(2000).next().fadeIn(2000).end().appendTo(".banner");
// 		},3000)

	$(".blackbox").hide();

	$(".pro_img").mouseenter(function(){
		$(this).children(".blackbox").fadeIn(1000);

	})

	$(".pro_img").mouseleave(function(){
		$(this).children(".blackbox").fadeOut(1000);
	})
	


	//menu list tab
	$(".menu_list_contents").hide();
	// $(".menu_list_contents:first").show();

	$(".menu_list li").mouseenter(function(){
		position = $(this).index();
		// alert(position);
		$(".menu_list_contents").hide();
		$(".menu_list_contents").eq(position).slideDown(500);
	})
	$(".menu_list li").mouseleave(function(){
		position = $(this).index();
		// alert(position);
		$(".menu_list_contents").hide();
		$(".menu_list_contents").eq(position).slideUp(500);
	})
	
	//banner
	slide_wi=Math.round($(".banner").width());
	//alert(slide_wi);
	slide_hi=Math.round($(".banner").height());
	//alert(slide_hi);

	$(".banner").css("float","left");
	$(".mainslide").width(slide_wi * $(".banner").length);
	$(".mainslide,.gallery").height(slide_hi);
	$(".gallery").width(slide_wi);
	// $(".gallery").css("border","3px solid")
	$(".gallery").css("overflow","hidden")
	// $(".mainslide").css("border","3px solid red")

	banner_arr=[]
	$(".banner").each(function(position){
		// console.log(position)
		// console.log($(this).width())
		// console.log($(this).width()*position);
			banner_arr[position]=$(this).width()*position
		});
	//console.log(slider_arr)
		curpos=0;
		minpos=0;
		maxpos=$(".banner").length-1;

		$(".circles span").click(function(){
			var pos=$(this).index();
			curpos=pos;
			//console.log(pos);
			//console.log(slider_arr[pos])
			$(".mainslide").animate({
			"margin-left":-banner_arr[pos]+"px"
		},1000);
			$(".circles span").css("background","#f1f1f1")
			$(this).css("background","#c1c1c1")

			if(curpos>0){
				$(".left_arrow").fadeIn();
			}
			else{
				$(".left_arrow").fadeOut();
			}
			if(curpos<maxpos){
				$(".right_arrow").fadeIn();
			}
			else{
				$(".right_arrow").fadeOut();
			}
		})
		$(".left_arrow").hide();


		$(".left_arrow").click(function(){
			curpos--;
			$(".mainslide").animate({
				"margin-left":-banner_arr[curpos]+"px"
			},1000);
			if(curpos>0){
				$(".left_arrow").fadeIn();
			}
			else{
				$(".left_arrow").fadeOut();
			}
			if(curpos<maxpos){
				$(".right_arrow").fadeIn();
			}
			else{
				$(".right_arrow").fadeOut();
			}

			$(".circles span").css("background","#f1f1f1")
			$(".circles span:eq("+curpos+")").css("background","#c1c1c1");
		})


		$(".right_arrow").click(function(){
			curpos++;
			$(".mainslide").animate({
				"margin-left":-banner_arr[curpos]+"px"
			},1000);
			if(curpos>0){
				$(".left_arrow").fadeIn();
			}
			else{
				$(".left_arrow").fadeOut();
			}
			if(curpos<maxpos){
				$(".right_arrow").fadeIn();
			}
			else{
				$(".right_arrow").fadeOut();
			}

			$(".circles span").css("background","#f1f1f1")
			$(".circles span:eq("+curpos+")").css("background","#c1c1c1");
		})


 	
 })
