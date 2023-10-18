<div class="main-content">
    <form action="/duanmau/controller/admin/admin.php?" id="formSubmit" method="get">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="/duanmau/controller/admin/admin.php?action=sanpham">Trang sản phẩm</a>
                    </li>
                </ul><!-- /.breadcrumb -->
            </div>
            <div class="page-content">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>Trang sản phẩm</h1>
                    </div>
                </div>
            </div>
            <table class="table" border="1">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Mô tả ngắn</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Lượt xem</th>
                        <th scope="col">Danh mục</th>
                        <th scope="col">Thao tắc</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($listSanPham as $sanPham) {
                    ?>

                        <tr>
                            <th scope="row"><?php echo $sanPham["sanpham_id"] ?></th>
                            <td><?php echo $sanPham["tensanpham"] ?></td>
                            <td><?php echo $sanPham["giasanpham"] ?></td>
                            <td><img src="/duanmau/template/admin/assets/img/<?php echo $sanPham["hinhanh"] ?>" alt="" style="width: 100px; height:auto"></td>
                            <td><?php echo $sanPham["motangan"] ?></td>
                            <td><?php echo $sanPham["mota"] ?></td>
                            <td><?php echo $sanPham["soluong"] ?></td>
                            <td><?php echo $sanPham["luotxem"] ?></td>
                            <td><?php echo $sanPham["tendanhmuc"] ?></td>
                            <td>
                                <a  class="exec" href="/duanmau/controller/admin/sanpham/delete.php?sanpham_id=<?php echo $sanPham["sanpham_id"] ?>">Xóa</a> 
                                <a  class="exec" href="/duanmau/controller/admin/admin.php?action=updatesanpham&&sanpham_id=<?php echo $sanPham["sanpham_id"] ?>&&page=<?php echo $page ?>&&maxPageItem=<?php echo $maxPageItem ?>&&sortName=<?php echo $sortName ?>&&sortBy=<?php echo $sortBy ?>">Sửa</a>
                                <a  class="exec" href="/duanmau/controller/admin/admin.php?action=danhgia&&sanpham_id=<?php echo $sanPham["sanpham_id"] ?>&&page=1&&maxPageItem=8&&sortNameDanhGia=ngayviet&&sortByDanhGia=desc">Đánh giá</a>
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
            <input type="hidden" value="danhsachsanpham" id="action" name="action" />
            <div class="row">
                <div class="col">
                    <a class="danhsachdanhmuc" href="/duanmau/controller/admin/admin.php?action=sanpham">Trở về</a>
                </div>

            </div>
        </div>
    </form>
    <h1><?php echo $page ?></h1>

    <script>
        var totalPage = <?php echo $totalPage ?>;
        var currentPage = <?php echo $page ?>;
        var limit = 2;
        $(function() {
            window.pagObj = $('#pagination').twbsPagination({
                totalPages: totalPage, // so luong page
                visiblePages: 5, // so nut hien tren màn hinh
                startPage: currentPage, // page bat dau
                onPageClick: function(event, page) {
                    if (currentPage != page) {
                        $('#maxPageItem').val(parseInt(limit));
                        $('#page').val(page);
                        $('#sortName').val('luotxem');
					    $('#sortBy').val('desc');
                        $('#formSubmit').submit();
                    }
                }
            }).on('page', function(event, page) {
                console.info(page + ' (from event listening)');
            });
        });
    </script>

</div><!-- /.main-content -->