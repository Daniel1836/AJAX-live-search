<!DOCTYPE html>
<html>
    <head>
          
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
