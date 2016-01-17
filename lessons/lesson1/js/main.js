$(document).ready(function () {

    $("#login-form").submit(function (e) {
        event.preventDefault();

        var customerLogin = $('#login').val();
        var customerPassword = $('#password').val();
        var customerEmail = $('#email').val();

        $.ajax({
            url: "/lessons/lesson1/controller/auth.php",
            type: "POST",
            data: {
                login: customerLogin,
                password: customerPassword,
                email: customerEmail
            },
            success: function (data) {
                alert("PHP ответило нам: " + data);
            }
            
        });

    });
});