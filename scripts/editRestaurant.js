$(document).ready(function() {
    //$(".err").css('display', 'none', 'important');
    $("#editrest").click(function() {
        name = $("#name").val();
        info = $("#inf").val();
        contact = $("#contact").val();
        avg = $("#avg").val();
        schedule = $("#schedule").val();
        address = $("#address").val();
        categories = $("#cat").val();

        $.ajax({
            type: "POST",
            url: "./api/editRestaurant.php",
            data: "name=" + name + "&info=" + info + "&contact=" + contact + "&avg=" + avg + "&schedule=" + schedule + "&address=" + address + "&categories=" + categories,
            success: function(data) {
                console.log(data);
                switch (data) {
                    case 'success':

                        break;
                    default:
                        //should never happen
                        break;
                }
            },
            beforeSend: function() {
                /*$("#add_err").css('display', 'inline', 'important');
                $("#add_err").html("<img src='images/ajax-loader.gif' /> Loading...")*/
            }
        });
        return false;
    });
});