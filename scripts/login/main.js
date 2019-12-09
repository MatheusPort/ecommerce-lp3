function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

function validateUser(username) {
    if (username != "") {
        return true;
    } else {
        return false;
    }
}

function validatePasswordRegister(password, passwordconfirm) {
    if (password == "")
        return 1;
    if (passwordconfirm == "")
        return 2;
    if (password == passwordconfirm)
        return 3;

}


function validatePasswordLogin(password, passwordconfirm) {
    if (password == "")
        return false;
    return true;
}



function validateCPF(strCPF) {
    var Soma;
    var Resto;
    Soma = 0;
    if (strCPF == "00000000000") return false;

    for (i = 1; i <= 9; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (11 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11)) Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10))) return false;

    Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11)) Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11))) return false;
    return true;
}

function logout() {
    token = sessionStorage.getItem("token");
    $.ajax({
        type: 'POST',
        url: 'https://floating-sands-83864.herokuapp.com/logout',
        headers: { "x-access-token": token },
        data: '{}',
        success: function (data) { },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert(XMLHttpRequest.responseJSON.message);
        },
        contentType: "application/json",
        dataType: 'json'
    });
}

function login(data, infos) {

    var user = infos[0];
    var pass = infos[1];

    var token = data.token;

    console.log("Token" + token);

    $.ajax({
        method: "POST",
        url: "https://floating-sands-83864.herokuapp.com/login",
        headers: { "x-access-token": data.token },
        data: {
            "username": "" + user,
            "password": "" + pass
        },
        success: function (data) {

            sessionStorage.setItem("username", data.username);
            sessionStorage.setItem("email", data.email);
            sessionStorage.setItem("firstName", data.firstName);
            sessionStorage.setItem("lastName", data.lastName);
            sessionStorage.setItem("cellPhone", data.cellPhon);
            sessionStorage.setItem("identityDocument", data.identityDocument);
            sessionStorage.setItem("legalDocument", data.legalDocumen);
            sessionStorage.setItem("genre", data.genre);
            sessionStorage.setItem("birthday", data.birthday);
            sessionStorage.setItem("token", token);

            alert("Logado com sucesso!"); window.location.href = "index.php";  /* + sessionStorage.getItem("username")*/;
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert(XMLHttpRequest.responseJSON.message);
        },
    })
}


function gettokenandlogin(infos) {
    $.ajax({
        type: 'GET',
        url: 'https://floating-sands-83864.herokuapp.com/token/generate',
        data: '{}',
        success: function (data) { login(data, infos) },
        contentType: "application/json",
        dataType: 'json'
    });
}


function validatelogin() {
    var user = $("#user").val();
    var password = $("#password").val();


    var usersituation = false;
    var passsituation = false;
    if (user == null) {
        alert("Usuario vazio ou inválido.");
    } else {
        usersituation = true;
    }
    if (!validatePasswordLogin(password)) {
        alert("Você precisa inserir sua senha.");
    } else {
        passsituation = true;
    }

    if (usersituation == true && passsituation == true) {
        var infos = [user, password]
        gettokenandlogin(infos);
    }
    return false;
}


function validateforget() {
    var email = $("#email").val();

    if (validateEmail(email)) {
        alert("Email válido.");
    } else {
        alert("Email vazio ou inválido.");
    }
    return false;
}

function validatedate(dateText) {
    if (dateText) {
        try {
            var errorMessage = "";
            var splitComponents = dateText.value.split('/');
            if (splitComponents.length > 0) {
                var day = parseInt(splitComponents[0]);
                var month = parseInt(splitComponents[1]);
                var year = parseInt(splitComponents[2]);

                if (isNaN(day) || isNaN(month) || isNaN(year)) {
                    errorMessage = "The day, month and year need to be numbers";
                    alert(errorMessage);
                    return false;
                }

                if (day <= 0 || month <= 0 || year <= 0) {
                    errorMessage = "The day, month and year need to be positive values greater than 0";
                }

                if (month > 12) {
                    errorMessage = "The month cannot be greater than 12.";
                }

                if (errorMessage == "") {
                    // assuming no leap year by default
                    var daysPerMonth = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
                    if (year % 4 == 0) {
                        // current year is a leap year
                        daysPerMonth[1] = 29;
                    }

                    if (day > daysPerMonth[month - 1]) {
                        errorMessage = "Number of days are more than those allowed for the month";
                    }
                }
            } else {
                errorMessage = "Please enter the date in dd/mm/yyyy format";
            }

            if (errorMessage) {
                alert(errorMessage);
                return false;
            }
        } catch (e) {
            alert(e);
            return false;
        }
    }

    return true;
}



function register(data, infos) {
    //console.log("user : " + infos[0] + " email: " + infos[1] + " password : " + infos[8] + " firstName: " + infos[2] + " lastName: " +  infos[3] + " cellPhone: " + infos[4] + " identityDocument:  " + infos[6] + " legalDocument: " + infos[5] + " birthday: " + infos[7] + "genre: " + infos[9])  
    var user = infos[0];
    var mail = infos[1]
    var pass = infos[8];
    var fname = infos[2];
    var lname = infos[3];
    var cphone = infos[4];
    var idocument = infos[6];
    var ldocument = infos[5];
    var bniver = infos[7];
    var gner = infos[9];

    var token = data.token;

    $.ajax({
        method: "POST",
        url: "https://floating-sands-83864.herokuapp.com/register",
        headers: { "x-access-token": data.token },
        data: {
            "username": "" + user,
            "email": "" + mail,
            "password": "" + pass,
            "firstName": "" + fname,
            "lastName": "" + lname,
            "cellPhone": "" + cphone,
            "identityDocument": "" + idocument,
            "legalDocument": "" + ldocument,
            "birthday": "" + bniver,
            "genre": "" + gner
        },
        success: function (data) { alert("Cadastrado com sucesso!"); logout(); },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert(XMLHttpRequest.responseJSON.message);
        },
    })
}

function getFormattedDate(date) {
    var year = date.getFullYear();

    var month = (1 + date.getMonth()).toString();
    month = month.length > 1 ? month : '0' + month;

    var day = date.getDate().toString();
    day = day.length > 1 ? day : '0' + day;

    return day + '/' + month + '/' + year;
}


function gettokenandregister(infos) {
    $.ajax({
        type: 'GET',
        url: 'https://floating-sands-83864.herokuapp.com/token/generate',
        data: '{}', // or JSON.stringify ({name: 'jonas'}),
        success: function (data) { register(data, infos) },
        contentType: "application/json",
        dataType: 'json'
    });
}


function validateregister() {
    var username = $("#user").val();
    var email = $("#email").val();
    var nome = $("#firstname").val();
    var sobrenome = $("#secondname").val();
    var telefone = $("#cellphone").val();
    var cpf = $("#cpf").val();
    var rg = $("#rg").val();
    var date = new Date($("#date").val());
    var password = $("#password").val();
    var passwordconfirm = $("#passwordconfirm").val();
    var genre = $("#genre").val();
    var confirmado = true;
    var dateconvert = getFormattedDate(date);
    var datefine = dateconvert.toString();

    if (email != "") {
        //   alert("Email válido.");
    } else {
        confirmado = false;
        alert("Email vazio ou inválido.");
    }


    if (username != "") {
        //  alert("Usuário válido.")
    } else {
        confirmado = false;
        alert("Usuário inválido.")
    }

    if (nome != "") {
        //  alert("Nome válido.")
    } else {
        confirmado = false;
        alert("Nome inválido")
    }

    if (sobrenome != "") {
        //  alert("Sobrenome válido.")
    } else {
        confirmado = false;
        alert("Sobrenome inválido")
    }

    if (rg.length != 10) {
        confirmado = false;
        alert("RG inválido.")
    } else {
        //    alert("RG válido.")      
    }

    if (telefone.length != 11) {
        confirmado = false;
        alert("Telefone inválido.")
    } else {
        //  alert("Telefone válido.")      
    }


    if (datefine != null) {
        //  alert("Data válida.")
    } else {
        confirmado = false;
        alert("Data inválida.")
    }

    if (validatePasswordRegister(password, passwordconfirm) == 1) {
        confirmado = false;
        alert("Você precisa inserir uma senha.")
    }
    else if (validatePasswordRegister(password, passwordconfirm) == 2) {
        confirmado = false;
        alert("Você precisa confirmar sua senha.")
    }

    // if(validateCPF(cpf)){
    if (cpf.length == 11) {
        //  alert("CPF válido.")
    }
    else {
        confirmado = false;
        alert("CPF inválido.")
    }



    if (confirmado == true) {
        var infos = [username.toString(), email.toString(), nome.toString(), sobrenome.toString(), telefone.toString(), cpf.toString(), rg.toString(), dateconvert.toString(), password.toString(), genre.toString()]
        gettokenandregister(infos);
        // register(token);      
    }



    return false;
}



$("#validateregister").on("click", validateregister);
$("#validatelogin").on("click", validatelogin);
$("#validateforget").on("click", validateforget);



