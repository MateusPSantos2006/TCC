
$(".apagar").click(function(){
    let idBd = $(this).data("valor")
    $.ajax({
        type: "POST",
        url: "../../pastaphp/operacoes/deleteLivro.php",
        data: {id: idBd},
        success: function(data) {
            $("#areaCardResul").load("../../pastaphp/operacoes/readLivroADM.php")
        }
    });
});

$(".update").click(function(){

});