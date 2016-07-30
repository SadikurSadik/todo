  <!-- Footer -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="well text-center copyright">
          <p>copyright &copy; <a href="">Sadikur Rahaman</a> 2016</p>
        </div>
      </div>
    </div>
  </div><!-- End Footer -->

  </div>
  <script type="text/javascript" src="/js/datatables.min.js"></script>
  <script type="text/javascript" src="/js/bootstrap-datepicker.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable();
      $('#doneTask').DataTable();
    });
    var date = new Date();
    date.setDate(date.getDate());

    $('#est_start_time').datepicker({
        startDate: date,
        format: "yyyy-mm-dd"
    });

    $('#est_end_time').datepicker({
        startDate: date,
        format: "yyyy-mm-dd"
    });

    $('#startTime').datepicker({
        startDate: date,
        format: "yyyy-mm-dd"
    });

    $('#EstEndTime').datepicker({
        startDate: date,
        format: "yyyy-mm-dd"
    });

  </script>
  @yield('footer')
  </body>

</html>