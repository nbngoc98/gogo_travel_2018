<?php include "views/pages/admin/header.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
          <div class="row">
  <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tour Khuyến Mãi</h3>

          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Search" style="">

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
                      <th style='width: 10%'>Full Name</th>
                      <th style='width: 20%'>Tour Name</th>
                      <th style='width: 5%'>Adults</th>
                      <th style='width: 5%'>Children</th>
                      <th style='width: 5%'>Baby</th>
                      <th style='width: 7%'>Total Amount</th>
                      <th style='width: 8%'>Departure Day</th>
                      <th style='width: 10%'>Quit Request</th>
                      <th style='width: 15%' colspan='2'>Confirm Tour</th>
                     <th style='width: 2%' colspan='2'></th>
                    </tr>";
        while ($row = $result->fetch_assoc()) {
          $id = $row['MaDat'];
          $xacnhandat = $row['xacnhandat'];
          echo"
                    <tr>
                      <td>" . $row['MaDat']. "</td>
                      <td>" . $row['hoten']. "</td>
                      <td>" . $row['title']. "</td>
                      <td>" . $row['songuoilon']. "</td>
                      <td>" . $row['sotreem']. "</td>
                      <td>" . $row['sotrenho']. "</td>
                      <td>" . $row['sotienThanhToan']."</td>
                      <td>" . $row['ngaykhoihanh']."</td>
                      <td>" . $row['xacnhanhuy']."</td>";
                     if ($xacnhandat == 0) {
                                echo "<td ><p style='color:red;'>Đang chờ.. </p><td>";
                      }else{
                                echo "<td ><p style='color:#8C1B92;'>Đã xác nhận</p></td>";
                        }       

          echo "
                      <td><a href='admin.php?controller=chitietdat&action=delete1&id=$id'><i class='fa fa-fw fa-trash'></i></a></td>";
                    if ($xacnhandat == '0') {
                              echo "<td><a href='admin.php?controller=chitietdat&action=xacnhandat1&id=$id'><button type='button' class='btn btn-block btn-warning' style='font-size: 10px;'>Xác nhận</button></a></td>";
                            }else{
                                  
                            }
          echo"          </tr>";
                 
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
