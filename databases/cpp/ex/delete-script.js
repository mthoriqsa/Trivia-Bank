$(".btn-delete").click(function(){
	var id=$(this).data("id");
	$("#link-delete").attr("href","delete-cppex.php?id_cppex="+id);
	console.log(id);
});