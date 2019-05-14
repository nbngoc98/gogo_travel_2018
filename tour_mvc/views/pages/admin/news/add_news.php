  
 <?php include "views/pages/admin/header.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Thêm tin tức</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" name="AddSale" action="#" method="post" enctype="multipart/form-data">
                <!-- text input -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-xs-3"><label>ID:</label>
                      <input type="text" class="form-control" placeholder="" name="MaTinTuc">
                    </div>
                    
                    <div class="col-xs-4"><label>Tiêu đề:</label>
                      <input type="text" class="form-control" placeholder="" name="TenTinTuc">
                    </div>
                    
                  </div>
                </div>
                <!-- textarea -->
                <div class="form-group">
                  <label>Nội dung</label>
                  <textarea type="text" class="form-control" rows="3" placeholder="" name="NoiDung"></textarea>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputFile">File Ảnh</label>
                  <input type="file" id="exampleInputFile" name="AnhTT">
                </div>
              

              <button type="submit" class="btn btn-block btn-primary btn-lg" name="them_tintuc">Cập nhật</button>
                

              </form>
            </div>
            <!-- /.box-body -->
          </div>        
        </div>
      </div>
    </section>
      </div>
  <!-- /.content-wrapper -->
  <?php include "views/pages/admin/footer.php" ?>
