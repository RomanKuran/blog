
$(document).on("click", "#edit", function() {
    var object = $(this).parent().parent()[0];

    var name_message = object.getElementsByClassName('name_message')[0].innerHTML;
    var message = object.getElementsByClassName('message')[0].innerHTML;
    var id = $(object).attr("data");

    $("#id").val(id);
    $("#name_message").val(name_message);
    $("#message").val(message);
});

$(document).on("click", "#delete", function() {
    var object = $(this).parent().parent()[0];
    var id = $(object).attr("data");

    $.ajax({
        url: "delete",
        type: "get",
        data: "id=" +  id,
        success: function (response) {             
            location.reload();
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert("error");
        }
        
    });
});