jQuery(document).ready(function($) {
    var cv_screen = $('#cv_screen');
    var close = $('.close')[0];

    $('.screener').on('click', function(event) {
        event.preventDefault();
        var cv_id = $(this).data('id');
        var cv;
        
        $.ajax({
            url: '/cvs/' + cv_id,
            dataType: 'json'
        })
        .done(function(data) {
            cv = data;
            fill(data);
            cv_screen.show();
        })
        .fail(function() {
            console.log("error");
        });
    });

    close.onclick = function() {
        cv_screen.hide();
    }

    $('#btn_src_approve').click(approve);
    $('#btn_src_reject').click(reject);
});

function approve(event) {
    event.preventDefault();
    var cv_id = $(this).data('id');
    $.ajax({
        url: '/cvs/updateStatus',
        type: 'PUT',
        data: {"_token": $('#_token').val(), "cv_id": cv_id, "status": "approve"}
    }).done(function(data) {
        $('#flash').html(data);
    });
}

function reject(event) {
    event.preventDefault();
    var cv_id = $(this).data('id');
    $.ajax({
        url: '/cvs/updateStatus',
        type: 'PUT',
        data: {"_token": $('#_token').val(), "cv_id": cv_id, "status": "reject"}
    }).done(function(data) {
        $('#flash').html(data);
    });
}

function fill(data) {
    $('#cv_screen').find('span#firstname').html(data.firstname);
    $('#cv_screen').find('span#lastname').html(data.lastname);
    $('#cv_screen').find('span#mobile').html(data.mobile);
    $('#btn_src_approve').data('id', data.id);
    $('#btn_src_reject').data('id', data.id);
}