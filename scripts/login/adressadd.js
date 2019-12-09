$(document).ready(function () {

    if (sessionStorage.getItem("token") == null)
        window.location.href = "login.php";
})


function addadress() {

    var zipCode = $("#zipCode").val();
    var description = $("#description").val();
    var street = $("#street").val();
    var number = $("#number").val();
    var complement = $("#complement").val();
    var phoneNumber = $("#phoneNumber").val();
    var neighborhood = $("#neighborhood").val();
    var city = $("#city").val();
    var country = $("#country").val();
    var reference = $("#reference").val();
    var state = $("#state").val();

    var confirmado = true;

    if (zipCode == null || zipCode.length < 8) {
        confirmado = false;
        alert("CEP incorreto");
    }

    if (description.length > 100 || description == null) {
        confirmado = false;
        alert("Você precisa incluir uma descrição ou respeitar o máximo de 100 caracteres");
    }
    if (street.length > 100 || street == null) {
        confirmado = false;
        alert("Rua incorreta");
    }

    if (number.length > 16 || number == null) {
        confirmado = false;
        alert("Você precisa incluir um número ou respeitar o máximo de 16 caracteres.");
    }

    if (complement.length > 100 || complement == null) {
        confirmado = false;
        alert("Você precisa incluir uma complemente ou respeitar o máximo de 100 caracteres");
    }

    if (phoneNumber.length != 11) {
        confirmado = false;
        alert("Número de telefone incorreto");
    }

    if (neighborhood.length > 100 || neighborhood == null) {
        confirmado = false;
        alert("Bairro incorreto");
    }

    if (city.length > 100 || city == null) {
        confirmado = false;
        alert("Cidade incorreta");
    }

    if (country == null) {
        confirmado = false;
        alert("País incorreto");
    }

    if (state == null) {
        confirmado = false;
        alert("Estado incorreto");
    }

    if (reference.length > 100 || reference == null) {
        confirmado = false;
        alert("Referência incorreta");
    }

    if (confirmado == true) {

        var token = sessionStorage.getItem("token");

        $.ajax({
            method: "POST",
            url: "https://floating-sands-83864.herokuapp.com/address",
            headers: { "x-access-token": token },
            data: {
                "zipCode": "" + zipCode,
                "description": "" + description,
                "number": "" + number,
                "street": "" + street,
                "complement": "" + complement,
                "phoneNumber": "" + phoneNumber,
                "neighborhood": "" + neighborhood,
                "city": "" + city,
                "country": "" + country,
                "reference": "" + reference,
                "state": "" + state
            },
            success: function (data) { alert("Cadastrado com sucesso!"); window.location.href = "myadress.php"; },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert(XMLHttpRequest.responseJSON.message);
            },
        })
    }
}