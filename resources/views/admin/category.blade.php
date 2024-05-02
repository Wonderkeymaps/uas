<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">

        .div_center
        {
            text-align: center;
            padding-top: 30px; 
        }

        .h2_font{
            font-size: 30px;
            padding-bottom: 40px;
        }

        .input_color{
            color: black;
        }
    </style>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')

      <div class="main-panel">
        <div class="content-wrapper">
            <div class="div_center">
                <h2 class="h2_font">Add Category</h2>
                <form>
                    <input class="input_color" type="text" name="name" placeholder="Input Category">
                    <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                </form>
            </div>
        </div>
      </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>