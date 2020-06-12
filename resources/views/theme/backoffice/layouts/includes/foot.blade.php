<!-- jQuery Library 
    <script type="text/javascript" src="vendors/jquery-3.2.1.min.js"></script>  -->
    <script  src=" {{ asset('assets/plugins/jquery-3.2.1.min.js') }}"></script>  
    <!--materialize js-->
    <script  src=" {{ asset('assets/backoffice/js/materialize.min.js') }}"></script>
    <!--scrollbar-->
    <script  src=" {{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script  src=" {{ asset('assets/backoffice/js/plugins.js') }}"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script  src=" {{ asset('assets/backoffice/js/custom-script.js') }}"></script>
    <!--Alertas mas responsibe-->
    
    <!--
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
-->
    <script  src=" {{ asset('assets/plugins/swal/sweetalert2.min.js') }}"></script>
    
    @include('sweetalert::alert')


    

    @yield('foot')