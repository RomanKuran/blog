
$(document).on("click", "#edit", function() {
    var object = $(this).parent().parent()[0];

    var name_message = object.getElementsByClassName('name_message')[0].innerHTML;
    var message = object.getElementsByClassName('message')[0].innerHTML;
    var id = $(object).attr("data");

    $("#id").val(id);
    $("#name_message").val(name_message);
    $("#message").val(message);
});

$(document).on("click", "#btn_edit", function() {
    var object = $(this).parent()[0];

    var id = object.getElementsByClassName('id')[0].value;
    var name_message = object.getElementsByClassName('name_message')[0].value;
    var message = object.getElementsByClassName('message')[0].value;

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: "edit",
        data: {id: id, message: message, name_message: name_message},
        success: function (response) {             
            location.reload();
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert("error");
        }
        
    });
});

$(document).on("click", "#delete", function() {
    var object = $(this).parent().parent()[0];
    var id = $(object).attr("data");

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "post",
        url: "delete",
        data: "id=" +  id,
        success: function (response) {             
            location.reload();
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert("error");
        }
        
    });
});

$(document).on("click", "#btn_insert", function() {
    var object = $(this).parent()[0];

    var name_message = object.getElementsByClassName('name_message')[0].value;
    var message = object.getElementsByClassName('message')[0].value;
    var email = object.getElementsByClassName('email')[0].value;

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: "insert",
        data: {email: email, message: message, name_message: name_message},
        success: function (response) {             
            location.reload();
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert("error");
        }
        
    });
});