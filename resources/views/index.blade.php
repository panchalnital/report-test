<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KC report</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="container">
        
        <h1 class="text-center pt-4 ">KC report test<strong class="text-danger">Monthly Sales by Region</strong></h1>
        <hr>

        <div class="row py-2">
            <div class="col-md-6">
                
            </div>
    
            <div class="col-md-6">
                <div class="form-group">
                    <form method="get" action="/search">
                        <div class="input-group">
                            <select  class="form-control" name="search" placeholder="Search..." value="{{ isset($search) ? $search : ''}}">

                                <option value="2025">2025</option>
                                <option value="2024">2024</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>  
                            </select>      
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
                <th scope="col">number of orders</th>
                
              </tr>
            </thead>
            <tbody>

         @foreach ($stores as $post)
        
              <tr>
             
                <td>{{ $post->total_sales_amount }}</td>
                <td>{{ $post->number_of_orders }}</td>
              
              </tr>
              
             @endforeach
            </tbody>
          </table>
        
    </div>
   
</body>
</html>