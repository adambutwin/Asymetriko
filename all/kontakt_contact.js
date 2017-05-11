$(function () {

    $('#kontakt_contact-form').validator();

    $('#kontakt_contact-form').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            var url = "kontakt_contact.php";

            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;

                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    if (messageAlert && messageText) {
                        $('#kontakt_contact-form').find('.messages').html(alertBox);
                        $('#kontakt_contact-form')[0].reset();
                    }
                }
            });
            return false;
        }
    })
});
