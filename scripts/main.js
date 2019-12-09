
$(document).ready(function () {

  token = sessionStorage.getItem("token");

  if (token != null) {
    $("#username").html(sessionStorage.getItem("username"));
    $("#registerlogout").html("Logout");
    $('#registerlogout').removeAttr('href');
    $("#registerlogout").attr("onclick", "logout_user()");
    var field = "<a id='username' class='dropdown-item' href='myadress.php'>Meus endereços</a> ";
    $("#usercontrol").append(field)

    attcart();

  }
})

function logout_user() {

  token = sessionStorage.getItem("token");
  $.ajax({
    type: 'POST',
    url: 'https://floating-sands-83864.herokuapp.com/logout',
    headers: { "x-access-token": token },
    data: '{}',
    success: function (data) { sessionStorage.clear(); alert("O logout foi um sucesso!"); window.location.href = "index.php"; },
    error: function (XMLHttpRequest, textStatus, errorThrown) {
      alert(XMLHttpRequest.responseJSON.message);
    },
    contentType: "application/json",
    dataType: 'json'
  });
}


function addtocart(id) {

  token = sessionStorage.getItem("token");


  $.ajax({
    method: "POST",
    url: "https://floating-sands-83864.herokuapp.com/cart/addItem",
    headers: { "x-access-token": token },
    data: {
      "productId": "" + id
    },
    success: function (data) {
      alert("Adicionado com sucesso!"); /* + sessionStorage.getItem("username")*/;
      attcart();
    },
    error: function (XMLHttpRequest, textStatus, errorThrown) {
      alert(XMLHttpRequest.responseJSON.message);
    },
  })

}

function attcart() {
  $('#itens-cart').empty();

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

      $('#cart-icon').text(itens_length);

      for (var i = 0; i < itens_length; i++) {

        var idorderitem = data["commerceItems"][i]["_id"];
        var price = data["commerceItems"][i]["unit"];
        var imageitem = data["commerceItems"][i]["product"]["images"][0]["url"];
        var description = data["commerceItems"][i]["product"]["description"];

        var field = `<div style='margin-top:5px'><img class="dropdown-item" src="${imageitem}"  style='width:100px; height:75px;  float:left; border-radius: 80%;'><b>${description}</b> <br> R$${price} </br> <button id="${idorderitem}"type="button" class="btn btn-danger remove-item">Remover</button></div><div class="wrap-input100 validate-input m-b-20"></div>`

        $('#itens-cart').append(field);
      }
    },
    error: function (XMLHttpRequest, textStatus, errorThrown) {
      alert(XMLHttpRequest.responseJSON.message);
    },
    contentType: "application/json",
    dataType: 'json'
  });

}


function deletefromcart(iditemorder) {

  var token = sessionStorage.getItem("token");

  $.ajax({
    method: "DELETE",
    url: "https://floating-sands-83864.herokuapp.com/cart/deleteItem/" + iditemorder,
    headers: { "x-access-token": token },
    data: {},
    success: function (data) {
      alert("Item removido com sucesso!");
      window.location.href = "myadress.php";
    },
    error: function (XMLHttpRequest, textStatus, errorThrown) {
      alert(XMLHttpRequest.responseJSON.message);
    },
  })
}

$(document).on("click", ".remove-item", function () {
  var clickedBtnID = $(this).attr('id'); // or var clickedBtnID = this.id
  deletefromcart(clickedBtnID);
});

$(document).on("click", ".btn_buy", function () {

  if (sessionStorage.getItem("token") != null) {
    var clickedBtnID = $(this).attr('id'); // or var clickedBtnID = this.id 
    addtocart(clickedBtnID);
  } else {
    alert("Você precisa estar logado para adicionar itens no carrinho!");
  }
});