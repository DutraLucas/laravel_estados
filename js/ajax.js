function get_data(){
  $.ajax({
    url: "get_permission",
    method: "GET",
    success:function(e){
         $('.detail').html(e);
    },
  });
}
$(function() {
  get_data();
  $('.input').click(function(){
    var name = $('#name').val();
    var label = $('#label').val();
    var token = $("#token").val();
    $.ajax({
      headers: {'X-CSRF-TOKEN': token},
      url: "permission_insert",
      type: "POST",
      dataType: 'json',
      data:{
        'name' : name,
        'label' : label,
      },
      success:function(){
			     $("#msj-success").fadeIn();
           get_data();
           $('#name').val('');
           $('#label').val('');
		  },
    });
  });
});
