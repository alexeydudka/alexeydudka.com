hljs.initHighlightingOnLoad();
$().ready(function(){
	$("body").on("click",".popup-demo",function(){
		$.mobilepopup({
			targetblock:".pop-up",
			width:"500px",
			height:"300px",
		});
		return false;
	});
});