</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
   <div class="pull-right hidden-xs">
      <b>Version</b> 3.0.0
   </div>
   <strong>Power Of Nutrition &copy; 2016-2018 <!--<a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.-->
</footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url(); ?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script
      src="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script
      src="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!--Este es mi escript de micarpeta-->
<?php if ($this->uri->segment(2) == 'registrarMiembro' or $this->uri->segment(2) == 'mostrarGrupos'
   or $this->uri->segment(2) == 'mostrarUsuarios') { ?>
   <script src="<?php echo base_url(); ?>micarpeta/js/jgrupo.js"></script>
<?php } ?>
<?php if ($this->uri->segment(2) == 'actualizaGrupo' or $this->uri->segment(2) == 'guardarRegistro') { ?>
   <script src="<?php echo base_url(); ?>micarpeta/js/jgrupo.js"></script>
<?php } ?>


<?php if ($this->uri->segment(2) == 'vMaterial' or $this->uri->segment(2) == 'insertMaterial'){ ?>
   <script src="<?php echo base_url(); ?>micarpeta/js/jmaterial.js"></script>
<?php } ?>
<?php if ($this->uri->segment(2) == 'vProducto' or $this->uri->segment(2) == 'insertProducto'){ ?>
   <script src="<?php echo base_url(); ?>micarpeta/js/jproducto.js"></script>
<?php } ?>
<?php if ($this->uri->segment(2) == 'listaCita' ) { ?>
   <script src="<?php echo base_url(); ?>micarpeta/js/jCita.js"></script>
<?php } ?>
<?php if ($this->uri->segment(2) == 'ListaNomina' ) { ?>
   <script src="<?php echo base_url(); ?>micarpeta/js/jnomina.js"></script>
<?php } ?>

</body>
</html>
