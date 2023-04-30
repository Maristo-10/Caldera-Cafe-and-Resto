<!-- Right Panel -->

<script src="{{asset('calderastyle/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('calderastyle/popper.js/dist/umd')}}/popper.min.js"></script>
    <script src="{{asset('calderastyle/bootstrap/dist/js')}}/bootstrap.min.js"></script>
    <script src="{{asset('assets/js')}}/main.js"></script>





    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="calderastyle/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="calderastyle/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="calderastyle/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-demo.js"></script>


    <script src="{{asset('assets/js/dashboard.js')}}"></script>
    <script src="{{asset('assets/js/widgets.js')}}"></script>
    <script src="{{asset('calderastyle/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('calderastyle/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('calderastyle/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>


    <script src="{{asset('assets/js')}}/dashboard.js"></script>
    <script src="{{asset('assets/js')}}/widgets.js"></script>
    <script src="{{asset('calderastyle/jqvmap/dist')}}/jquery.vmap.min.js"></script>
    <script src="{{asset('calderastyle/jqvmap/examples/js')}}/jquery.vmap.sampledata.js"></script>
    <script src="{{asset('calderastyle/jqvmap/dist/maps')}}/jquery.vmap.world.js"></script>



    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
