<html>
   <head>
      <title>Ajax Example</title>

      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>

      <script>
         $(document).ready(function(){
            $('#getRequest').click(function(){
              /* $.get('getRequest', function(data){
                  $('#dataDiv').append(data);
                  console.log(data);
               })*/
                  $.ajax({
                  type: "GET",
                  url: "getRequest",
                  data: { productID: $('#input1').val() },
                  success: function(data){
                     console.log(data);
                     $('#dataDiv').html(data);
                  }
               })
            })
         })
      </script>
   </head>

   <body> 
      <input id="input1" type="text"></input>
      <button type="button" id="getRequest">thông tin</button>
      <div id="dataDiv"></div>
   </body>

</html>
