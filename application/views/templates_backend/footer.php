  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="http://gainztech.my.id">GainzTech</a>.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url()?>assets/backend/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url()?>assets/backend/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()?>assets/backend/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url()?>assets/backend/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url()?>assets/backend/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url()?>assets/backend/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url()?>assets/backend/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url()?>assets/backend/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url()?>assets/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url()?>assets/backend/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url()?>assets/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/backend/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()?>assets/backend/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>assets/backend/dist/js/demo.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url()?>assets/backend/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url()?>assets/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url()?>assets/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo base_url()?>assets/backend/plugins/chartjs/Chart.min.js"></script>

<script>
    $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
  $(function () {

    $('#kolom').change(function(){
      var id = $(this).val();
      $.ajax({
        url : "<?php echo base_url()?>dashboard/get_kolom",
        method : "POST",
        data : {id : id},
        async : false,
        dataType : 'json',
          success : function(data){
            var html = '';
            var i;
            
            for (i = 0;  i < data.length; i++) {
              html += '<option>'+data[i].suhu+'</option>';
              html += '<option>'+data[i].ph+'</option>';
              html += '<option>'+data[i].turbidity+'</option>';
              html += '<option>'+data[i].oxigen+'</option>';
            }
            $('.suhu').html(html);
            $('.ph').html(html);
            $('.turbidity').html(html);
            $('.oxigen').html(html);
          }
      })
    });

   // chartjs
    // PH
    var ctx = document.getElementById('chartph').getContext('2d');
    var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: [ 
          <?php foreach($ph as $p) :?>
           <?php echo date_format(date_create($p->tanggal),'d-m-Y');?>,
          <?php endforeach; ?>
        ],
        datasets: [
          {
            label: 'Statk PH',
            data: [
              <?php foreach($ph as $p) :?>
                <?php echo $p->ph;?>,
              <?php endforeach; ?>
            ],
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            lineTension : 0,
            pointRadius : 5,
            fill : false,
          },{
            label: 'Statk Oxigen',
            data: [
              <?php foreach($oxigen as $ox) :?>
                <?php echo $ox->oxigen;?>,
              <?php endforeach; ?>
            ],
            backgroundColor: '#36a2eb',
            borderColor: '#36a2eb',
            lineTension : 0,
            pointRadius : 5,
            fill : false,
          },{
            label: 'Statk turbidity',
            data: [
              <?php foreach($turbidity as $tb) :?>
                <?php echo $tb->turbidity;?>,
              <?php endforeach; ?>
            ],
            backgroundColor: '#ffcd56',
            borderColor: '#ffcd56',
            lineTension : 0,
            pointRadius : 5,
            fill : false,
          },{
            label: 'Statk Suhu',
            data: [
              <?php foreach($suhu as $sh) :?>
                <?php echo $sh->suhu;?>,
              <?php endforeach; ?>
            ],
            backgroundColor: '#4bc0c0',
            borderColor: '#4bc0c0',
            lineTension : 0,
            pointRadius : 5,
            fill : false,
          }
        ]
    },

    // Configuration options go here
    options: {}
});

    // /function
  });  
</script>
</body>
</html>