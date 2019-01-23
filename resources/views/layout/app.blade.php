<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title')</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Wish shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<style>

    /* STYLES FOR POPUP ALERT MESSAGES MARKUP */
    .custom-alert{
        position: fixed;
        width:100%;
        text-align:center;
        z-index: 9999;
    }
</style>

@yield('custom-styles')

</head>
<body>

@yield('main-body')


	

<!--important js scripts--->    
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('js/checkout_custom.js')}}"></script>
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('plugins/colorbox/jquery.colorbox-min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

<!---custom script for checkout page--->
<script>
    $('.cart_total_button').click(function(){
        $('#checkout_form').submit();
    });
</script>
<script>
  //Close alert for bootstrap notifications
    $('.page-alert .close').click(function(e) {
        e.preventDefault();
        $(this).closest('.page-alert').slideUp();
    });

    //slide up dimissible alert for basic pages
    $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
        $(".alert-success").slideUp(300);
    });
    $(".alert-error").fadeTo(2000, 500).slideUp(500, function(){
        $(".alert-error").slideUp(300);
    });
</script>
</body>
</html>