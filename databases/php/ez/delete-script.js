$(".btn-delete").click(function(){
	var id=$(this).data("id");
	$("#link-delete").attr("href","delete-phpez.php?id_phpez="+id);
	console.log(id);
});