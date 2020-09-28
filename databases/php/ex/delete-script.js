$(".btn-delete").click(function(){
	var id=$(this).data("id");
	$("#link-delete").attr("href","delete-phpex.php?id_phpex="+id);
	console.log(id);
});