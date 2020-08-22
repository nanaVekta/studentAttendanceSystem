$(document).ready(function () {
    $('#send-generate').on('click',function () {
        var button = $(this);
        var  text = $('#generate-input').val();
        $.ajax({
            type: 'GET',
            url: 'generate.php?text='+text,
            beforeSend: function () {
                button.html('generating...');
            },
            success: function (data) {
                button.html('Generate');
                $('#load-code').html(data);
            }
        })
    })
});