
$(".lixeira").click(function(){
    let idBd = $(this).data("valor");
    $.ajax({
        type: "POST",
        url: "../../pastaphp/operacoes/deletePosts.php",
        data: {id: idBd},
        success: function(data) {
            location.reload();
        }
    });
});