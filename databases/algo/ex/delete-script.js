$(".btn-delete").click(function(){
	var id=$(this).data("id");
	$("#link-delete").attr("href","delete-algoex.php?id_algoex="+id);
	console.log(id);
});