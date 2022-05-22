$(document).ready(function () {
    $('.edit_user').on('click', function () {
        var id = $(this).data('id');
        console.log(id);
        $.ajax({
            url: BASE_URL + 'function_user/get_modal',
            data: { id_user: id },
            cache: false,
            method: 'post',
            dataType: 'JSON',
            success: function (data) {
                console.log(data);
                $("#username").val(data.username);
                $("#nama").val(data.nama);
                // $("#role").val(data.role);
                $('#select_role').val(data.id_role);
                $('#select2-role-container').prop('title', data.nama_role);
                $('select2-role-container').text(data.nama_role);
            }
        });
    });




});


$(document).ready(function () {
    setInterval(function () {
        $('#auto_reload').load(BASE_URL + 'user #tabel_reload');
        console.log('ok');
    }, 2000);


})
