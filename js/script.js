$(document).ready(function () {
    $('#formsavemail').submit(function (event) {
        event.preventDefault();
        var email = $('#email').val();

        $.ajax({
            method: "POST",
            url: "http://launching/",
            data: {
                zero_newsletter_email: email
            }
        }).done(function (msg) {

            $('#exampleModal').modal('hide');

            console.log('ddddd');

        })
    });
});