
$(".apagar").click(function(){
    let idBd = $(this).data("valor");
    $.ajax({
        type: "POST",
        url: "../../pastaphp/operacoes/deleteLivro.php",
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
            $("#buscasResul").load("./altLivro.php");
        }
    });
});

$(".recomendar").click(function(){
    let idBd = $(this).data("valor");
    $.ajax({
        type: "POST",
        url: "../../pastaphp/operacoes/idAlvo.php",
        data: {id: idBd},
        success: function(data) {
            $("#buscasResul").load("./formPosts.php");
        }
    });
});