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

        .product {
            width: 80%;
            margin: 40px auto;
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

        .product-thumbnails {
            flex: 1;
            padding: 10px;
            display: flex;
            flex-direction: column;
        }

        .product-thumbnails img {
            width: 100%;
            margin-bottom: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .product-info {
            margin-top: 20px;
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

        .product-add-to-cart {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .quantity-input {
            width: 60px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .add-to-cart-btn {
            padding: 12px 20px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .add-to-cart-btn:hover {
            background-color: #218838;
        }

        .product-reviews {
            margin-top: 30px;
        }

        .review-item {
            background-color: #f9f9f9;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .review-item h4 {
            margin: 0;
            font-size: 18px;
            color: #333;
        }

        .review-item p {
            margin-top: 5px;
            font-size: 14px;
            color: #555;
        }

        .review-rating {
            color: #f1c40f;
        }
      </style>
   </head>
   <body>
      
         <!-- header section strats -->
           @include('home.header')
         <!-- end header section -->
      
      <div class="product">
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
                <img src="product/{{$product->image}}" alt="Main Product Image">
            </div>
            <div class="product-thumbnails">
                <img src="https://via.placeholder.com/100" alt="Thumbnail 1">
                <img src="https://via.placeholder.com/100" alt="Thumbnail 2">
                <img src="https://via.placeholder.com/100" alt="Thumbnail 3">
            </div>
        </div>

        <!-- Product Description -->
        <div class="product-info">
            <h2>Description</h2>
            <p class="product-description">{{$product->description}}</p>
        </div>

        <!-- Add to Cart Section -->
        <div class="product-add-to-cart">
            <div>
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" class="quantity-input" value="1" min="1">
            </div>
            <div>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>
        </div>

        <!-- Product Reviews -->
        <div class="product-reviews">
            <h2>Reviews</h2>

            <!-- Review 1 -->
            <div class="review-item">
                <h4>John Doe <span class="review-rating">★★★★☆</span></h4>
                <p>Great product! I love how easy it is to use and the design is very sleek. Highly recommend.</p>
            </div>

            <!-- Review 2 -->
            <div class="review-item">
                <h4>Jane Smith <span class="review-rating">★★★☆☆</span></h4>
                <p>The product is good, but I faced some issues with the delivery. Overall, I am satisfied with the purchase.</p>
            </div>
        </div>
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

