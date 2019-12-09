$(document).ready(function () {
    if (sessionStorage.getItem("token") == null) window.location.href = "login.php";
    
    getadress();
    attcartcheckout();
})

function getadress() {
    var token = sessionStorage.getItem("token");

    $.ajax({
        method: "GET",
        url: "https://floating-sands-83864.herokuapp.com/address",
        headers: { "x-access-token": token },
        data: {},
        success: function (data) {
            var data_length = data.length;
            for (var i = 0; i < data_length; i++) {

                var id = data[i]["_id"];
                var nome = data[i]["description"];

                var o = new Option("" + nome + "", "" + id + "");
                $(o).html(nome);
                $("#adress-select").append(o);
            }

        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert(XMLHttpRequest.responseJSON.message);
        },
    })
}


function attcartcheckout() {
    token = sessionStorage.getItem("token");
    var urlget = "https://floating-sands-83864.herokuapp.com/cart";

    $.ajax({
        type: 'GET',
        url: urlget,
        headers: { "x-access-token": token },
        data: '{}',
        success: function (data) {

            var idcart = data._id;
            var itens_length = data.commerceItems.length;
            var counter = 0;
            var total = data.total;

            console.log(data)
            $('#cart-icon').text(itens_length);
            for (var i = 0; i < itens_length; i++) {

                counter++;

                var idorderitem = data["commerceItems"][i]["_id"];
                var price = data["commerceItems"][i]["unit"];
                var imageitem = data["commerceItems"][i]["product"]["images"][0]["url"];
                var description = data["commerceItems"][i]["product"]["description"];
                var imagedescription = data["commerceItems"][i]["product"]["images"][0]["description"];
                var valoritem = data["commerceItems"][i]["total"];

                var field = `<li class="list-group-item d-flex justify-content-between lh-condensed"><div><h6 class="my-0">${description}</h6><small class="text-muted">${imagedescription}</small></div><span class="text-muted">R$${valoritem}</span></li>`
                $("#itens-checkout").append(field)
            }
            $('.number-itens').text(counter);
            $('#pricetotal-checkout').html('Total (BRL): <strong>' + total + '</strong> ');

        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert(XMLHttpRequest.responseJSON.message);
        },
        contentType: "application/json",
        dataType: 'json'
    });
}


function checkoutfinish() {
    var token = sessionStorage.getItem("token");

    $.ajax({
        method: "POST",
        url: "https://floating-sands-83864.herokuapp.com/checkout/finish",
        headers: { "x-access-token": token },
        data: {},
        success: function (data) {
            alert("Pedido finalizado com sucesso!");

        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert(XMLHttpRequest.responseJSON.message);
        },
    })
}

function applypayment(infocc) {
    var token = sessionStorage.getItem("token");

    var numberOfInstallments = infocc[0];
    var cardNumber = infocc[1];
    var cardOwner = infocc[2];
    var cardExpirationDate = infocc[3] + "/" + infocc[4];
    var cvv = infocc[5];

    $.ajax({
        method: "POST",
        url: "https://floating-sands-83864.herokuapp.com/checkout/payment/select",
        headers: { "x-access-token": token },
        data: {
            "paymentMethod": "boleto",
            "numberOfInstallments": numberOfInstallments,
            "cardNumber": cardNumber,
            "cardOwner":cardOwner,
            "cardExpirationDate": cardExpirationDate,
            "cvv": cvv
        },
        success: function (data) {
            alert("Pagamento aplicado com sucesso!");
            checkoutfinish();
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert(XMLHttpRequest.responseJSON.message);
        },
    })
}

function applycheap(infos, infocc) {
    var city = infos[0];
    var state = infos[1];
    var country = infos[2];
    var number = infos[3];
    var neighborhood = infos[4];
    var street = infos[5];
    var complement = infos[6];
    var reference = infos[7];
    var zipCode = infos[8];
    var receiverName = infos[9];
    var phoneNumber = infos[10];
    var numberOfInstallments = infocc[0];
    var cardNumber = infocc[1];
    var cardOwner = infocc[2];
    var cardExpirationDate = infocc[3] + "/" + infocc[4];
    var cvv = infocc[5];

    var token = sessionStorage.getItem("token");

    applypayment(infocc);
}

function applycheapest(infos, infocc) {
    applycheap(infos, infocc);
}

function getinfoadressandgo(adress, namereceiver, infocc) {
    var token = sessionStorage.getItem("token");

    $.ajax({
        method: "GET",
        url: "https://floating-sands-83864.herokuapp.com/address/" + adress,
        headers: { "x-access-token": token },
        data: {},
        success: function (data) {
            var city = data.city;
            var state = data.state;
            var country = data.country;
            var number = data.number;
            var neighborhood = data.neighborhood;
            var street = data.street;
            var complement = data.complement;
            var reference = data.reference;
            var zipCode = data.zipCode;
            var phoneNumber = data.phoneNumber;
            var receiverName = namereceiver;
            var infos = [city, state, country, number, neighborhood, street, complement, reference, zipCode, receiverName, phoneNumber, infocc]

            applycheapest(infos, infocc);

        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert(XMLHttpRequest.responseJSON.message);
        },
    })
}


$(document).on("click", "#finish", function () {
    var confirma = true;

    var adress = $("#adress-select").val();
    var ccname = $("#cc-name").val();
    var ccnumber = $("#cc-number").val();
    var ccmonthexpiration = $("#month-expiration").val();
    var ccyearexpiration = $("#year-expiration").val();
    var cccvv = $("#cc-cvv").val();
    var namereceiver = $("#name-receiver").val();
    var ccinstalls = $("#cc-installs").val();

    if (namereceiver.length < 1) {
        confirma = false;
        alert("Você precisa inserir o nome de quem recebe o produto");
    }

    if (adress.length < 1) {
        confirma = false;
        alert("Você precisa selecionar um endereço");
    }

    if (ccname.length == 0) {
        confirma = false;
        alert("Você precisa inserir o nome do titular do cartão");
    }

    if (ccnumber.length < 14 || ccnumber.length < 16) {
        confirma = false;
        alert("Número do cartão inválido");
    }

    if (ccmonthexpiration < 1 || ccmonthexpiration > 12) {
        confirma = false;
        alert("Mês de expiração do cartão inválido");
    }

    if (ccyearexpiration < 2010 || ccyearexpiration > 2040) {
        confirma = false;
        alert("Ano de expiração do cartão inválido");
    }

    if (cccvv.length != 3) {
        confirma = false;
        alert("CVV inválido");
    }

    if (ccinstalls < 1 || ccinstalls > 12) {
        confirma = false;
        alert("O número de parcelas precisa ser de 1 a 12");
    }

    var infocc = [ccinstalls, ccnumber, ccname, ccmonthexpiration, ccyearexpiration, cccvv];

    if (confirma == true) {
        getinfoadressandgo(adress, namereceiver, infocc);
    }
    //var clickedBtnID = $(this).attr('id'); // or var clickedBtnID = this.id
});
