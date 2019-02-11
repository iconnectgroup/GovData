<script src="//cdn.datatables.net/v/bs/dt-1.10.16/datatables.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<script src="{{ url('public/adminlte/js') }}/bootstrap.min.js"></script>
<script src="{{ url('public/adminlte/js') }}/select2.full.min.js"></script>
<script src="{{ url('public/adminlte/js') }}/main.js"></script>
<script src="{{ url('public/adminlte/js') }}/multifilter.min.js"></script>
<script src="{{ url('public/adminlte/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ url('public/adminlte/plugins/fastclick/fastclick.js') }}"></script>
<script src="{{ url('public/adminlte/js/app.min.js') }}"></script>
<script>
    window._token = '{{ csrf_token() }}';
</script>
<script>
    $(document).ready(function () {
        $('.filter').multifilter();
    })
</script>
@yield('javascript')