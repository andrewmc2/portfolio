$(document).ready(function() {
	
	//Default	
	$("#divOne").anchorScroll();
	
	//Custom FX	
	$("#divTwo").anchorScroll({fx: "easeOutBounce"});
	
	//To scroll without clicking a link 
	//use this
	//var destination = $("#box2Container").offset().top;
	//$("html,body").animate({ scrollTop: destination},"easeInQuad");
  });