<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ url('assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ url('assets/img/logo-itenas.jpg') }}">
  <title>
    International Student Itenas
  </title>
  <!-- Nucleo Icons -->
  <link href="{{ url('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ url('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link rel="stylesheet" href="/assets/css/app.css">
  <link id="pagestyle" href="{{ url('assets/css/material-kit.css?v=3.0.4') }}" rel="stylesheet" />
  {{-- <link id="pagestyle" href="{{ url('assets/css/argon-dashboard.css?v=2.0.4') }}" rel="stylesheet" /> --}}
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
</head>

<body class="about-us bg-gray-200">
  @include('partials.navbar-home')
  @yield('content')
  @include('partials.footer-home')

<!--   Core JS Files   -->
<script src="{{ url('assets/js/core/popper.min.js') }}"></script>
<script src="{{ url('assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ url('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ url('assets/js/plugins/countup.min.js') }}"></script>
<script src="{{ url('assets/js/plugins/parallax.min.js') }}"></script>
<script src="{{ url('assets/js/material-kit.min.js?v=3.0.4') }}" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
{{-- <script src="https://cdn.jsdelivr.net/gh/underground-works/clockwork-browser@1/dist/toolbar.js"></script> --}}
<script>
  // get the element to animate
  var element = document.getElementById('count-stats');
  var elementHeight = element.clientHeight;

  // listen for scroll event and call animate function

  document.addEventListener('scroll', animate);

  // check if element is in view
  function inView() {
    // get window height
    var windowHeight = window.innerHeight;
    // get number of pixels that the document is scrolled
    var scrollY = window.scrollY || window.pageYOffset;
    // get current scroll position (distance from the top of the page to the bottom of the current viewport)
    var scrollPosition = scrollY + windowHeight;
    // get element position (distance from the top of the page to the bottom of the element)
    var elementPosition = element.getBoundingClientRect().top + scrollY + elementHeight;

    // is scroll position greater than element position? (is element in view?)
    if (scrollPosition > elementPosition) {
      return true;
    }

    return false;
  }

  var animateComplete = true;
  // animate element when it is in view
  function animate() {
    // is element in view?
    if (inView()) {
      if (animateComplete) {
        if (document.getElementById('state1')) {
          const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
          if (!countUp.error) {
            countUp.start();
          } else {
            console.error(countUp.error);
          }
        }
        if (document.getElementById('state2')) {
          const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
          if (!countUp1.error) {
            countUp1.start();
          } else {
            console.error(countUp1.error);
          }
        }
        if (document.getElementById('state3')) {
          const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
          if (!countUp2.error) {
            countUp2.start();
          } else {
            console.error(countUp2.error);
          };
        }
        animateComplete = false;
      }
    }
  }

  if (document.getElementById('typed')) {
    var typed = new Typed("#typed", {
      stringsElement: '#typed-strings',
      typeSpeed: 90,
      backSpeed: 90,
      backDelay: 200,
      startDelay: 500,
      loop: true
    });
  }
</script>
<script>
  if (document.getElementsByClassName('page-header')) {
    window.onscroll = debounce(function() {
      var scrollPosition = window.pageYOffset;
      var bgParallax = document.querySelector('.page-header');
      var oVal = (window.scrollY / 3);
      bgParallax.style.transform = 'translate3d(0,' + oVal + 'px,0)';
    }, 6);
  }
</script>
<script>
  // $(document).ready(function () {
  //   $('#example').DataTable();
  // });
</script>
</body>

</html>