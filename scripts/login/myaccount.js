$(document).ready(function () {
    if (sessionStorage.getItem("token") == null)
        window.location.href = "login.php";

    $("#goodnews").html("Seja bem vindo " + sessionStorage.getItem("username") + "!");
})

function atualizar(infos) {
    var token = sessionStorage.getItem("token");
    console.log("Token" + token);

    $.ajax({
        method: "PATCH",
        url: "https://floating-sands-83864.herokuapp.com/user",
        headers: { "x-access-token": token },
        data: {
            "firstName": "" + infos[0],
            "lastName": "" + infos[1],
            "cellPhone": "" + infos[2],
            "identityDocument": "" + infos[3],
            "birthday": "" + infos[4],
            "genre": "" + infos[5]
        },
        success: function (data) {
            sessionStorage.setItem("firstName", infos[0]);
            sessionStorage.setItem("lastName", infos[1]);
            sessionStorage.setItem("cellPhone", infos[2]);
            sessionStorage.setItem("identityDocument", infos[3]);
            sessionStorage.setItem("birthday", infos[4]);
            sessionStorage.setItem("genre", infos[5]);
            alert("Atualizado com sucesso!"); window.location.href = "myaccount.php";
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert(XMLHttpRequest.responseJSON.message);
        },
    })
}


function attdados() {

    alert("entrou")

    var firstname = $("#firstName").val();
    var lastname = $("#lastName").val();
    var cellphone = $("#cellphone").val();
    var rg = $("#rg").val();
    var date = new Date($("#date").val());
    var genre = $("#genre").val();
    var dateconvert = getFormattedDate(date);
    var datefine = dateconvert.toString();

    var ok = true;

    if (firstname == null) {
        ok = false;
        alert("Você precisa inserir um nome");
    }

    if (lastname == null) {
        ok = false;
        alert("Você precisa inserir um sobrenome");
    }

    if (rg.length != 10) {
        confirmado = false;
        alert("RG inválido")
    }

    if (cellphone.length != 11) {
        ok = false;
        alert("Telefone inválido")
    }

    if (date == null) {
        ok = false;
        alert("Data inválida")
    }

    if (ok == true) {
        var infos = [firstname, lastname, cellphone, rg, datefine, genre]
        atualizar(infos);
    }
}

$("#attdados").on("click", attdados);
