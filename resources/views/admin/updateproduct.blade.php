<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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
    .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .product-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .product-title {
            font-size: 28px;
            color: #333;
        }

        .product-category {
            font-size: 14px;
            color: #888;
        }

        .product-gallery {
            display: flex;
            margin: 20px 0;
        }

        .product-main-image {
            flex: 3;
            padding: 10px;
        }

        .product-main-image img {
            width: 100%;
            border-radius: 10px;
        }

        .product-info {
            margin-top: 20px;
            color: black;

        }
        .product-info h2, .product-quantity{
            font-weight: 800;
        }
        .product-price {
            font-size: 22px;
            color: #e74c3c;
            font-weight: bold;
        }

        .product-discount-price {
            font-size: 16px;
            color: #888;
            text-decoration: line-through;
            margin-left: 10px;
        }

        .product-description {
            margin: 20px 0;
            font-size: 16px;
            color: #333;
        }

        .quantity-input {
            width: 60px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
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
                <div class="container">
                    <!-- Product Header -->
                    <div class="product-header">
                        <div>
                            <h1 class="product-title">{{$product->title}}</h1>
                            <p class="product-category">Category: {{$product->category}}</p>
                        </div>
                        <div class="product-price-section">
                            <span class="product-price">{{$product->price}}</span>
                            <span class="product-discount-price">{{$product->discount_price}}</span>
                            
                        </div>
                    </div>
            
                    <!-- Product Images -->
                    <div class="product-gallery">
                        <div class="product-main-image">
                            <img src="/product/{{$product->image}}" alt="Main Product Image">
                        </div>
                    </div>
            
                    <!-- Product Description -->
                    <div class="product-info">
                        <h2>Description</h2>
                        <p class="product-description">{{$product->description}}</p>
                        <span class="product-quantity">Quantity: {{$product->quantity}}</span>
                    </div>
                </div>
    <div class="product-form-container">
        <h2>Edit Product</h2>
        <form action="{{url('update_product_confirm', $product->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Product Title</label>
                <input type="text" id="title" name="title" required value="{{$product->title}}">
            </div>

            <div class="form-group">
                <label for="description">Product Description</label>
                <textarea id="description" name="description" placeholder="Write a description" required="" value="{{$product->description}}"></textarea>
            </div>

            <div class="form-group">
                <label for="image">Product Image</label>
                <input type="file" id="image" name="image" accept="image/*" required value="{{$product->image}}">
            </div>

            <div class="form-group">
                <label for="price">Product Price ($)</label>
                <input type="number" id="price" name="price" min=0  step="0.01" required value="{{$product->price}}">
            </div>
            
            <div class="form-group">
                <label for="quantity">Product Quantity </label>
                <input type="number" id="quantity" name="quantity" min=0 step="1" required value="{{$product->quantity}}">
            </div>

            <div class="form-group">
                <label for="discount_price">Discount Price (%)</label>
                <input type="number" id="discount_price" name="discount_price" min=0  step="0.01" value="{{$product->discount_price}}">
            </div>
            <div class="form-group">
                <label for="category">Product Category</label>
                <select id="category" name="category" required >
                    <option >Select a Category</option>
                    @foreach ($category as $category)
                    <option selected="" value="{{$product->category}}">{{$category->category_name}}</option>
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