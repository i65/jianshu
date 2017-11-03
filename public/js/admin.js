/**
 * Created by Administrator on 2017/11/2.
 */
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
    }
});
$('.post-audit').click(function(event){
   var target = $(event.target);
   var post_id = target.attr('post-id');
   var status = target.attr('post-action-status');

   $.ajax({
      url : '/admin/posts/' + post_id + '/status',
       method : 'POST',
       data : { 'status' : status, 'id' : post_id },
       dataType : 'json',
       success : function(data){
          alert(data);
          if(data.error != 0){
              alert(data.msg);
              return;
          }
          target.parent().parent().remove();
       },
       error:function(err){
           console.log(err);
       }

   });
});