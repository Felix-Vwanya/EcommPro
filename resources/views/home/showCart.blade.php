<!DOCTYPE html>
<html>
   <head>
    <base href="/public">
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="home/images/favicon.png" type="">
      <title>Blackbird</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }
        .h1_font {
            font-size: 24px;
            color: #333333;
            text-align: center;
            margin-bottom: 20px;
        }

        .content-table {
    border-collapse: collapse;
    margin: auto;
    margin-top: 40px;
    font-size: 0.9em;
    min-width: 400px;
    width: 80%;
    text-align: left;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
    font-weight: bold;
}

.content-table th,
.content-table td {
    padding: 12px 15px;
    color: white;
}

.content-table tbody tr {
    border-bottom: 1px solid #1a1818;
}

.content-table tbody tr:nth-of-type(even) {
    background-color: #245;
}
.content-table tbody tr:nth-of-type(odd) {
    background-color: rgb(19, 20, 20);
}
.content-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}

.img_design{
    width: 50px;
    height: 50px;
}
      </style>
   </head>
   <body>
      
         <!-- header section strats -->
           @include('home.header')
         <!-- end header section -->
         @if(session()->has('message'))
         <div class="alert alert-success">
             {{session()->get('message')}}
         </div>
        @endif
         <h1 class="h1_font">Cart Items</h1>
         <table class="content-table">
             <thead>
                 <tr>
                     <th>Product Name</td>
                     <th>Image</td>
                     <th>Price</td>
                     <th>Quantity</td>
                     <th>Action</td>
                 </tr>
             </thead>
             <tbody>
                 @foreach ($cart as $cart)
             <tr>
                 <td>
                    {{$cart->product_title}}
                 </td>
                 <td>
                     <img  class="img_design" src="product/{{$cart->image}}" alt="">
                 </td>
                 <td>
                     {{$cart->price}}
                 </td>
                 <td>
                     {{$cart->quantity}}
                 </td>
                 <td>
                     <a onclick="return confirm('Are you sure you want to delete this product?')" class="btn btn-danger" href="{{url('delete_cart_item', $cart->id)}}">Delete</a>
                 </td>
              </tr>
             @endforeach
             </tbody>
         </table>
     </div>
      
      
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="">Blackbird</a></p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>

