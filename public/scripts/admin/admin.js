$(document).ready(function(){
    $(document).on('click', '.delete', function(e){
        e.preventDefault();
        var ajaxUrl = $(this).attr('data-url');
        var id = $(this).attr('id');
        if (confirm('Вы уверены, что хотите удалить этот объект?')) {
            $.ajax({
                url: ajaxUrl,
                method:'post',
                data: { id: id, },
                success:function(result) {
                    if (result.success) {
                        var node = 'tr[id="' + result.type + '-' + result.id + '"]';
                        $(document).find(node).empty();
                    }
                }
            });
        }
    });

    //роутом указываем какую вьюшку брать
    //и инсертим результат в обертку бутстрапа
    $(document).on('click', '.update', function(){
        var ajaxUrl = $(this).attr('data-url');
        $.ajax({
            url: ajaxUrl,
            method: 'get',
            type:'json',
            success: function(result) {
                if (result.success) {
                    $(document).find('#modal-default-' + result.id + '').html(result.view);
                    $('.tags').select2();
                }
            }
        });
    });
});