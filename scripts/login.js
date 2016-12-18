$(document).ready(function() {
    $(".err").css('display', 'none', 'important');
    $("#login").click(function() {
        username = $("#username").val();
        password = $("#password").val();
        $.ajax({
            type: "POST",
            url: "./api/signin.php",
            data: "username=" + username + "&password=" + password,
            success: function(data) {
                switch (data) {
                    case 'usr inv':
                        $("#username_err").css('display', 'inline', 'important');
                        $("#username_err").html("User doesn't exist");
                        break;
                    case 'pwd inv':
                        $("#password_err").css('display', 'inline', 'important');
                        $("#password_err").html("Wrong password");
                        break;
                    case 'success':
                        //window.location.href = location.protocol + '//' + location.host + '/?content=profile';
                        window.location.href = './?content=profile';
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