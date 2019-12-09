window.onload = function () {
    pegarcategorias();
    pegarprodutosdefault();
};

function pegarprodutosdefault() {

    $.ajax({
        type: 'GET',
        url: 'https://floating-sands-83864.herokuapp.com/product?search=chopp',
        //headers: {"x-access-token": token},
        data: '{}',
        success: function (data) {


            var data_length = data.length;
            for (var i = 0; i < data_length; i++) {
                var image = data[i]["images"][0]["url"];
                var description = data[i]["description"];
                var price = data[i]["salePrice"];
                var id = data[i]["_id"];
                var field = `<div class="mt-3 mb-4" style="float: left; margin-left : 15px"> <div class= "card" style="width: 18rem;"><img class="card-img-produtos" src="${image}" alt="${description}"> <div class="card-body"><h5 class="card-title">${description}</h5><p class="card-text">R$${price}</p><a href="#" id="${id}" class="btn btn-dark btn_buy" style="margin-left : 65px">Comprar</a></div></div></div>`

                $('#products').append(field);
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert(XMLHttpRequest.responseJSON.message);
        },
        contentType: "application/json",
        dataType: 'json'
    });
}

function pegarcategorias() {


    //token = sessionStorage.getItem("token");
    $.ajax({
        type: 'GET',
        url: 'https://floating-sands-83864.herokuapp.com/category?search=chopp',
        //headers: {"x-access-token": token},
        data: '{}',
        success: function (data) {
            var data_length = data.length;
            for (var i = 0; i < data_length; i++) {
                data[i]["_id"]
                $('#category').append(`<option value="${data[i]["_id"]}"> ${data[i]["description"]} </option>`);
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert(XMLHttpRequest.responseJSON.message);
        },
        contentType: "application/json",
        dataType: 'json'
    });
}


function pegarprodutos() {

    var option = ($("#category option:selected").text());
    option = option.slice(1);
    option = option.slice(0, -1);

    var urlget = "https://floating-sands-83864.herokuapp.com/product?search=" + option;


    $.ajax({
        type: 'GET',
        url: urlget,
        //headers: {"x-access-token": token},
        data: '{}',
        success: function (data) {
            var data_length = data.length;
            for (var i = 0; i < data_length; i++) {
                var image = data[i]["images"][0]["url"];
                var description = data[i]["description"];
                var price = data[i]["salePrice"];
                var id = data[i]["_id"];
                var field = `<div class="mt-3 mb-4" style="float: left; margin-left : 15px"> <div class= "card" style="width: 18rem;"><img class="card-img-produtos" src="${image}" alt="${description}"> <div class="card-body"><h5 class="card-title">${description}</h5><p class="card-text">R$${price}</p><a href="#" id="${id}" class="btn btn-dark btn_buy" style="margin-left : 65px">Comprar</a></div></div></div>`

                $('#products').append(field);
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert(XMLHttpRequest.responseJSON.message);
        },
        contentType: "application/json",
        dataType: 'json'
    });
}

$('#category').on('change', function () {
    var isDirty = !this.options[this.selectedIndex].defaultSelected;

    if (isDirty) {
        $('#products').empty();
        pegarprodutos();
    }
});


