$(function () {

    // Get the form.
    var form = $('#form-contact');

    // Get the messages div.
    var formMessages = $('#form-messages');

    // Set up an event listener for the contact form.
    $(form).submit(function (e) {
        // Stop the browser from submitting the form.
        e.preventDefault();

        // Serialize the form data.
        var formData = $(form).serialize();
        document.getElementById("submit").innerHTML = '<span class="spinner-icon"></span>';
        document.getElementById("submit").toggleAttribute('disabled', true);
        // Submit the form using AJAX.
        $.ajax({
                type: 'POST',
                url: $(form).attr('action'),
                data: formData
            })
            .done(function (response) {
                // Make sure that the formMessages div has the 'success' class.
                $(formMessages).removeClass('error');
                $(formMessages).addClass('success');
                document.getElementById("form-messages").style.display = "block";

                // Set the message text.
                $(formMessages).text(response);

                // Clear the form.
                $('#name').val('');
                $('#email').val('');
                $('#tel').val('');
                $('#message').val('');
                // document.getElementById("check-term").checked = false;
                document.getElementById("submit").innerHTML = "Enviar";
                setTimeout( function() {document.getElementById("submit").toggleAttribute('disabled', false);});
                setTimeout( function() {document.getElementById("form-messages").style.display = "none" ;}, 4000 );
                // setTimeout( function() {window.location.href = '/';});
            })
            .fail(function (data) {
                // Make sure that the formMessages div has the 'error' class.
                $(formMessages).removeClass('success');
                $(formMessages).addClass('error');

                // Set the message text.
                if (data.responseText !== '') {
                    $(formMessages).text(data.responseText);
                } else {
                    $(formMessages).text('No se obtiene ningún dato');
                    document.getElementById("submit").toggleAttribute('disabled', false);
                    document.getElementById("submit").innerHTML = "Enviar";
                }
            });
    });

});