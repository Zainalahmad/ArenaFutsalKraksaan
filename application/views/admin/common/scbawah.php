
<script src="<?php echo base_url(); ?>gudang/admin/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>gudang/admin/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>gudang/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>gudang/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>gudang/admin/bower_components/datatables.net-bs/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>gudang/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?=base_url(); ?>gudang/admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url(); ?>gudang/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?=base_url(); ?>gudang/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?=base_url(); ?>gudang/admin/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?=base_url(); ?>gudang/admin/dist/js/adminlte.min.js"></script>
<script src="<?=base_url(); ?>gudang/admin/dist/js/demo.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script src="<?php echo base_url(); ?>gudang/admin/bower_components/jquery-date/jquery.datetimepicker.full.js"></script>
<script src="<?php echo base_url(); ?>gudang/admin/bower_components/jquery-date/jquery.datetimepicker.full.min.js"></script>
<script>
  $.widget.bridge('uibutton',$.ui.button);
</script>
<script>
  $(document).ready(function() {
    $('.tanggal').datepicker({
      format:"yyyy-mm-dd",
      autoclose:true
    })
  });
</script>