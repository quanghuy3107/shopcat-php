<div class="container oder">
  <h1 class="text-oder">Các đơn hàng của bạn</h1>
  <div class="accordion oder-sub" id="accordionExample">

    <?php
    $stt = 0;
    foreach ($listDonHang as $donhang) {
      $stt++;
    ?>
      <div class="accordion-item">
        <h2 class="accordion-header" id="heading<?php echo $stt ?>">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $stt ?>" aria-expanded="false" aria-controls="collapse<?php echo $stt ?>">
            <div class=" rounded-3 mb-4">
              <div class=" ">
                <div class="row d-flex justify-content-between align-items-center">
                  <div class="col-md-1 col-lg-1 col-xl-1">
                    <img src="/duanmau/template/admin/assets/img/<?php echo $donhang['hinhanh'] ?>" class="img-fluid rounded-3" alt="Cotton T-shirt" style="width: 100%;">
                  </div>
                  <div class="col-md-3 col-lg-3 col-xl-3">
                    <p class="lead fw-normal mb-2"><?php echo $donhang['tensanpham'] ?></p>

                  </div>

                  <div class="col-md-2 col-lg-2 col-xl-2 offset-lg-1">
                    <h5 style="color:red" class="mb-0"><?php echo $donhang['tongtien'] ?> VNĐ</h5>
                  </div>
                  <div class="col-md-2 col-lg-2 col-xl-2 offset-lg-1">
                    <h5> Số lượng: <?php echo $donhang['sanphamtrongdon'] ?></h5>
                  </div>
                </div>
              </div>
            </div>
          </button>
        </h2>
        <div id="collapse<?php echo $stt ?>" class="accordion-collapse collapse " aria-labelledby="heading<?php echo $stt ?>" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <section class="h-100 h-custom" style="background-color: #eee;">
              <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="col-lg-8 col-xl-6">
                    <div class="card border-top border-bottom border-3" style="border-color: #f37a27 !important;">
                      <div class="card-body p-5">

                        <p class="lead fw-bold mb-5" style="color: #f37a27;">Biên lai mua hàng</p>

                        <div class="row">
                          <div class="col mb-3">
                            <p class="small text-muted mb-1">Date</p>
                            <p><?php echo $donhang['thoigiandathang'] ?></p>
                          </div>

                        </div>

                        <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
                          <div class="row">
                            <div class="col-md-7 col-lg-8">
                              <p><?php echo $donhang['motangan'] ?></p>
                            </div>
                            <div class="col-md-5 col-lg-4">
                              <p><?php echo $donhang['giasanpham'] ?> VNĐ</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-8 col-lg-9">
                              <p class="mb-0">Số lượng:</p>
                            </div>
                            <div class="col-md-4 col-lg-3">
                              <p class="mb-0"><?php echo $donhang['sanphamtrongdon'] ?></p>
                            </div>
                          </div>
                        </div>

                        <div class="row my-4">
                          <div class="">
                            <p class="lead fw-bold mb-0" style="color: #f37a27;">Tổng tiền: <?php echo $donhang['tongtien'] ?> VNĐ</p>
                          </div>
                        </div>

                        <p class="lead fw-bold mb-4 pb-2" style="color: #f37a27;">Trạng thái đơn hàng</p>

                        <div class="row">
                          <div class="col-lg-12">

                            <div class="horizontal-timeline">
                              <?php
                              if ($donhang['trangthaithanhtoan'] == 0) {
                              ?>

                                <ul class="list-inline items d-flex justify-content-between">
                                  <li class="list-inline-item items-list">
                                    <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">Đã đặt</p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">
                                  </li>
                                  <li class="list-inline-item items-list">
                                    <p class="py-1 px-2 rounded text-white" style="background-color: #ccc;">Đã xác nhận</p class="py-1 px-2 rounded text-white" style="background-color: #ccc;">
                                  </li>
                                  <li class="list-inline-item items-list">
                                    <p class="py-1 px-2 rounded text-white" style="background-color: #ccc;">Đang giao
                                    </p>
                                  </li>
                                  <li class="list-inline-item items-list text-end" style="margin-right: 8px;">
                                    <p class="py-1 px-2 rounded text-white" style="background-color: #ccc;">Nhận hàng</p>
                                  </li>
                                </ul>

                              <?php
                              } else if ($donhang['trangthaithanhtoan'] == 1) {


                              ?>
                                <ul class="list-inline items d-flex justify-content-between">
                                  <li class="list-inline-item items-list">
                                    <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">Đã đặt</p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">
                                  </li>
                                  <li class="list-inline-item items-list">
                                    <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">Đã xác nhận</p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">
                                  </li>
                                  <li class="list-inline-item items-list">
                                    <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">Đang giao
                                    </p>
                                  </li>
                                  <li class="list-inline-item items-list text-end  " style="margin-right: 8px;">
                                    <a class="py-1 px-2 rounded text-white received" style="background-color: #f37a27;" href="/duanmau/controller/admin/donhang/updatestatus.php?action=user&&donhang_id=<?php echo $donhang['donhang_id'] ?>&&status=2">Nhận hàng</a>
                                    <!-- <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">Nhận hàng</p> -->
                                  </li>
                                </ul>
                              <?php
                              } else if ($donhang['trangthaithanhtoan'] == 2) {

                              ?>

                                <ul class="list-inline items d-flex justify-content-between">
                                  <li class="list-inline-item items-list">
                                    <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">Đã đặt</p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">
                                  </li>
                                  <li class="list-inline-item items-list">
                                    <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">Đã xác nhận</p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">
                                  </li>
                                  <li class="list-inline-item items-list">
                                    <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">Đã giao
                                    </p>
                                  </li>
                                  <li class="list-inline-item items-list text-end  " style="margin-right: 8px;">

                                    <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">Đã nhận hàng</p>
                                  </li>
                                </ul>
                              <?php
                              }

                              ?>
                            </div>

                          </div>
                        </div>



                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    <?php } ?>

  </div>




</div>
<style>
  .oder {
    height: 100%;
  }

  .text-oder {
    margin: 50px 0;
  }

  .oder-sub {
    padding: 50px;
    margin: 150px 0;
  }

  @media (min-width: 1025px) {
    .h-custom {
      height: 100vh !important;
    }
  }

  .horizontal-timeline .items {
    border-top: 2px solid #ddd;
  }

  .horizontal-timeline .items .items-list {
    position: relative;
    margin-right: 0;
  }

  .horizontal-timeline .items .items-list:before {
    content: "";
    position: absolute;
    height: 8px;
    width: 8px;
    border-radius: 50%;
    background-color: #ddd;
    top: 0;
    margin-top: -5px;
  }

  .horizontal-timeline .items .items-list {
    padding-top: 15px;
  }

  .received {
    text-decoration: none;
  }
</style>