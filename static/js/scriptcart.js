
$(document).ready(function() {
    var tabla = $("#lePanier")
    var panier = sessionStorage.getItem("panier");
    var panier_json = JSON.parse(panier);
    console.log(panier);


    function generateCart() {
        tabla.empty();
        var cabezera = $("<tr id='label'><th>Item</th><th>QTY</th><th>Unit Price</th><th>Total Price</th></tr>");
        tabla.append(cabezera);
        for (key in panier_json) {
            var prod = catalog[key];
            var prodrow = $("<tr data-id="+key+"></tr>");
            var tdName = $("<td></td>").html(prod.name);
            var less = $("<button type='button'>-</button>").click(function() {
                var dataId = $(this).parent().parent().data('id');
                console.log(panier_json[dataId]);
                if (panier_json[dataId] > 1) {
                    panier_json[dataId]--
                    var upanier = JSON.stringify(panier_json)
                    sessionStorage.setItem("panier", upanier)
                }
                generateCart();
            });
            var qty = $("<span class='quantity'></span> ").html(panier_json[key]);
            var more = $("<button type='button'>+</button>").click(function() {
                var dataId = $(this).parent().parent().data('id');
                panier_json[dataId]++
                var upanier = JSON.stringify(panier_json)
                sessionStorage.setItem("panier", upanier)

                generateCart();
            });

            var delet = $('<button type="button" name="button" class="delete">' + '<i class="fa fa-trash" aria-hidden="true"></i>' + '</button>').click(function() {
                var dataId = $(this).parent().parent().data('id');
                delete    panier_json[dataId]
                var upanier = JSON.stringify(panier_json)
                sessionStorage.setItem("panier", upanier)
                generateCart();
            });
            var tdQty = $("<td class='text-right'></td>").append(less, qty, more, delet);
            var uprice = $("<td></td>").addClass("uprice");
            uprice.html(prod.price + " €");
            var tprice = $("<td></td>").addClass('tprice');
            tprice.html(prod.price * panier_json[key] + " €");
            prodrow.append(tdName, tdQty, uprice, tprice);
            tabla.append(prodrow);
        }
        var tstotal = $("<th colspan='3'><span class='pull-right'>Sub Total</span></th>")
        var stotal = $("<th></th>").addClass("subTotal")
        var ttva = $("<th colspan='3'><span class='pull-right'>TVA 20%</span></th>")
        var tva = $("<th></th>").addClass('tva')
        var tTotal = $("<th colspan='3'><span class='pull-right'>Total</span></th>")
        var total = $("<th></th>").addClass("total")
        var trSTotal = $("<tr></tr>").append(tstotal, stotal);
        var trTva = $("<tr></tr>").append(ttva, tva);
        var trTotal = $("<tr></tr>").append(tTotal, total)
        var sum = 0;
        $('.tprice').each(function(){
            sum += parseFloat($(this).text());
        });
        stotal.html(sum.toFixed(2) + " €");
        tva.html(((sum/100) * 20).toFixed(2) + " €");
        total.html(sum + parseFloat(tva.html()) + " €");
        var btns = $("<tr><td><a href='#' class='btn btn-primary'>Continue Shopping</a></td><td colspan='3'><a href='#' class='pull-right btn btn-success'>Checkout</a></td></tr>")
        tabla.append(trSTotal, trTva, trTotal, btns);


    }

    generateCart()

});
