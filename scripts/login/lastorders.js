$(document).ready(function(){
    

    if(sessionStorage.getItem("token") == null )
    window.location.href = "login.php";

    getlastorders();

}) 



function getlastorders(){
 
    var token = sessionStorage.getItem("token");    
    
    $.ajax({
     method: "GET",
      url: "https://floating-sands-83864.herokuapp.com/order",
      headers: {"x-access-token": token},
     data: {},
      success: function(data) {
         var data_length = data.length;
         for (var i = 0; i < data_length; i++) {
           var field = '<div class="mt-3 mb-4" style="float: left; margin-left : 15px"><div class="card" style="width: 18rem;"><div class="card-body" id = "'+  data[i]["_id"] +'"><h5 class="card-title"> STATUS : ' + data[i]["status"] + '</h5><h6 class="card-subtitle mb-2 text-muted"> TOTAL : R$' + data[i]["total"] + '</h6><p class="card-text"> FRETE TOTAL : ' + data[i]["freight"] +  '<br> ' + 'ID DO PEDIDO : ' +data[i]["_id"] + ' </p></div></div></div>';              	
                    
           $( "#founded-orders" ).append(field);
         }


    },
      error: function(XMLHttpRequest, textStatus, errorThrown) {
        alert("Oops, aconteceu algum erro :/");
     },
    })
    }