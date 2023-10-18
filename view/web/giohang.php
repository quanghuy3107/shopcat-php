<section class="h-100" style="background-color: #eee;">
   
      <div class="container h-100 py-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-10">

          <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>

          </div>
          <?php
          if (!empty($listGioHang)) {
            foreach ($listGioHang as $gioHang) {
          ?>
              <form action="/duanmau/controller/web/index.php" >
              <div class="card rounded-3 mb-4">
                <div class="card-body p-4">
                  <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-md-2 col-lg-2 col-xl-2">
                      <img src="/duanmau/template/admin/assets/img/<?php echo $gioHang['hinhanh'] ?>" class="img-fluid rounded-3" alt="Cotton T-shirt">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2">
                      <p class="lead fw-normal mb-2"><?php echo $gioHang['tensanpham'] ?></p>

                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 d-flex">
                   
                      <!-- <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                        <i class="fas fa-minus"></i>
                        </button> -->

                      <input id="form1" min="0" max="<?php echo $gioHang['soluong'] ?>" name="quantity" value="<?php echo $gioHang['soluongsanpham'] ?>" type="number" class="form-control form-control-sm" >

                      <!-- <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                        <i class="fas fa-plus"></i>
                        </button> -->
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 offset-lg-1">
                      <h5 style="color:red" class="mb-0"><?php echo ($gioHang['soluongsanpham'] * $gioHang['giasanpham']) ?> VNĐ</h5>
                    </div>
                    <input type="hidden" value="<?php echo $gioHang['sanpham_id'] ?>" name="sanpham_id">
                    <input type="hidden" value="<?php echo $_SESSION['nguoidung']['nguoidung_id'] ?>" name="nguoidung_id">
                    <input type="hidden" value="donhang" name="action">
                    <div class="col-md-2 col-lg-2 col-xl-2 text-end d-flex">
                      <input class="login" type="submit" value="Mua" name="btn">
                      <!-- <a class="myLink" href="duanmau/controller/web/index.php?action=donhang&&sanpham_id=<?php echo $gioHang['sanpham_id'] ?>&&nguoidung_id=<?php echo $_SESSION['nguoidung']['nguoidung_id'] ?>&&" onclick="addInputValueToURL()">Mua</a> -->
                      <a href="/duanmau/controller/admin/giohang/delete.php?giohang_id=<?php echo $gioHang['giohang_id'] ?>&&nguoidung_id=<?php echo $_SESSION['nguoidung']['nguoidung_id'] ?>" class=" login"><i class="fas fa-trash fa-lg"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              </form>


            <?php
            }
          } else {
          ?>
            <div class="cart-empty">
              <img src="/duanmau/template/web/img/cart-empty.png" alt="">
              <h3 style="margin-bottom: 50px;">Bạn chưa có sản phẩm nào trong giỏ hàng</h3>
              <a href="/duanmau/controller/web/index.php">Hãy mua sản phẩm</a>
            </div>

          <?php
          }
          ?>



        </div>
      </div>
    </div>
</section>





<style>
  .cart-empty {
    margin: 40px 0;
  }

  .cart-empty h3 {

    text-align: center;

  }

  .cart-empty img {

    margin-left: 50%;
    transform: translateX(-50%);

  }


  .cart-empty a {
    text-decoration: none;
    color: #000;
    display: inline;
    margin-left: 42%;
    /* margin: 0 auto; */
    text-align: center;
    border: 1px solid black;
    padding: 5px;
    border-radius: 10px;
    font-weight: 500;
  }

  .cart-empty a:hover {
    background: #000;
    border: 0;
    color: white;

  }
</style>