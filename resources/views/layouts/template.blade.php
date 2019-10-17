<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/css/uikit.min.css" />
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit-icons.min.js"></script>

  </head>
  <body>
    <!-- nabvar -->
    <!-- off canvas -->
    <div id="mobile-menu" uk-offcanvas="overlay: true ; flip : true ; mode : slide ">
    <div class="uk-offcanvas-bar uk-padding-small">

        <ul class="uk-nav uk-nav-default uk-margin-top">
          @if(Auth::check())
          <li class="uk-nav-header">Admin</li>
          <li class="uk-active uk-margin-remove" ><a href="{{url('/admin/pages')}}" class="uk-button uk-text-left uk"><span uk-icon="icon : check ; "></span>  Pages</a></li>
          <li class="uk-active uk-margin-remove" ><a href="{{url('/admin/slideshow')}}" class="uk-button uk-text-left uk"><span uk-icon="icon : check ; "></span>  Banniere</a></li>
          <li class="uk-active uk-margin-remove" ><a href="{{url('/admin/settings')}}" class="uk-button uk-text-left uk"><span uk-icon="icon : check ; "></span>  Parametres</a></li>
          <li class="uk-active uk-margin-remove" ><a  class="uk-button uk-text-left logout"><span uk-icon="icon : check ; "></span>  Logout</a></li>
          <li class="uk-nav-divider"></li>
          @endif

            <li class="uk-active uk-margin-remove" ><a href="{{url('/')}}" class="uk-button uk-text-left uk"><span uk-icon="icon : home ; "></span>  Acceuil</a></li>
            <li class="uk-active uk-margin-remove" ><a href="{{url('/about-us')}}" class="uk-button uk-text-left uk"><span uk-icon="icon : info ; "></span>  A Propos</a></li>
            <li class="uk-active uk-margin-remove" ><a href="{{url('/contact-us')}}" class="uk-button uk-text-left uk"><span uk-icon="icon : question ; "></span>  Contactez Nous</a></li>
        </ul>
        <hr class="uk-divider-small">
        <div class="uk-text-meta uk-text-small">
          <span uk-icon="icon :receiver"></span> <span> 666 000 000</span>,
          <span uk-icon="icon :mail"></span> <span>infos@abadrec.com</span>
        </div>
        <h4 class="uk-heading-divider uk-text-center"><span uk-icon="icon :social"></span> Suivez Nous</h4>
        <div class="uk-text-center uk-paddin-small">
          <a href="#" class="uk-button-default uk-padding-small uk-border-rounded uk-box-shadow-small"><span uk-icon="facebook"></span></a>
          <a href="#" class="uk-button-default uk-padding-small uk-border-rounded uk-box-shadow-small"><span uk-icon="twitter"></span></a>
          <a href="#" class="uk-button-default uk-padding-small uk-border-rounded uk-box-shadow-small"><span uk-icon="instagram"></span></a>
        </div>
        <hr class="uk-divider-small">
        <p>Copyright &copy; Designed by <a href="https://smartechguinee.com">Smartech</a> </p>
    </div>
</div>
    <!-- // -->
    <div class="uk-container">

    <nav class="uk-navbar-container uk-padding-remove uk-box-shadow-small" uk-sticky style="background :#fff" uk-navbar="mode:click">

      <div class="uk-navbar-left">
        <a href="{{url('/')}}" class="uk-logo"><img src="{{asset('image/logo-3.png')}}" class="uk-margin-remove" alt=""> <span class="uk-text-small uk-text-bold uk-visible@m">ABADREC INGENIERIE</span> </a>
      </div>
      <div class="uk-navbar-right uk-hidden@l">
        <a class="uk-navbar-toggle" uk-toggle="target: #mobile-menu">
            <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
        </a>
    </div>
      <div class="uk-navbar-center uk-visible@l">
        <ul class="uk-navbar-nav">
          @if(Auth::check())
          <li>
                <a href="#">Admin</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="{{url('/admin/pages')}}">Pages</a></li>
                        <li class="uk-active"><a href="{{url('/admin/slideshow')}}">Bannier</a></li>
                        <li class="uk-active"><a href="{{url('/admin/settings')}}">Parametres</a></li>
                        <li class="uk-active"><a class="logout">Logout</a></li>
                    </ul>
                    {!!Form::open(['url'=>'/logout','id'=>'logout-form'])!!}
                    {!!Form::close()!!}
                </div>
            </li>
          @endif
          <li><a href="/#service-target" uk-scroll>Expertises</a> </li>
          <li><a href="{{url('/about-us')}}">A Propos</a> </li>
          <li><a href="{{url('/contact-us')}}">Contactez Nous</a> </li>
        </ul>
      </div>
        <div class="uk-navbar-right uk-visible@s">
            <!-- social network -->
            <ul class="uk-navbar-nav">
              <!-- <li><a href="#" class="uk-button uk-padding-small" style="background : darkblue ; color : #fff "> <span uk-icon="icon : facebook"></span> </a> </li> -->
              <li><a class="uk-button uk-padding-small uk-text-lowercase" style="background : #fff ; color : #000 "> <span uk-icon="icon : mail"> </span> <span class="uk-text-meta"> info@abadrec.com</span> </a> </li>
              <li><a class="uk-button uk-padding-small" style="background : #fff ; color : #000 "> <span uk-icon="icon : receiver;ratio:1.5"> </span> <span class="uk-text-lead"> 666 000 000</span></a> </li>
            </ul>
        </div>
    </nav>
    <!-- content -->
    <div class="">
    @yield('content')
  </div>
    <!-- // -->
    <a href="#" class="uk-button-secondary uk-padding-small uk-border-rounded to-top" style="display: none" uk-totop uk-scroll></a>
    <!-- footer -->
    <div class="uk-section uk-section-secondary uk-padding-remove uk-position-relative" style="background :rgba(255,200,0,1) ; color : #000;">
      <div class="uk-text-center">
        &copy; Copyright {{date('Y')}}
      </div>
    </div>
    <!-- // -->
    </div>
    <script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>

    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script type="text/javascript" src="{{asset('js/myscript.js')}}"></script>
    <script type="text/javascript">
      $(function () {
        $(window).scroll(function () {
          if($(this).scrollTop() > 40) {
            $(".to-top").show(300)
          } else {
            $(".to-top").hide(300)
          }
        })

        $(".logout").on("click",function () {
          $("#logout-form").submit()
        })

      })
    </script>
    @yield('scripts')
  </body>
</html>
