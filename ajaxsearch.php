<!DOCTYPE html>
<html>
    <head>
          <link rel="stylesheet" href="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
  
      
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
        
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
          
        <title>AJAX Live Search</title>
      
             <script type="text/javascript">
            $(document).ready(function(){
                $("#search").keyup(function(){
                 
                    var searchtext = $(this).val();
                    if(searchtext!=''){
                        $.ajax({
                            url:'action.php',
                            method:'post',
                            data:{query:searchtext},
                            success:function(response){
                                $("#show-list").html(response);
                            }
                             });
                           }
                    else {
                        $("#show-list").html('');
                    }
                });
                      $(document).on('click', 'a', function(){
                    $("#search").val($(this).text());
                    $("#show-list").html('');
                    });
                });
                </script>
             </head>
    
    <body class="bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 bg-light p-4 mt-3 rounded">
                    <h4 class="text-center">Auto-complete Search</h4>
                    <form action="details.php" method="post" class="form-inline p-3">
                        <input type="text" name="search" id="search" class="form-control form-control-lg rounded-0 border-info" placeholder="Search..." style="width:80%;">
                         </form>
                    
                   <div class="col-md-5"">
                    <div id="show-list">
                        <a href="#" class="list-group-item list-group-item-action border-1"></a>
                    </div>  
                   </div>
              </div>
            </div>
        </div>
     </body>
</html>