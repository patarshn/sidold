/*

$('#about-1').on('click', function() { 
    $('div.show-item').removeClass('show-item').addClass('hide-item');
    $('a.active-button').removeClass('active-button');
    $('#history').removeClass('hide-item').addClass('show-item');
    $('#about-1').addClass('active-button');
});
$('#about-2').on('click', function() { 
    $('div.show-item').removeClass('show-item').addClass('hide-item');
    $('a.active-button').removeClass('active-button');
    $('#vision').removeClass('hide-item').addClass('show-item');
    $('#about-2').addClass('active-button');
});
$('#about-3').on('click', function() { 
    $('div.show-item').removeClass('show-item').addClass('hide-item');
    $('a.active-button').removeClass('active-button');
    $('#management').removeClass('hide-item').addClass('show-item');
    $('#about-3').addClass('active-button');
});
*/

function store(url,formID){
    //$('#loading').removeClass('d-none');
    $.ajax({
        type: "POST",
        url: url,
        data: new FormData($(formID)[0]),
        dataType: 'json',
        async : true,
        contentType: false,
        processData: false,
        cache:false,
        success: function(data){
           if(data.status == 'error'){
                $('#error-message').removeClass('d-none');
                $('#error-message').html(data.message);
                $("html, body").animate({scrollTop:$("#error-message").offset().top - 50}, 500);
           }
           else if(data.status == 'success'){
                window.location.href = data.redirect;
           }     
        },
    });
    $('#loading').addClass('d-none');
}

function alertModal(message){
    $("#alertModal").modal("show");
    $("#alertModalMessage").html(message);
}

$('.rowdelete').click(function(){
    var len = $('[name="rowdelete[]"]:checked').length;
    if(len <= 0){
      $('#deletebtn').html("Delete");
    }
    else{
      $('#deletebtn').html("Delete ("+len+" data)");
    }
  });

$('#deletebtn').click(function(){
var len = $('[name="rowdelete[]"]:checked').length;
if(len <= 0){
    alertModal("Tidak ada data yang dipilih");
}
else{
    $("#deleteModal").modal("show");
}
});