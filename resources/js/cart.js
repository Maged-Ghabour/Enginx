
// Self Invoking Function
(function($) {
    $('.item-quantity').on('change' , function(e){

        $.ajax({
            type: "/cart/" + $(this).data('id'),
            method: "put",
            data: {
                "quantity" : $(this).val(),
                _token : csrf_token,
            }
        });
});

})(jQuery);
