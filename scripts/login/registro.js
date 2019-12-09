$(document).ready(function() {
    $.ajax({
        type: 'GET',
        url: 'https://floating-sands-83864.herokuapp.com/token/generate',
        data: '{}', // or JSON.stringify ({name: 'jonas'}),
        success: function(data) { console.log('data: ' + data.token); },
        contentType: "application/json",
        dataType: 'json'
    });
});
