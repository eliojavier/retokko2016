$(document).ready(function() {
    var ingredientes = [];
    $('#agregar').click(function() {
        if(document.getElementById('ing').value != "") {
            ingredientes.push(document.getElementById('ing').value);
            $("#ingredientes").val("");
            for (var i = 0; i < ingredientes.length; ++i) {
                $("#ingredientes").val($("#ingredientes").val()
                    + '--'
                    + ingredientes[i]
                    + '\n');
            }
            document.getElementById('ing').value = "";
        }
    });
    $("#eliminar").click(function () {
        ingredientes.pop();
        $("#ingredientes").val("");
        for (var i = 0; i < ingredientes.length; ++i) {
            $("#ingredientes").val($("#ingredientes").val()
                + '--'
                + ingredientes[i]
                + '\n');
        }
    });
});
