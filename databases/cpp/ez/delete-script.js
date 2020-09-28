$(".btn-delete").click(function(){
	var id=$(this).data("id");
	$("#link-delete").attr("href","delete-cppez.php?id_cppez="+id);
	console.log(id);
});