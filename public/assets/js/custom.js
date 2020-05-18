$( document ).ready(function() {
    $('#sorted').css("display", "none");

    $('button.sorted').on('click', function (e) {
        $('#sorted').css("display", "block");
        $('#result').css("display", "none");
    });

    $('body').on('click', 'button.result', function (e) {
        $('#sorted').css("display", "none");
        $('#result').css("display", "block");
    });
})
