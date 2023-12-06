$(".toggle").click(function(){
    let idBd = $(this).data("valor");
    $.ajax({
        type: "POST",
        url: "../../pastaphp/operacoes/toggleProf.php",
        data: {id: idBd},
        success: function(data) {
            $("#corpoTabela").load("../../pastaphp/operacoes/readProfs.php");
        }
    });
});

$(".update").click(function(){
    let idBd = $(this).data("valor");
    $.ajax({
        type: "POST",
        url: "../../pastaphp/operacoes/idAlvo.php",
        data: {id: idBd},
        success: function(data) {
            $("#buscasResul").load("./altLivro.php");
        }
    });
});