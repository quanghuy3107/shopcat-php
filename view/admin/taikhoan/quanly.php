<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="/duanmau/controller/admin/admin.php?action=taikhoan">Trang quản lý tài khoản</a>
                </li>
            </ul><!-- /.breadcrumb -->
        </div>
        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Trang quản lý tài khoản</h1>
                </div>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">email</th>
                    <th scope="col">Địa chỉ nhận hàng</th>
                    <th scope="col">Địa chỉ thanh toán</th>
                    <th scope="col">Số điện thoại </th>
                    <th scope="col">Ngày sinh </th>
                    <th scope="col">Tên đăng nhập</th>
                    <th scope="col">Mật khẩu</th>
                    <th scope="col">Trạng thái thanh toán</th>
                    <th scope="col">Vai trò</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listNguoiDung as $nguoiDung) {
                ?>
                    <tr>

                        <th scope="row"><?php echo $nguoiDung["nguoidung_id"] ?></th>
                        <td><?php echo $nguoiDung["hovaten"] ?></td>
                        <td><?php echo $nguoiDung["email"] ?></td>
                        <td><?php echo $nguoiDung["diachinhanhang"] ?></td>
                        <td><?php echo $nguoiDung["diachithanhtoan"] ?></td>
                        <td><?php echo $nguoiDung["sodienthoai"] ?></td>
                        <td><?php echo $nguoiDung["ngaysinh"] ?></td>
                        <td><?php echo $nguoiDung["tendangnhap"] ?></td>
                        <td><?php echo $nguoiDung["matkhau"] ?></td>
                        <td><?php echo $nguoiDung["trangthaithanhtoan"] ?></td>
                        <td><?php echo $nguoiDung["name"] ?></td>
                        <td>
                            <!-- chua lam -->
                            <a class="exec" href="/duanmau/controller/admin/taikhoan/delete.php?id=<?php echo  $nguoiDung["nguoidung_id"] ?>">Xóa</a> 
                            <!-- <a class="exec" href="/duanmau/controller/admin/admin.php?action=information&&nguoidung_id=<?php echo $nguoiDung["nguoidung_id"] ?>">chi tiết</a>  -->
                        </td>
                        
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
        <!-- <div class="row">
            <div class="col">
            <a class="danhsachdanhmuc" href="/duanmau/controller/admin/admin.php?action=danhmuc">Trở về</a>           
            </div>
        
        </div> -->
    </div>
</div><!-- /.main-content -->