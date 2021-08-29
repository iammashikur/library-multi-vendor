{{-- Common Scripts --}}

<!-- General JS Scripts -->
<script src="{{ url('/assets/admin/js/app.min.js') }}"></script>
<!-- Template JS File -->
<script src="{{ url('/assets/admin/js/scripts.js') }}"></script>
<!-- Custom JS File -->
<script src="{{ url('/assets/admin/js/custom.js') }}"></script>

{{-- Dependent Scripts --}}
@stack('scripts')
