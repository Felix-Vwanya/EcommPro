<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style>

        * {
    /* Change your font family */
    font-family: sans-serif;
         }

    .product-form-container {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        width: 100%;
        padding: 30px;
        text-align: center;
    }

    .product-form-container h2 {
        text-align: center;
        margin-bottom: 20px;
        font-size: 40px;
        padding-bottom: 40px;
        color: black;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 15px;
        font-weight: bold;
        color: black;
        text-align: left;
        font-size: 15px;
    }

    .form-group input, 
    .form-group textarea, 
    .form-group select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
        color: black;
    }

    .form-group textarea {
        resize: vertical;
        height: 100px;
    }

    .form-group input[type="file"] {
        padding: 5px;
    }

    .submit-btn {
        width: 100%;
        background-color: #28a745;
        color: #fff;
        border: none;
        padding: 10px;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }

    .submit-btn:hover {
        background-color: #218838;
    }

    .form-group select {
        cursor: pointer;
        color: black;

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
    <div class="product-form-container">
        <h2>Add New Product</h2>
        <form action="{{url('add_product')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Product Title</label>
                <input type="text" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="description">Product Description</label>
                <textarea id="description" name="description" required></textarea>
            </div>

            <div class="form-group">
                <label for="image">Product Image</label>
                <input type="file" id="image" name="image" accept="image/*" required>
            </div>

            <div class="form-group">
                <label for="price">Product Price ($)</label>
                <input type="number" id="price" name="price" min=0  step="0.01" required>
            </div>
            
            <div class="form-group">
                <label for="quantity">Product Quantity </label>
                <input type="number" id="quantity" name="quantity" min=0 step="1" required>
            </div>

            <div class="form-group">
                <label for="discount_price">Discount Price ($)</label>
                <input type="number" id="discount_price" name="discount_price" min=0  step="0.01">
            </div>

            <div class="form-group">
                <label for="category">Product Category</label>
                <select id="category" name="category" required>
                    <option value="">Select a Category</option>
                    @foreach ($category as $category)
                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="submit-btn">Add Product</button>
        </form>
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