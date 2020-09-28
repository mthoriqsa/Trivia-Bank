$(".btn-delete").click(function(){
	var id=$(this).data("id");
	$("#link-delete").attr("href","delete-phpin.php?id_phpin="+id);
	console.log(id);
});