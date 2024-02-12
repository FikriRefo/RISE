<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RISE | Enterprise</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('/template_3/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Additional CSS Files -->
  {{-- <link rel="stylesheet" href="{{asset('/template_3/assets/css/fontawesome.css')}}"> --}}
  <link rel="stylesheet" href="{{asset('/template_3/assets/css/templatemo-eduwell-style.css')}}">
  <link rel="stylesheet" href="{{asset('/template_3/assets/css/owl.css')}}">
  <link rel="stylesheet" href="{{asset('/template_3/assets/css/lightbox.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('/template/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/template/dist/css/adminlte.min.css')}}">

@stack('styles')
</head>

<body class="hold-transition sidebar-mini bg-white">
<!-- Site wrapper -->
<div class="wrapper bg-white">
  <!-- Navbar -->
  @include('.partial.navbar');
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <span class="brand-text font-weight-light">RISE ENTERPRISE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('/template/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> --}}

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      @include('partial.sidebar');

    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    {{-- <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>@yield('judul')</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section> --}}
    <!-- Main content -->
    <section class="content bg-white">
      @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <br>
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      Stay conected with us 
      {{-- <br>
      <a href="" class="fa fa-instagram" style="font-size: 24px"></a>
      <a href="" class="fa fa-facebook" style="font-size: 24px"></a>
      <a href="" class="fa fa-linkedin" style="font-size: 24px"></a>
      <br> --}}
    </div>
    <strong>Copyright &copy; 2024-20XX <a href="#">RISE.io</a>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('/template/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('/template/dist/js/adminlte.min.js')}}"></script>

<!-- Bootstrap core JavaScript -->

<script src="{{asset('/template_3/assets/js/isotope.min.js')}}"></script>
<script src="{{asset('/template_3/assets/js/owl-carousel.js')}}"></script>
<script src="{{asset('/template_3/assets/js/lightbox.js')}}"></script>
<script src="{{asset('/template_3/assets/js/tabs.js')}}"></script>
<script src="{{asset('/template_3/assets/js/video.js')}}"></script>
<script src="{{asset('/template_3/assets/js/slick-slider.js')}}"></script>
<script src="{{asset('/template_3/assets/js/custom.js')}}"></script>
<script>
    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
      var
      direction = section.replace(/#/, ''),
      reqSection = $('.section').filter('[data-section="' + direction + '"]'),
      reqSectionPos = reqSection.offset().top - 0;

      if (isAnimate) {
        $('body, html').animate({
          scrollTop: reqSectionPos },
        800);
      } else {
        $('body, html').scrollTop(reqSectionPos);
      }

    };

    var checkSection = function checkSection() {
      $('.section').each(function () {
        var
        $this = $(this),
        topEdge = $this.offset().top - 80,
        bottomEdge = topEdge + $this.height(),
        wScroll = $(window).scrollTop();
        if (topEdge < wScroll && bottomEdge > wScroll) {
          var
          currentId = $this.data('section'),
          reqLink = $('a').filter('[href*=\\#' + currentId + ']');
          reqLink.closest('li').addClass('active').
          siblings().removeClass('active');
        }
      });
    };

    $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
      e.preventDefault();
      showSection($(this).attr('href'), true);
    });

    $(window).scroll(function () {
      checkSection();
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous">
</script>

@stack('scripts')

</body>
</html>