 <?php
  while ($row = $resultt->fetch_assoc()) {
      $MaSale     = $row['MaSale'];
      $title        = $row['title'];
      $tgian    = $row['tgian'];
      $noidung      = $row['noidung'];
      $gianguoilon  = $row['gianguoilon'];
      $giatreem     = $row['giatreem'];
      $ngaykhoihanh = $row['ngaykhoihanh'];
      $giokhoihanh = $row['giokhoihanh'];
      $diemkhoihanh = $row['diemkhoihanh'];
      $MaLoai       = $row['MaLoai'];
      $imageEdit    = 'public/uploads/sales/'.$row['image'];
      $image        = $row['image'];
      $imageEditt    = 'public/uploads/sales/shows/'.$row['slideshow'];
      $slideshow        = $row['slideshow'];
      $startSale        = $row['startSale'];
      $stopSale        = $row['stopSale'];
    }
 ?>

 <?php include "views/pages/admin/header.php" ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box box-warning">
              <div class="box-header with-border">
                <h3 class="box-title">Sửa tour khuyến mãi</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <form role="form" name="AddSale" action="#" method="post" enctype="multipart/form-data">
                  <!-- text input -->
                  <div class="box-body">
                    <div class="row">
                      <div class="col-xs-1"><label>ID:</label>
                        <input type="text" class="form-control" placeholder="" name="MaSale" value="<?php echo $MaSale?>">
                      </div>
                      <div class="col-xs-3"><label>Thời gian bắt đầu:</label>
                        <div class="form-group">
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker" name="startSale" value="<?php echo $startSale?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-3"><label>Thời gian kết thúc:</label>
                        <div class="form-group">
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker1" name="stopSale" value="<?php echo $stopSale?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-3"><label>Ngày khởi hành:</label>
                        <div class="form-group">
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker2" name="ngaykhoihanh" value="<?php echo $ngaykhoihanh?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-2"><label>Số ngày:</label>
                        <input type="text" class="form-control" placeholder="" name="tgian" value="<?php echo $tgian?>">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-4"><label>Loại Tour:</label>
                        <div class="form-group">
                            <select class="form-control" name="MaLoai">
                              <?php 
                                  while ($row = $result->fetch_assoc()) {
                                    $id   = $row['MaLoai']; 
                                    $selected = ($MaLoai == $id)?'selected':'';
                                    $name = $row['TenLoai'];
                                    echo "<option value='$id'>$name</option>";
                                  }
                              ?>
                            </select>
                          </div>
                      </div>
                      <div class="col-xs-8"><label>Tiêu đề:</label>
                        <input type="text" class="form-control" placeholder="" name="title" value="<?php echo $title?>">
                      </div>
                    </div>
                  </div>
                  <!-- textarea -->
                  <div class="box-body">
                    <div class="form-group">
                      <label>Nội dung</label>
                      <textarea type="text" class="form-control" rows="4" placeholder="" name="noidung" value=""><?php echo $noidung?></textarea>
                    </div>
                    <div class="row">
                      <div class="col-xs-3"><label>Giá người lớn:</label>
                          <div class="input-group">
                              <input type="text" class="form-control" placeholder="" name="gianguoilon" value="<?php echo $gianguoilon?>">
                              <span class="input-group-addon" style="color: red">VNÐ</span>
                          </div>
                      </div>
                      <div class="col-xs-3"><label>GIá trẻ em:</label>
                          <div class="input-group">
                              <input type="text" class="form-control" placeholder="" name="giatreem" value="<?php echo $giatreem?>">
                              <span class="input-group-addon" style="color: red">VNÐ</span>
                          </div>
                      </div>
                      <div class="col-xs-2"><label>Giờ khởi hành:</label>
                        <input type="text" class="form-control" placeholder="" name="giokhoihanh" value="<?php echo $giokhoihanh?>">
                      </div>
                      <div class="col-xs-4"><label>Địa điểm khởi hành:</label>
                        <input type="text" class="form-control" placeholder="" name="diemkhoihanh" value="<?php echo $diemkhoihanh?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">File ảnh</label>
                      <input type="file" id="exampleInputFile" name="image">
                      <img src="<?php  echo $imageEdit?>" width='10%'>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">File ảnh slideshow</label>
                      <input type="file" id="exampleInputFile" name="slideshow">
                      <img src="<?php  echo $imageEditt?>" width='10%'>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-block btn-primary btn-lg" name="edit_sale">Cập nhật</button>
                </form>
              </div>
              <!-- /.box-body -->
            </div>
        </div>        
      </div>
    </section>
  </div>
  <!-- Content Wrapper. Contains page content -->
  <?php include "views/pages/admin/footer.php" ?>
