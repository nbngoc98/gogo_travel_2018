 <?php include "views/pages/admin/header.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
      <div class="row">
      <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Hành Khách</h3>

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
                      <th style='width: 10%'>ID </th>
                      <th style='width: 15%'>Mã Đặt</th>
                      <th style='width: 30%'>Tên Hành Khách</th>
                      <th style='width: 20%'>Ngày Sinh</th>
                      <th style='width: 10%'>Phone</th>
                      <th style='width: 15%'>CMND</th>
                      <th></th>
                    </tr>";
        while ($row = $result->fetch_assoc()) {
          $id = $row['mahanhkhach'];
          echo"
                    <tr>
                      <td>" . $row['mahanhkhach']. "</td>
                      <td>" . $row['MaDat']. "</td>
                      <td>" . $row['tenhanhkhach']. "</td>
                      <td>" . $row['ngaysinh']."</td>
                      <td>" . $row['sdt']."</td>
                      <td>" . $row['cmnd']."</td>
                      <td><a href='admin.php?controller=hanhkhach&action=delete&id=$id'><i class='fa fa-fw fa-close'></i></a></td>
                    </tr>";
                 
        }
      } else {
        echo "Không có hành khách!";
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

