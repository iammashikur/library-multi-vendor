
<script src="{{url('/assets')}}/plugins/jQuery/jquery.min.js"></script>
<script src="{{url('/assets')}}/plugins/bootstrap/js/popper.min.js"></script>
<script src="{{url('/assets')}}/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="{{url('/assets')}}/plugins/bootstrap/js/bootstrap-slider.js"></script>

<script src="{{url('/assets')}}/plugins/tether/js/tether.min.js"></script>
<script src="{{url('/assets')}}/plugins/raty/jquery.raty-fa.js"></script>
<script src="{{url('/assets')}}/plugins/slick-carousel/slick/slick.min.js"></script>
<script src="{{url('/assets')}}/plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="{{url('/assets')}}/plugins/fancybox/jquery.fancybox.pack.js"></script>
<script src="{{url('/assets')}}/plugins/smoothscroll/SmoothScroll.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@include('sweetalert::alert')

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="{{url('/assets')}}/plugins/google-map/gmap.js"></script>
<script src="{{url('/assets')}}/js/script.js"></script>
@stack('scripts')
