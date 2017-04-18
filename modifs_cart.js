$(document).ready(function() {
    function delete_row(id_produitt) {
        $.ajax({
            type: 'post',
            url: '/miniproj_onlineSho_solo/cart.php',
            data: {
                delete_row: 'delete_row',
                row_id: id_produitt,
            },
            success: function(response) {
                if (response == "success") {
                    var row = document.getElementById("row" + id_produitt);
                    row.parentNode.removeChild(row);
                }
            }
        });
    }
});
