<footer class="app-footer">
    <div>

        <a href="/">BMP Infology</a>

        <span>&copy; <?php echo date('Y') ?> </span>
    </div>
    <!-- <div class="ml-auto">
        <span>Powered by</span>
        <a href="https://bmpinfology.com">BMP Infology</a>
    </div> -->
</footer>
<!-- Bootstrap and necessary plugins-->
{{-- <script src="{{asset('assets/jquery/dist/jquery.min.js')}}"></script> --}}
<script src="{{ asset('js/jquery-3.3.1.js') }}"></script>

{{--for hiearchy menu--}}

<script src="{{asset('js/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.mjs.nestedSortable.js') }}"></script>
<script src="{{asset('js/flatpickr.js')}}"></script>
<script src="{{asset('assets/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/pace-progress/pace.min.js')}}"></script>
<script src="{{asset('assets/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/@coreui/coreui/dist/js/coreui.min.js')}}"></script>
<script defer src="{{asset('js/fontawesome.5.10.2.all.min.js')}}"></script>

{{--<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"--}}
{{--integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>--}}
{{--Nepali Date pciker--}}
<script src="{{ asset('js/nepali.datepicker.v2.2.min.js') }}"></script>

{{--for frontend validation--}}
{{--for selectize--}}
<script src="{{  asset('js/selectize.min.js') }}"></script>
{{--<script src="{{ asset('js/jquery.form-validator.min.js') }}"></script>--}}
<script src="{{ asset('assets') }}/js/jquery.fancybox.min.js"></script>
<script src="{{ asset('assets') }}/js/vex.combined.min.js"></script>
<script>
    $.validate({
        lang: 'en',
        modules: 'date',
        validateHiddenInputs: true,
        scrollToTopOnError: true
    });
</script>
<!-- Plugins and scripts required by this view-->
<script src="{{asset('js/customjavascript.js')}}"></script>
{{--<script src="{{asset('js/menuorder.js')}}"></script>--}}
@yield('scripts')
    </body>
</html>