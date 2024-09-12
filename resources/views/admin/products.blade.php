<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style>
        .input_color{
            color: black;
        }
        
        .h1_font {
            font-size: 24px;
            color: #333333;
            text-align: center;
            margin-bottom: 20px;
        }

        * {
    /* Change your font family */
    font-family: sans-serif;
}

.content-table {
    border-collapse: collapse;
    margin: auto;
    margin-top: 40px;
    font-size: 0.9em;
    min-width: 400px;
    width: 100%;
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
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @if(session()->has('message'))
                 <div class="alert alert-success">
                     {{session()->get('message')}}
                 </div>
                @endif
                <h1 class="h1_font">Products</h1>
                    <table class="content-table">
                        <thead>
                            <tr>
                                <th>Product Name</td>
                                <th>Descrption</td>
                                <th>Image</td>
                                <th>Price</td>
                                <th>Quantity</td>
                                <th>Category</td>
                                <th>Discount Price</td>
                                <th>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $product)
                        <tr>
                            <td>
                               <a href="{{url('update_product', $product->id)}}">{{$product->title}}</a> 
                            </td>
                            <td>
                                {{$product->description}}
                            </td>
                            <td>
                                <img src="product/{{$product->image}}" alt="">
                            </td>
                            <td>
                                {{$product->price}}
                            </td>
                            <td>
                                {{$product->quantity}}
                            </td>
                            <td>
                                {{$product->category}}
                            </td>
                            <td>
                                {{$product->discount_price}}
                            </td>
                            <td>
                                <a onclick="return confirm('Are you sure you want to delete this product?')" class="btn btn-danger" href="{{url('delete_product', $product->id)}}">Delete</a>
                            </td>
                         </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>