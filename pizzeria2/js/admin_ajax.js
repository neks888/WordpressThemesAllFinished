$ = jQuery.noConfilct();


$(document).ready(function () {
    $('.remove_reservation').on("click", function (e) {
        e.preventDefault();
        var id = $(this).attr("data-reservation");

        $.ajax({
            type: "post",
            data: {
                action: "lapizzeria_delete_reservation",
                id: id,
                type: "delete"
            },
            url: admin_ajax.ajax_url,
            success: function (data) {
                var result = JSON.parse(data);

                if (result.response == "success") {
                    jQuery("[data-reservation='" + result.id + "']").parent().parent().remove();
                    alert("Reservation Removed");
                }
            }
        });
    })
})