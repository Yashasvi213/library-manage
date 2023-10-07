<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>PHP AJAX CRUD using jquery</h1>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-holder">
                        <h1>Student dashboard</h1>

                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th >ID</th>
                                    <th >book name</th>
                                    <th>issue date</th>
                                    <th>duedate</th>
                            
                                    <th>Action</th>
                        
                                </tr>
                            </thead>
                            <tbody class="studentdata">
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href=""class="badge btn-info"></a>
                                        <a href=""class="badge btn-primary  "></a>
                                        <a href=""class="badge btn-danger"></a>
                                    </td>
                                </tr>
                        

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            getdata();
        });
        function getdata(){
            $.ajax({
                type: "GET",
                url: "fetch.php",
                success: function (response) {
                   $.each(response, function (key, value) { 
                    $('.studentdata').append('<tr>'+
                                    '<td>'+value['id']+'</td>\
                                    <td>'+value['bookname']+'</td>\
                                    <td>'+value['issuedate']+'</td>\
                                    <td>'+value['duedate']+'</td>\
                                    <td>\
                                        <a href=""class="badge btn-info"></a>\
                                        <a href=""class="badge btn-primary  "></a>\
                                        <a href=""class="badge btn-danger"></a>\
                                    </td>\
                                </tr>\
                    '

                    )
                
                     
                   });
                    

                }
                // calling ajax by jq ajax
            });
        }

    </script>
  </body>
</html>