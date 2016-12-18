$(document).ready(function() {
    //$(".err").css('display', 'none', 'important');
    $("#editrest").click(function() {
        id = $("#restid").val();
        name = $("#restname").val();
        info = $("#restinf").val();
        contact = $("#restcontact").val();
        avg = $("#restavg").val();
        schedule = $("#restschedule").val();
        address = $("#restaddress").val();
        categories = $("#restcat").val();

        $.ajax({
            type: "POST",
            url: "./api/editRestaurant.php",
            data: "id=" + id + "&name=" + name + "&info=" + info + "&contact=" + contact + "&avg=" + avg + "&schedule=" + schedule + "&address=" + address + "&categories=" + categories,
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