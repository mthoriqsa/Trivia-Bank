$(".btn-delete").click(function(){
	var id=$(this).data("id");
	$("#link-delete").attr("href","delete-algoin.php?id_algoin="+id);
	console.log(id);
});