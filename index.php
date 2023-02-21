
<!DOCTYPE html>
<html>
 <head>
  <title>Dropdown List using Jquery and Ajax</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:600px;">
   <h2 >Dropdown List using Jquery and Ajax</h2><br /><br />
   <select name="cities" id="cities" class="form-control input-lg">
    <option value="">Select cities</option>
   </select>
   <br />
   <select name="taluk" id="taluk" class="form-control input-lg">
    <option value="">Select taluk</option>
   </select>
   <br />
   <select name="village" id="village" class="form-control input-lg">
    <option value="">Select village</option>
   </select>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

 load_json_data('cities');

 function load_json_data(id, parent_id)
 {
  var html_code = '';
  $.getJSON('country_state_city.json', function(data){

   html_code += '<option value="">Select '+id+'</option>';
   $.each(data, function(key, value){
    if(id == 'cities')
    {
     if(value.parent_id == '0')
     {
      html_code += '<option value="'+value.id+'">'+value.name+'</option>';
     }
    }
    else
    {
     if(value.parent_id == parent_id)
     {
      html_code += '<option value="'+value.id+'">'+value.name+'</option>';
     }
    }
   });
   $('#'+id).html(html_code);
  });

 }

 $(document).on('change', '#cities', function(){
  var cities_id = $(this).val();
  if(cities_id != '')
  {
   load_json_data('taluk', cities_id);
  }
  else
  {
   $('#taluk').html('<option value="">Select taluk</option>');
   $('#village').html('<option value="">Select village</option>');
  }
 });
 $(document).on('change', '#taluk', function(){
  var taluk_id = $(this).val();
  if(taluk_id != '')
  {
   load_json_data('village', taluk_id);
  }
  else
  {
   $('#village').html('<option value="">Select village</option>');
  }
 });
});
</script>