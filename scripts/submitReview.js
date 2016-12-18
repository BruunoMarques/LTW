$(document).ready(function() {
    $("#submitreview").click(function() {
        rating = $("input[name='rating']:checked").val();
        comments = $("#comments").val();
        restid = $("#restid").val();
        $.ajax({
            type: "POST",
            url: "./api/add_review.php",
            data: "comments=" + comments + "&restid=" + restid + "&rating=" + rating,
            success: function(data) {
                console.log(data);
                switch (data) {
                    case 'success':
                        window.location.reload();
                        break;
                    default:
                        //should never happen
                        break;
                }
            },
            beforeSend: function() {

            }
        });
        return false;
    });
});