<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Chatbot-UI</title>

    </head>
    <body>
        <form id="botui_form" class="form-horizontal" method="post">
          {{!csrf_token()}}
          <input type="text" id="bot" />
          <button type="button" id="submit">Submit</button>
        </form>
        <div id="content"></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js" ></script>
        <script>
        function postData(){
          var formData = $('#botui_form').serialize();
          var str = $( "#bot" ).val();
          alert(formData);
          $.ajax({
            url:'{{URL::to("/bot")}}/',
            type:'post',
            dataType: "json",
            data: formData,
            success :function(data){
              var d='';
              let obj = JSON.parse(data);
              if(obj.status.code==200){
                d += '<b>' + obj.result.fulfillment.messages[0].speech + '</b><br/>';
              }
              else{
                d += '<b> Unknown error!!! </b><br/>';
              }
              $('#content').html($('#content').html()+'<br/>'+d);
              //alert(data);
            }
          });
        }
        $(document).ready(function(){
          $('#submit').on('click',function(){
            postData();
          });
          $('#bot').on('keypress',function(e){
            if(e.keyCode==13)
            {
                e.preventDefault();
                postData();
            }
           });
        });
        </script>
    </body>
</html>
