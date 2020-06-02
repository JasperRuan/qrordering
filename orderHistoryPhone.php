<?php include 'share/phoneheader.php' ; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href ="share/orderHistoryPhone.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    
    
   
    
    <title>Hello, Cusotmer name</title>
  </head>
  
  <body>
      <div class="main">
            <!-- Editable table -->
        <div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4" style="background-color:#265CBF;color:white">历史订单</h3>
        <div class="card-body table-wrapper-scroll-y my-custom-scrollbar">
            <div id="table" class="table-editable">
            <table class="table table-bordered  table-striped text-center">
                <thead>
                <tr>
                    <th class="text-center">流水号</th>
                    <th class="text-center">时间</th>
                    <th class="text-center">桌号</th>
                    <th class="text-center">金额</th>
                    <th class="text-center">Remove</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="pt-3-half">XXX-XXX-XX</td>
                    <td class="pt-3-half" >2012-12-25 19:20</td>
                    <td class="pt-3-half" >10</td>
                    <td class="pt-3-half" >100nzd</td>
                    <td>
                    <span class="table-remove"><button type="button"
                        class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                    </td>
                </tr>
                
                <!-- This is our clonable table line -->
               
                
                </tbody>
            </table>
            </div>
        </div>
        </div>
        <!-- Editable table -->


        <div id="myModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                        确定删除该历史订单吗？
                        <div class="deleteButton">
                            <button id="delete"class="btn btn-primary" style="margin-right: 40% ; background-color: #B22222;">删除</button><button id="close" class="btn btn-primary">取消</button>
                        </div>
                </div>
            </div>
    </div>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
           
            function openModal(){
                document.getElementsByClassName("main")[0].style.display ="none"
                document.getElementsByClassName("order-detail")[0].style.display ="block"
            }
            
           
            const $tableID = $('#table');
            var modal = document.getElementById("myModal");
            $tableID.on('click', '.table-remove', function () {
                modal.style.display = "block";
                let tritem =$(this).parents('tr');
                $("#delete").on("click", function () {tritem.detach();modal.style.display = "none";})
                
                
            
        });
        var span = document.getElementsByClassName("close")[0];
        var close = document.getElementById("close");
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
        modal.style.display = "none";
        }
        close.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        }

     
     
    </script>
  </body>

</html>
<?php include 'share/footer.php' ; ?>