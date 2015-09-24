$(function() {
	$("select").change(function(){
		var selectedClass = "." + $(this).val();
		$(".school").hide();
		$(selectedClass).show(200);
	});
});