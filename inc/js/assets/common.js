hljs.initHighlightingOnLoad();
$().ready(function(){
	$("body").on("click",".popup-demo",function(){
		console.log("sdf");
		$.mobilepopup({
			targetblock:".pop-up",
			width:"500px",
			height:"300px",
			onformsubmited: function(data, el){
				$.mobilepopup('reload',{html:data});
			}
		});
		return false;
	});

	$("body").on("click",".toggle-menu-top",function(){
		$(this).toggleClass("opened").closest("nav").find("> ul").toggleClass("opened-mobile-menu");
		return false;
	});

	$.prettytextfield({
	    textcontainer: ".text",
	    showtextcontainer: ".textshow",
	    pathtosvgicons:"/inc/pl/prettytextfield/icons/"
	});

});