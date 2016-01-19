$(function () {

    $('#create-article').bind("click", function (e) {
        e.preventDefault();

        var titleArticle = $('#titleArticle').val();
        var dateArticle = $('#dateArticle').val();
        var contentArticle = $('#contentArticle').val();

        $.ajax({
            url: "/admin/index.php?action=add",
            type: "POST",
            data: {
                title: titleArticle,
                date: dateArticle,
                content: contentArticle
            },
            success: function (data) {
                location.href = "/admin/index.php";
            }

        });
    });
});