



$(document).ready(function(){
    

    if(sessionStorage.getItem("token") == null )
    window.location.href = "login.php";
  
    token = sessionStorage.getItem("token");   

    getadress();

}) 

function getadress(){
 
    var token = sessionStorage.getItem("token");    
    
    $.ajax({
     method: "GET",
      url: "https://floating-sands-83864.herokuapp.com/address",
      headers: {"x-access-token": token},
     data: {},
      success: function(data) {
         var data_length = data.length;
         for (var i = 0; i < data_length; i++) {
           var field = '<div class="mt-3 mb-4" style="float: left; margin-left : 15px"><div class="card" style="width: 18rem;"><div class="card-body"><h5 class="card-title">' + data[i]["description"] + '</h5><h6 class="card-subtitle mb-2 text-muted">' + data[i]["zipCode"] + '</h6><p class="card-text"> ' + data[i]["street"] + ' , '  + data[i]["complement"] +  ' , '  + data[i]["reference"] + ' , '  +  data[i]["city"] + ' , ' +  data[i]["state"] + ' , ' + data[i]["country"] + '  </p><a href="#" id=" '+ data[i]["_id"]+'" class="btn btn-primary adressremove">Remover</a></div></div></div>';              	
          
          
           $( "#founded-adress " ).append(field);
         }


    },
      error: function(XMLHttpRequest, textStatus, errorThrown) {
        alert("Oops, aconteceu algum erro :/");
     },
    })
    }

    $(document).on("click",".adressremove", function () {

        var token = sessionStorage.getItem("token");           
        var clickedBtnID = $(this).attr('id'); // or var clickedBtnID = this.id
        clickedBtnID = clickedBtnID.substr(1); 

        alert(clickedBtnID)
        
        $.ajax({
            method: "DELETE",
             url: "https://floating-sands-83864.herokuapp.com/address/" + clickedBtnID,
             headers: {"x-access-token": token},
            data: {},
             success: function(data) {
                    alert("Endereço removido com sucesso!");
                    window.location.href = "myadress.php";       
           },
             error: function(XMLHttpRequest, textStatus, errorThrown) {
               alert("Oops, aconteceu algum erro :/");
            },
           })
      });