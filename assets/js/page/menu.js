$(document).ready(function () {
    $('.edit_menu').on('click', function () {
        var id = $(this).data('id');
        $.ajax({
            url: BASE_URL + 'function_menu/get_modal',
            data: { id_menu: id },
            cache: false,
            method: 'post',
            dataType: 'JSON',
            success: function (data) {
                // console.log(data);
                $("#nama_menu").val(data.nama);
                $("#id_menu").val(data.id_menu);
                $("#display_gambar").attr('src', BASE_URL + 'data/' + data.gambar);
                $('#harga').val(data.harga);
            }
        });
    });




});