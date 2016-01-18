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
                location.reload();
            }

        });

    });


    $('.logout-btt').click(function () {
        //window.location.reload = "";
        //console.log('button click');
    });


    if (navigator.cookieEnabled) {
// возвращает cookie с именем name, если есть, если нет, то undefined
        function getCookie(name) {
            var matches = document.cookie.match(new RegExp(
                    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
                    ));
            return matches ? decodeURIComponent(matches[1]) : undefined;
        }

// устанавливает cookie c именем name и значением value
// options - объект с свойствами cookie (expires, path, domain, secure)
        function setCookie(name, value, options) {
            options = options || {};

            var expires = options.expires;

            if (typeof expires == "number" && expires) {
                var d = new Date();
                d.setTime(d.getTime() + expires * 1000);
                expires = options.expires = d;
            }
            if (expires && expires.toUTCString) {
                options.expires = expires.toUTCString();
            }

            value = encodeURIComponent(value);

            var updatedCookie = name + "=" + value;

            for (var propName in options) {
                updatedCookie += "; " + propName;
                var propValue = options[propName];
                if (propValue !== true) {
                    updatedCookie += "=" + propValue;
                }
            }

            document.cookie = updatedCookie;
        }

// удаляет cookie с именем name
        function deleteCookie(name) {
            setCookie(name, "", {
                expires: -1
            })
        }
    }


});