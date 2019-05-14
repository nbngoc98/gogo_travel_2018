 <?php include "views/pages/admin/header.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
          <div class="row">
  <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">danh sách tour khuyến mãi</h3>

          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
        <?php 
       
      if ($result->num_rows > 0) {
         echo"
                    <tr style='width: 100%'>
                      <th style='width: 5%'>ID</th>
                      <th style='width: 5%'>Bắt đầu</th>
                      <th style='width: 5%'>Kết thúc</th>
                      <th style='width: 5%'>Loại</th>
                      <th style='width: 10%'>Tiêu đề</th>
                      <th style='width: 8%'>Số ngày</th>
                      <th style='width: 40%'>Nội dung</th>
                      <th style='width: 15%'>Ảnh</th>
                      <th style='width: 10%'>Giá N.Lớn</th>
                      <th style='width: 10%'>Giá T.Em</th>
                      <th style='width: 20%'>Ngày đi</th>
                      <th style='width: 8%'>Thời gian</th>
                      <th style='width: 18%'>Địa điểm</th>
                      <th style='width: 18%'>Ngày tạo</th>
                      <th></th>
                      <th></th>
                    </tr>";
        while ($row = $result->fetch_assoc()) {
          $id = $row['MaSale'];
          $image = 'public/uploads/sales/'.$row['image'];
          $noidung = $row['noidung'];
          $gianguoilon = $row['gianguoilon'];
          $gianguoilon_new = number_format($gianguoilon, 0, '', ',');
          $giatreem = $row['giatreem'];
          $giatreem_new = number_format($giatreem, 0, '', ',');
          $len = strlen($noidung);
          if($len > 100){
            $noidung1 = substr($noidung,  0, 100);
            $noidung2 = $noidung1." ...";
          }else if($len < 100){
            $noidung2 = substr($noidung,  0, 100);     
          }
          echo"
                    <tr>
                      <td>" . $row['MaSale']. "</td>
                      <td>" . $row['startSale']. "</td>
                      <td>" . $row['stopSale']. "</td>
                      <td>" . $row['TenLoai']. "</td>
                      <td>" . $row['title']. "</td>
                      <td>" . $row['tgian']. "</td>
                      <td>" . $noidung2."</td>
                      <td style='width: 20%'><img src='$image' width='70%'></td>
                      <td>" . $gianguoilon_new." vnđ</td>
                      <td>" . $giatreem_new." vnđ</td>
                      <td>" . $row['ngaykhoihanh']."</td>
                      <td>" . $row['giokhoihanh']."</td>
                      <td>" . $row['diemkhoihanh']."</td>
                      <td>" . $row['ngaythemSale']."</td>
                      <td><a href='admin.php?controller=sales&action=edit&id=$id'><i class='fa fa-fw fa-pencil-square-o'></i></a></td>
                      <td><a href='admin.php?controller=sales&action=delete&id=$id'><i class='fa fa-fw fa-close'></i></a></td>
                    </tr>";
                 
        }
      } else {
        echo "No promotion!";
      }
      ?>
    </table>
        </div>
      </div>
    </div>
  </div>
</section>
  </div>
  <!-- /.content-wrapper -->
  <?php include "views/pages/admin/footer.php" ?>
