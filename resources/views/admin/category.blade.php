<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style>
        .input_color{
            color: black;
        }
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            text-align: center;
        }

        .h1_font {
            font-size: 24px;
            color: #333333;
            text-align: center;
            margin-bottom: 20px;
        }

        .input_color {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        input::placeholder {
            color: #888;
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
                <div class="form-container">
                    <h1 class="h1_font">Add Category</h1>
                    <form action="{{url('add_category')}}" method="POST">
                        @csrf
                        <input type="text" class="input_color" name="category" placeholder="Write Category name">
                        <input type="submit" class="btn btn-primary" name="submit" value="Add category">
                    </form>
                
                    <table class="content-table">
                        <thead>
                            <tr>
                                <th>Category Name</td>
                                <th>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)
                        <tr>
                            <td>
                                {{$data->category_name}}
                            </td>
                            <td>
                               <a onclick="return confirm('Are you sure you want to delete category?')" class="btn btn-danger" href="{{url('delete_category', $data->id)}}">Delete</a>
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