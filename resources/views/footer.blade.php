Footer start
***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
    </div>
</div>
<!--**********************************
    Footer end
***********************************-->
</div>
<!--**********************************
Main wrapper end
***********************************-->

<!--**********************************
Scripts
***********************************-->
<script src="{{url('plugins/common/common.min.js')}}"></script>
<script src="{{url('js/custom.min.js')}}"></script>
<script src="{{url('js/settings.js')}}"></script>
<script src="{{url('js/gleek.js')}}"></script>
<script src="{{url('js/styleSwitcher.js')}}"></script>
{{-- js table link --}}
<script src="{{url('//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>

<!-- Chartjs -->
<script src="{{url('./plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Circle progress -->
<script src="{{url('./plugins/circle-progress/circle-progress.min.js')}}"></script>
<!-- Datamap -->
<script src="{{url('./plugins/d3v3/index.js')}}"></script>
<script src="{{url('./plugins/topojson/topojson.min.js')}}"></script>
<script src="{{url('./plugins/datamaps/datamaps.world.min.js')}}"></script>
<!-- Morrisjs -->
<script src="{{url('./plugins/raphael/raphael.min.js')}}"></script>
<script src="{{url('./plugins/morris/morris.min.js')}}"></script>
<!-- Pignose Calender -->
<script src="{{url('./plugins/moment/moment.min.js')}}"></script>
<script src="{{url('./plugins/pg-calendar/js/pignose.calendar.min.js')}}"></script>
<!-- ChartistJS -->
<script src="{{url('plugins/chartist/js/chartist.min.js')}}"></script>
<script src="{{url('plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')}}"></script>



<script src="./js/dashboard/dashboard-1.js"></script>

</body>

</html>
