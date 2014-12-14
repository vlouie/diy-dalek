$(document).ready(function() {
	$("#yellow").click(function(){
		$("#center").css("background-color", "yellow");
	});
	$("#red").click(function(){
		$("#center").css("background-color", "red");
	});
	$("#green").click(function(){
		$("#center").css("background-color", "green");
	});
	$("#blue").click(function(){
		$("#center").css("background-color", "blue");
	});
	$("#white").click(function(){
		$("#center").css("background-color", "white");
	});
	$("#default").click(function(){
		$("#center").css("background-color", "#6699ff");
	});
	$("#openContact").click(function(){
		$("#bg_overlay").show();
		$("#contact").show();
	});
	$("#close").click(function(){
		$("#bg_overlay").hide();
		$("#contact").hide();
	});
	$("#sendbutton").click(function(){
		$("#contactform").hide();
		$("#confirmation").show();
	});
	$("img").draggable();
});