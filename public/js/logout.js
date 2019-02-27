$(document).on('click', '#logout', function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax
    ({
        type: 'POST',
        url: '/logout',
        cache: flase,
        success: function()
        {
            location.reload();
        }
    });
});
