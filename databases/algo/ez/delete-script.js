$(".btn-delete").click(function(){
	var id=$(this).data("id");
	$("#link-delete").attr("href","delete-algoez.php?id_algoez="+id);
	console.log(id);
});