<!doctype html>
<html lang="en">

@include('partials.header')

<body>
  <!-- WRAPPER -->
  <div id="wrapper">
    <!-- NAVBAR -->
    @include('partials.navbar')
    <!-- END NAVBAR -->
    <!-- LEFT SIDEBAR -->
    @include('partials.sidebar')
    <!-- END LEFT SIDEBAR -->
    <!-- MAIN -->
    <div class="main">
      <!-- MAIN CONTENT -->
      <div class="main-content">
        <div class="container-fluid">
          <!-- OVERVIEW -->
            <div class="panel-body">
              <div class="row">
              </div>
              </div>
            </div>
          </div>
    @yield('content')
    <!-- END MAIN -->
    <div class="clearfix"></div>
@include('partials.footer')
  </div>
  <!-- END WRAPPER -->
  <!-- Javascript -->
  @include('partials.script')
  
</body>

</html>