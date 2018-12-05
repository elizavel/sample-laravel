<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop At Vel's</title>

    <!-- Bootstrap core CSS -->
    <link href="{!! URL::to('vendor/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{!! URL::to('css/shop-homepage.css') !!}" rel="stylesheet">

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

          <!--carousel-->
		  @include('carousel')

          <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="{!! asset('images/Bita-IT8000-2D-Data-Collector.jpg') !!}" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Bita IT8000 2D Data Collector</a>
                  </h4>
                  <h5>&#8369; 45,000.00</h5>
                  <p class="card-text">With Stylus, Battery, USB Cable, Power Supply. Software not included</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="{!! asset('images/Cash-Drawer.jpg') !!}" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Poseidon Cash Drawer</a>
                  </h4>
                  <h5>&#8369; 3,500.00</h5>
                  <p class="card-text">5 bills 8 coins, RJ-11 interface</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="{!! asset('images/Datalogic-2200VS-Vertical-Scanner.jpg') !!}" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Datalogic 2200VS Vertical Scanner</a>
                  </h4>
                  <h5>&#8369;23,000.00</h5>
                  <p class="card-text">RS232 / Serial</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="{!! asset('images/Epson-T82-Thermal-Receipt-Printer.jpg') !!}" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Epson Thermal Receipt Printer</a>
                  </h4>
                  <h5>&#8369; 12,000.00</h5>
                  <p class="card-text">USB, color Black</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="{!! asset('images/Zebex-Z3250BT-Cordless-CCD-Portable-Scanner.jpg') !!}" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Zebex Z3250BT Scanner</a>
                  </h4>
                  <h5>&#8369; 8,000.00</h5>
                  <p class="card-text">Cordless CCD Portable Scanner</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="{!! asset('images/Zebex-Z9000-Data-Collector.jpg') !!}" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Zebex Z9000 Data Collector</a>
                  </h4>
                  <h5>&#8369; 20,000.00</h5>
                  <p class="card-text">DOS OS, with software</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Shop At Vel's</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{!! URL::to('vendor/jquery/jquery.min.js') !!}"></script>
    <script src="{!! URL::to('vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

  </body>

</html>
