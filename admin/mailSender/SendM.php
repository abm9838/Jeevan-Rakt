<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    <title>Send</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>
<body>
    <input id="val" value="BY56R" style="display:none;">
    <button id="send">Send</button>
</body>

<script>
   $(document).ready(function() {

       $("#send").click(function (){
            var val = $("#val").val();
            //alert(val);
            var varData = 'Id='+val;

            $.ajax({
                type : 'POST',
                url : 'sendM2.php',
                data : varData,
                success : function(res){
                    alert(res);
                }
            });
       });
   });
</script>
</html>