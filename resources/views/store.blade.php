<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KC report</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>
<body>

    <div class="container">
        
        <h1 class="text-center pt-4 ">KC report test<strong class="text-danger">Top Categories by Store</strong></h1>
        <hr>

        <div class="row py-2">
            <div class="col-md-6">
                
            </div>
    
            <div class="col-md-6">
                <div class="form-group">
                    <form method="get" action="/storesearch">
                        <div class="input-group">
                        <input class="form-control" type="text" name="search" id="datepicker" value="{{ isset($search) ? $search : ''}}" />
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
    
                </div>
            </div>
        </div>

        

         <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">total sales amount</th>
                <th scope="col">rank within store</th>
                
              </tr>
            </thead>
            <tbody>

         @foreach ($stores as $post)
        
              <tr>
             
                <td>{{ $post->total_sales_amount }}</td>
                <td>{{ $post->sales_rank }}</td>
              
              </tr>
              
             @endforeach
            </tbody>
          </table>
        
    </div>
   
</body>
<script>

$( "#datepicker" ).datepicker({
	// hideIfNoPrevNext: true,
    //             minDate: '-3M',
    //             maxDate: '+90D'
});

</script>
</html>