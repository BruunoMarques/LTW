$(document).ready(function() {
    $(".err").css('display', 'none', 'important');
    $("#register").click(function() {
        firstname = $("#firstname").val();
        lastname = $("#lastname").val();
        username = $("#username").val();
        password = $("#password").val();
        cpassword = $("#confirm_password").val();
        email = $("#email").val();

        $.ajax({
            type: "POST",
            url: "./api/registeruser.php",
            data: "username=" + username + "&firstname=" + firstname + "&lastname=" + lastname + "&password=" + password + "&confirm_password=" + cpassword + "&email=" + email,
            success: function(data) {
                console.log(data);
                switch (data) {
                    case 'usr exists':
                        $("#username_err").css('display', 'inline', 'important');
                        $("#username_err").html("User already exists");
                        break;
                    case 'pwd match':
                        $("#confpwd_err").css('display', 'inline', 'important');
                        $("#confpwd_err").html("Passwords don't match");
                        break;
                    case 'email exists':
                        $("#email_err").css('display', 'inline', 'important');
                        $("#email_err").html("Email already exists");
                        break;
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