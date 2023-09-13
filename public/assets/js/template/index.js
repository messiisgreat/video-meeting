$(document).ready(function () {
    $("#messages_table [data-bs-toggle=modal]").click(function (e) {
        e.preventDefault();
        const id = $(e.currentTarget).attr("data-id");
        const modal_name = $(e.currentTarget).attr("data-bs-target");
        $.get(
            "/template/" + id,
            function (data, status) {
                if (status == "success") {
                    $(modal_name + " .message-content").html(data.content);
                    $(modal_name + " .modal-title").html(data.title);
                } else {

                }
            }
        )
    })
})

function del(id){
    $.ajax({
        url: '/template/'+id,
        type: 'DELETE',
        data: {
            _token : $("meta[name=csrf-token]").attr("content"),
        },
        success: function(response) {
            location.reload();
        },
        error: function(xhr, status, error) {
            alert(xhr.responseJSON.message);
        }
    });
}
function copy(id){
    $.ajax({
        url: '/template/'+id+"/copy",
        type: 'post',
        data: {
            _token : $("meta[name=csrf-token]").attr("content"),
        },
        success: function(response) {
            location.reload();
        },
        error: function(xhr, status, error) {
            alert(xhr.responseJSON.message);
        }
    });
}