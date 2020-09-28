$(".btn-delete").click(function(){
	var id=$(this).data("id");
	$("#link-delete").attr("href","delete-cppin.php?id_cppin="+id);
	console.log(id);
});