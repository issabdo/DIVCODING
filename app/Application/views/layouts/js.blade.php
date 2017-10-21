<script type="text/javascript">

/*=====================================
     FOOTER
/*=====================================*/

// Close mobile menu on click
$(function(){
  $('#btnContact').on('click', function(e) {
     e.preventDefault;
     ajaxSubmit();
     });
});


function ajaxSubmit() {


var name    = $('#name').val();
var email   = $('#email').val();
var message = $('#message').val();
var token   = $("meta[name='csrf-token']").attr("content");

var data = {
             name: name,
             _token:token ,
             email: email,
             message:message
           };
var url = '{{ concatenateLangToUrl("contact-message") }}';

$.ajax({
    url: url,
    type: 'post',
    dataType: 'json',
    data: data,
    success: function(response) {
      console.log(response);
            var messages = response[0].msg;
            var htmlMessages;
            htmlMessages = '<div class="alert alert-success alert-dismissable">'+
                             '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'+
                               '<ul>'+
                                   messages+
                              ' </ul>'+
                         '</div>';
           $('#successConatct').html(htmlMessages);
           $('#errorsConatct').html('');
           $('#name').val('');
           $('#email').val('');
           $('#message').val('');
    },
    error: function(jqXHR, textStatus, errorThrown) {

           var errors = '';
           var htmlErrors;
           $.each(jqXHR.responseJSON.errors, function (key, msg) {

                 $('#'+key).parent('div').parent('div').addClass('has-error');
                errors += '  <li>'+msg[0]+'</li>';


           });
            htmlErrors = '<div class="alert alert-danger alert-dismissable">'+
                             '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'+
                               '<ul>'+
                                   errors+
                              ' </ul>'+
                         '</div>';
            $('#errorsConatct').html(htmlErrors);
            $('#successConatct').html('');
    }
});
return false;
}
</script>
