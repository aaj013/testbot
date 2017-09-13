<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Chatbot-UI</title>

    </head>
    <body>
        <form id="botui_form" method="post">
          <input type="text" id="input" />
          <button type="button" id="submit" onclick="postData()">Submit</button>
        </form>
        <div id="content"></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js" ></script>
        <script>
        function postData(){
          var str = $( "#input" ).val();
          $.ajax({
            url:'{{URL::to("/bot")}}/'+str,
            type:'get',
            //dataType: "json",
            //data:str,
            success :function(data){
              $('#content').html(data);
              //alert(data);
            }
          });
        }
        $(document).ready(function(){
          $('#input').on('keypress keyup',function(e){
                if(e.keyCode==13)
                {
                    e.preventDefault();
                    postData();
                }
           });
        })
        </script>
    </body>
</html>
