<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>About - Shop At Vel's</title>

     <!-- head content-->
	@include('head') 

  </head>

  <body>
	<!-- nav content-->
	@include('nav') 

    <!-- Page Content -->
    <div class="container">

      <div class="row">

		<!--categories-->
        @include('categories')
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          

          <div class="row">

            <div class="col-lg-8 col-md-8 mb-12">
              <h3>About Vel's Shop</h3>
            </div>

            

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- footer content-->
	@include('footer') 
   
   
    
	 
  </body>

</html>
