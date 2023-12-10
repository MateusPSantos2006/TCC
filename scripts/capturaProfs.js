$(".toggle").click(function(){
    let idBd = $(this).data("valor");
    $.ajax({
        type: "POST",
        url: "../../pastaphp/operacoes/toggleProf.php",
        data: {id: idBd},
        success: function(data) {
            location.reload();
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
            $("#secao").load("./altProf.php");
        }
    });
});