function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

function cadastraemail(email, token) {

    var mail = email;

    $.ajax({
        method: "POST",
        url: "https://floating-sands-83864.herokuapp.com/newsletter",
        headers: { "x-access-token": token },
        data: {
            "email": "" + mail,
        },
        success: function (data) { alert("Email cadastrado com sucesso!"); },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert(XMLHttpRequest.responseJSON.message);
        },
    })
}


function removeemail(email, token) {

    var mail = email;

    console.log("token" + token);

    $.ajax({
        method: "DELETE",
        url: "https://floating-sands-83864.herokuapp.com/newsletter",
        headers: { "x-access-token": token, 'X-Requested-With': 'XMLHttpRequest' },
        data: {
            "email": "" + mail,
        },
        success: function (data) { alert("Email removido!"); },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert(XMLHttpRequest.responseJSON.message);
        },
    })
}

function validatenewsletter() {

    token = sessionStorage.getItem("token");

    if (token != null) {
        // Pegar usuário 
        $.ajax({
            type: 'GET',
            headers: { "x-access-token": token },
            url: 'https://floating-sands-83864.herokuapp.com/user',
            data: {}, // or JSON.stringify ({name: 'jonas'}),
            success: function (data) { cadastraemail(data.email, token) },
            contentType: "application/json",
            dataType: 'json'
        });

        return false;
    } else {
        alert("Você precisa fazer login para cadastrar seu email e receber nossas notícias!")
    }

}


function removenewsletter() {

    token = sessionStorage.getItem("token");

    if (token != null) {
        // Pegar usuário 
        $.ajax({
            type: 'GET',
            headers: { "x-access-token": token },
            url: 'https://floating-sands-83864.herokuapp.com/user',
            data: {}, // or JSON.stringify ({name: 'jonas'}),
            success: function (data) { removeemail(data.email, token) },
            contentType: "application/json",
            dataType: 'json'
        });

        return false;
    } else {
        alert("Você precisa fazer login para cadastrar seu email e receber nossas notícias!")
    }

}


$("#validatenews").on("click", validatenewsletter);
$("#removenews").on("click", removenewsletter);
