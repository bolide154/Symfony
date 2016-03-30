$('.hidden-quantity').change(function() {
quantityText = $(this).val();
idText = $(this).attr('data-id');
     $.ajax({
        type: "POST",
        url: $("#url-ajax-update-quantity").val(),
        data: {
            quantity : quantityText,
            id : idText,
        },
        success : function(response)
          {
                if(response == 0){
                    alert('Quantity is not correct!');
                }
                
          },
        error : function() 
          {
                alert('Update product error!');
          }
    });
});