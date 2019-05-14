  
 <?php include "views/pages/admin/header.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Thêm tour</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" name="AddSale" action="#" method="post" enctype="multipart/form-data">
                <!-- text input -->
                 <!-- tour(`MaTour`, `MaLoai`, `TenTour`, `tgian`, `NoiDungTour`, `AnhTour`, `GiaNguoiLon`, `GiaTreEm`, `DiemKhoiHanh`, `NgayThem`) -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-xs-1"><label>ID:</label>
                      <input type="text" class="form-control" placeholder="" name="MaTour">
                    </div>
                    <div class="col-xs-2"><label>Tên loại tour:</label>
                      <div class="form-group">
                          <select class="form-control" name="MaLoai">
                            <?php 
                                while ($row = $result->fetch_assoc()) {
                                  $id   = $row['MaLoai']; 
                                  $name = $row['TenLoai'];
                                  echo "<option value='$id'>$name</option>";
                                }
                            ?>
                          </select>
                        </div>
                    </div>
                    <div class="col-xs-4"><label>Tiêu đề:</label>
                      <input type="text" class="form-control" placeholder="" name="TenTour">
                    </div>
                    <div class="col-xs-5"><label>Số ngày đi:</label>
                      <input type="text" class="form-control" placeholder="" name="tgian">
                    </div>
                  </div>
                </div>
                <!-- textarea -->
                <div class="form-group">
                  <label>Nội dung</label>
                  <textarea type="text" class="form-control" rows="3" placeholder="" name="NoiDungTour"></textarea>
                </div>
                <div class="box-body">
                  <div class="row">
                    <div class="col-xs-2"><label>Giá người lớn:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="" name="GiaNguoiLon">
                            <span class="input-group-addon" style="color: red">VNÐ</span>
                        </div>
                    </div>
                    <div class="col-xs-2"><label>Giá trẻ em:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="" name="GiaTreEm">
                            <span class="input-group-addon" style="color: red">VNÐ</span>
                        </div>
                    </div>
                    <div class="col-xs-3"><label>Ngày khởi hành:</label>
                      <div class="form-group">
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control pull-right" id="datepicker" name="ngaykhoihanh">
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-5"><label>Điểm khởi hành:</label>
                      <input type="text" class="form-control" placeholder="" name="DiemKhoiHanh">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File ảnh</label>
                  <input type="file" id="exampleInputFile" name="image">
                </div>
                <!-- <div class="form-group">
                  <label for="exampleInputFile">File Image Slideshow</label>
                  <input type="file" id="exampleInputFile" name="slideshow">
                </div> -->

              <button type="submit" class="btn btn-block btn-primary btn-lg" name="add_Tour">Thêm vào</button>
                

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
