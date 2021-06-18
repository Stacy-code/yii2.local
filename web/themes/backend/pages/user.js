
$(document).ready(function (){
    $(document).on('click' , '[data-handler="deleteRow"]' , function(e){
        e.preventDefault();
        var that = $(this) , url = that.attr('href'),
            id = that.data('id');
        if(typeof url === 'string' && url.length > 0){

            $.ajax({
                method:'POST',
                url:url,
                data: {
                    id: id,
                    csrfParam: yii.getCsrfToken()
                },
                dataType: 'json',
                success: function(response){
                    if(response.success){
                        var rowEl = that.closest('tr');
                        if(rowEl.length>0){
                            $(rowEl).remove();
                        }
                    }
                }
            })

        }else {
            throw new Error('Attribute href must be set!');
        }


    })

});