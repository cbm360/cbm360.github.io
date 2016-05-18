/**
 * Created by Camron on 10/12/2014.
 */
$(function contctMe () {
    var sendgrid = new SendGrid('azure_f69adc06de05de0a4e0f8755e7815b3a@azure.com', 'TjsFy6KX00RvrSq');

    var payload   = {
        to      : 'camronbmoore@gmail.com',
        from    : $('#email').val(),
        subject : 'Saying Hi',
        text    : 'This is my first email through SendGrid'
    }

    sendgrid.send(payload, function(err, json) {
        if (err) { console.error(err); }
        console.log(json);
    });
});
