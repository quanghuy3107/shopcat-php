<div class="main-content">
    <form action="/duanmau/controller/admin/admin.php?" id="formSubmit" method="get">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="/duanmau/controller/admin/admin.php?action=sanpham">Trang giỏ hàng</a>
                    </li>
                </ul><!-- /.breadcrumb -->
            </div>
            <div class="page-content">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>Trang giỏ hàng</h1>
                    </div>
                </div>
            </div>
            <table class="table" border="1">
                <thead>
                    <tr>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Tên người dùng</th>
                        <th scope="col">Số lượng sản phẩm trong giỏ</th>
                        <th scope="col">Thao tác</th>
                        
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($listGioHang as $gioHang) {
                    ?>

                        <tr>
                            
                            <td><img src="/duanmau/template/admin/assets/img/<?php echo $gioHang['hinhanh'] ?>" alt="" style="width: 100px; height:auto"></td>
                            <td><?php echo $gioHang['tensanpham'] ?></td>
                            <td><?php echo $gioHang['giasanpham'] ?></td>
                            <td><?php echo $gioHang["hovaten"] ?></td>
                            <td><?php echo $gioHang["soluongsanpham"] ?></td>
                            
                            <td>
                                <a  class="exec" href="/duanmau/controller/admin/giohang/delete.php?giohang_id=<?php echo $gioHang["giohang_id"] ?>">Xóa</a> 

                            </td>
                        </tr>
                    <?php
                    }
                    ?>
<!-- //sua update -->
                </tbody>
            </table>

            <ul class="pagination" id="pagination"></ul>
            <input type="hidden" value="" id="page" name="page" />
            <input type="hidden" value="" id="maxPageItem" name="maxPageItem" />
            <input type="hidden" value="" id="sortName" name="sortName" />
            <input type="hidden" value="" id="sortBy" name="sortBy" />
            <input type="hidden" value="giohang" id="action" name="action" />
            <!-- <div class="row">
                <div class="col">
                    <a class="danhsachdanhmuc" href="/duanmau/controller/admin/admin.php?action=sanpham">Trở về</a>
                </div>

            </div> -->
        </div>
    </form>
    <h1><?php echo $page ?></h1>

    <script>
        var totalPage = <?php echo $totalPage ?>;
        var currentPage = <?php echo $page ?>;
        var limit = 4;
        $(function() {
            window.pagObj = $('#pagination').twbsPagination({
                totalPages: totalPage, // so luong page
                visiblePages: 5, // so nut hien tren màn hinh
                startPage: currentPage, // page bat dau
                onPageClick: function(event, page) {
                    if (currentPage != page) {
                        $('#maxPageItem').val(parseInt(limit));
                        $('#page').val(page);
                        $('#sortName').val('giohang_id');
					    $('#sortBy').val('asc');
                        $('#formSubmit').submit();
                    }
                }
            }).on('page', function(event, page) {
                console.info(page + ' (from event listening)');
            });
        });
    </script>

</div><!-- /.main-content -->