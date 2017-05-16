$(document).on('click', '.showModalButton', function(){
      $('#modal').modal('show')
              .find('#modalContent')
              .load($(this).attr('value'));
});
