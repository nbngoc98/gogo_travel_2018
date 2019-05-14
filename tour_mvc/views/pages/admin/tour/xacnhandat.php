 <?php include "views/pages/admin/header.php" ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Xác nhận đặt tour cho khách hàng</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="#" method="post" >
              <div class="box-body">
                <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="xacnhan" value="1" >
                      Xác nhận đặt!
                    </label>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-block btn-primary btn-lg" name="xacnhandat">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <!--/.col (right) -->
      </div>

  </div>
  <!-- /.content-wrapper -->
    <?php include "views/pages/admin/footer.php" ?>