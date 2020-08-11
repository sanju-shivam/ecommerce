<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="form-group">
		<input type="text" name="Category" id="category" placeholder="Enter product Name" >
		<div id="productlist"></div>
   </div>
   {{ csrf_field() }}
</body>
</html>

<script>
$(document).ready(function(){

 $('#productname').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         //alert(_token);
         $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
            console.log(data);
            
            $('#productlist').fadeIn();  
            $('#productlist').html(data);
          }
         });
        }
    });
});
// $("#productname").click(function(){
//   $(".a").removeClass("visible");
// });
$("body").click(function() {
   if ($(".productlist").is(":visible")) {
       $(".productlist").hide();
   }
});

 $(document).on('click', 'li', function(){  
        $('#productname').val($(this).text());  
        $('#productlist').fadeOut();  
    });  
// window.onclick = function(event) {
//   if (event.target == productlist) {
//     productlist.style.display = "none";
//   }
// }
</script>