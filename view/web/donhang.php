<section class="vh-100 gradient-custom-2">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-10 col-lg-8 col-xl-6">
                <div class="card card-stepper" style="border-radius: 16px;">
                    <form action="/duanmau/controller/admin/chitietdonhang/add.php?" method="get">
                        <div class="card-body p-4">
                            <div class="d-flex flex-row mb-4 pb-2">
                                <div class="flex-fill">
                                    <h5 class="bold"><?php echo $sanphamupdate['tensanpham'] ?></h5>
                                    <p><?php echo $sanphamupdate['motangan'] ?></p>
                                    <p class="text-muted">số lượng: <?php echo $_GET['quantity'] ?></p>
                                    <p>Địa chỉ nhận hàng: <?php echo $nguoiDung['diachinhanhang'] ?></p>
                                    <p>Giá tiền:</p>
                                    <h4 style="color:red" class="mb-3"> <?php echo ($sanphamupdate['giasanpham'] * $_GET['quantity']) ?> VNĐ </h4>
                                    <label for="thanhtoan">Chọn phương thức thanh toán:</label>
                                    <select name="thanhtoan" id="thanhtoan">
                                        <option value="Thanh toán khi nhận hàng">Thanh toán khi nhận hàng</option>
                                        <option value="Thanh toán banking">Thanh toán banking</option>
                                    </select>
                                </div>
                                <div>
                                    <img class="align-self-center img-fluid" src="/duanmau/template/admin/assets/img/<?php echo $sanphamupdate['hinhanh'] ?>" width="250">
                                </div>
                            </div>
                            <input type="hidden" name="nguoidung_id" value="<?php echo $_GET['nguoidung_id'] ?>">
                            <input type="hidden" name="sanpham_id" value="<?php echo $sanphamupdate['sanpham_id'] ?>">
                            <input type="hidden" name="quantity" value="<?php echo  $_GET['quantity'] ?>">
                            <input type="hidden" name="tongtien" value="<?php echo ($sanphamupdate['giasanpham'] * $_GET['quantity']) ?>">
                            
                        </div>
                        <div class="card-footer p-4">
                            <div class="d-flex justify-content-between">
                                <h5>
                                    <input class=" login" type="submit" value="Thanh toán">
                                </h5>

                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .gradient-custom-2 {
        /* fallback for old browsers */
        background: #a1c4fd;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1))
    }

    #progressbar-1 {
        color: #455A64;
    }

    #progressbar-1 li {
        list-style-type: none;
        font-size: 13px;
        width: 33.33%;
        float: left;
        position: relative;
    }

    #progressbar-1 #step1:before {
        content: "1";
        color: #fff;
        width: 29px;
        margin-left: 22px;
        padding-left: 11px;
    }

    #progressbar-1 #step2:before {
        content: "2";
        color: #fff;
        width: 29px;
    }

    #progressbar-1 #step3:before {
        content: "3";
        color: #fff;
        width: 29px;
        margin-right: 22px;
        text-align: center;
    }

    #progressbar-1 li:before {
        line-height: 29px;
        display: block;
        font-size: 12px;
        background: #455A64;
        border-radius: 50%;
        margin: auto;
    }

    #progressbar-1 li:after {
        content: '';
        width: 121%;
        height: 2px;
        background: #455A64;
        position: absolute;
        left: 0%;
        right: 0%;
        top: 15px;
        z-index: -1;
    }

    #progressbar-1 li:nth-child(2):after {
        left: 50%
    }

    #progressbar-1 li:nth-child(1):after {
        left: 25%;
        width: 121%
    }

    #progressbar-1 li:nth-child(3):after {
        left: 25%;
        width: 50%;
    }

    #progressbar-1 li.active:before,
    #progressbar-1 li.active:after {
        background: #1266f1;
    }

    .card-stepper {
        z-index: 0
    }
</style>