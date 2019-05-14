 <?php include "views/pages/admin/header.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
          <div class="row">
  <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Danh sách tour</h3>

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
                      <th style='width: 5%'>Loại Tour</th>
                      <th style='width: 20%'>Tiêu Đề</th>
                      <th style='width: 10%'>Số Ngày</th>
                      <th style='width: 10%'>Ngày Đi</th>
                      <th style='width: 40%'>Nội Dung</th>
                      <th style='width: 10%'>Ảnh</th>
                      <th style='width: 10%'>Giá N.Lớn</th>
                      <th style='width: 20%'>Giá Trẻ Em</th>
                      <th style='width: 18%'>Khởi Hành</th>
                      <th style='width: 18%'>Ngày Tạo</th>
                      <th></th>
                      <th></th>
                    </tr>";
        while ($row = $result->fetch_assoc()) {
          $id = $row['MaTour'];
          $image = 'public/uploads/tour/'.$row['AnhTour'];
          $noidung = $row['NoiDungTour'];
          $GiaNguoiLon = $row['GiaNguoiLon'];
          $GiaNguoiLon_new = number_format($GiaNguoiLon, 0, '', ',');
          $GiaTreEm = $row['GiaTreEm'];
          $GiaTreEm_new = number_format($GiaTreEm, 0, '', ',');
          $len = strlen($noidung);
          if($len > 100){
            $noidung1 = substr($noidung,  0, 100);
            $noidung2 = $noidung1." ...";
          }else if($len < 100){
            $noidung2 = substr($noidung,  0, 100);     
          }
          // SELECT tour.MaTour,loaitour.TenLoai,tour.TenTour,tour.tgian,khoihanh.ngaykhoihanh,tour.NoiDungTour,tour.AnhTour,tour.GiaNguoiLon,tour.GiaTreEm,tour.DiemKhoiHanh FROM `tour` inner join khoihanh on tour.MaTour=khoihanh.MaTour INNER join loaitour on tour.MaLoai = loaitour.MaLoai
          echo"
                    <tr>
                      <td>" . $row['MaTour']. "</td>
                      <td>" . $row['TenLoai']. "</td>
                      <td>" . $row['TenTour']. "</td>
                     
                      <td>" . $row['tgian']. "</td> 
                      <td>" . $row["ngaykhoihanh"]. "</td>
                      <td>" . $noidung2."</td>
                      <td style='width: 20%'><img src='$image' width='70%'></td>
                      <td>" . $GiaNguoiLon_new." VNĐ</td>
                      <td>" . $GiaTreEm_new." VNĐ</td>
                      <td>" . $row['DiemKhoiHanh']."</td>
                      <td>" . $row['NgayThem']."</td>
                      <td><a href='admin.php?controller=tour&action=edit&id=$id'><i class='fa fa-fw fa-pencil-square-o'></i></a></td>
                      <td><a href='admin.php?controller=tour&action=delete&id=$id'><i class='fa fa-fw fa-close'></i></a></td>
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

