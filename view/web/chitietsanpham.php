<section class="py-5">
	<div class="container px-4 px-lg-5 my-5">
		<div class="row gx-4 gx-lg-5 align-items-center">
			<div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="/duanmau/template/admin/assets/img/<?php echo $sanphamupdate['hinhanh'] ?>" alt="..." /></div>
			<div class="col-md-6">

				<h1 class="display-5 fw-bolder "><?php echo $sanphamupdate['motangan'] ?></h1>
				<div class="fs-5 mb-5 d-flex ">

					<h2 style="color:red; margin: 0 10px"><?php echo $sanphamupdate['giasanpham'] ?> vnđ</h2>  <p class=""> | <i class="bi bi-eye-fill"></i> <?php echo $sanphamupdate['luotxem'] ?> | đã bán: <?php echo $sanphamupdate['daban'] ?></p>
				</div>
				<p class="lead"><?php echo $sanphamupdate['motangan'] ?></p>
				<p>số lượng sản phẩm trong kho: <?php echo $sanphamupdate["soluong"] ?></p>
				<div class="d-flex">
				<?php 
					if(isset($_SESSION['nguoidung'])){
				?>
				<form id="checkForm" action="/duanmau/controller/admin/giohang/add.php" method="get">
					<label for="">số lượng</label>
					<input  min="0" max="<?php echo $sanphamupdate["soluong"] ?>" class="quantity" name="quantity" value="1" type="number" style="width: 70px;"/>
					<input type="hidden"  value="<?php echo $sanphamupdate["sanpham_id"] ?>" name="sanpham_id">
					<input type="hidden" value="<?php echo $sanphamupdate['danhmuc_id'] ?>" name="danhmuc_id">
					<input type="hidden" value="<?php echo $_SESSION['nguoidung']['nguoidung_id'] ?>" name="nguoidung_id">
					<input type="hidden" value="donhang" name="action">
					
					<!-- <input type="hidden" value="checkthaotac" name="action"> -->
					<!-- <input type="submit" class="btn btn-outline-dark mt-auto bi-cart-fill " name="cart"  value=" Thêm vào giỏ hàng">
					<input type="submit" class="btn btn-outline-dark mt-auto bi-cart-fill " name="buy" value=" Mua ngay"> -->
					<button  type="submit"  class="btn btn-outline-dark "><i class="bi-cart-fill me-1"></i> Add to cart</button>
					<button onclick="checkForm()"  type="submit" class="btn btn-outline-dark mt-auto">Mua ngay</button>

				</form>
				<?php 
					}else{
				?>
					<label for="">số lượng</label>
					<input  min="0" max="<?php echo $sanphamupdate["soluong"] ?>" class="quantity" name="quantity" value="1" type="number" style="width: 70px;"/>
					<a class="login" href="/duanmau/controller/web/index.php?action=login">Add to cart</a>
					<a class="login" href="/duanmau/controller/web/index.php?action=login">Mua ngay</a>
				<?php 
					}
				?>
				</div>
			</div>
			<div style="margin-top: 100px;">
				<h1>Thông tin sản phẩm</h1>
				<p><?php echo $sanphamupdate['mota'] ?></p>
			</div>
			<div style="margin-top: 100px;">
				<h1>Đánh giá của khách hàng</h1>
				<section>
					<div class="container my-5 py-5">
						<div class="row d-flex justify-content-center">
							<div class="col-md-12 col-lg-10">
								<div class="card text-dark">
									<?php
										foreach($listDanhGia AS $danhGia){
									?>
									<div class="card-body p-4">


										<div class="d-flex flex-start">

											<div>
												<h6 class="fw-bold mb-1"><?php echo $danhGia['hovaten'] ?></h6>
												<div class="d-flex align-items-center mb-3">
													<p class="mb-0">
													<?php echo $danhGia['ngayviet'] ?>

													</p>
												</div>
												<p class="mb-0">
												<?php echo $danhGia['noidung'] ?>
												</p>
												<?php 
													if(isset($_SESSION['nguoidung']) && $_SESSION['nguoidung']['nguoidung_id'] == $danhGia['nguoidung_id']){
												?>
												
												<a href="/duanmau/controller/admin/danhgia/deleteonweb.php?danhgia_id=<?php echo $danhGia['danhgia_id'] ?>&&sanpham_id=<?php echo $danhGia["sanpham_id"] ?>&&danhmuc_id=<?php echo $_GET['danhmuc'] ?>">Xóa</a>
												<?php
													}
												?>
											</div>
										</div>
									</div>

									<hr class="my-0" />
									<?php
										}
									?>



								<?php 
									if(isset($_SESSION['nguoidung'])){
								?>
								<h3 style="margin-top: 50px;"><?php echo $_SESSION['nguoidung']['hovaten'] ?></h3>
									<form class="comment" action="/duanmau/controller/admin/danhgia/add.php" >
										<div class="mb-3 mt-3">
											<label for="noidung">Bình luận:</label>
											<textarea class="form-control" rows="3" id="noidung" name="noidung"></textarea>
										</div>
										<span id="check"></span>
										<input type="hidden" value="<?php echo $sanphamupdate['sanpham_id'] ?>" name="sanpham_id">
										<input type="hidden" value="<?php echo $_SESSION['nguoidung']['nguoidung_id'] ?>" name="nguoidung_id">
										<input type="hidden" value="<?php echo $sanphamupdate['danhmuc_id']?>" name="danhmuc_id">
										<button  type="submit" class="btn btn-primary">Gửi<i class="fas fa-long-arrow-alt-right ms-1"></i></button>
									</form>
								</div>
								<?php
									}
								?>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</section>
<!-- Related items section-->
<section class="py-5 bg-light">
	<div class="container px-4 px-lg-5 mt-5">
		<h2 class="fw-bolder mb-4">Sản phẩm liên quan</h2>
		<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
			<?php
			foreach ($listSanPham as $sanPham) {
			?>
				<div class="col mb-5">
					<div class="card h-100">
						<!-- Product image-->
						<img class="card-img-top" src="/duanmau/template/admin/assets/img/<?php echo $sanPham["hinhanh"] ?>" alt="..." />
						<!-- Product details-->
						<div class="card-body p-4">
							<div class="text-center">
								<!-- Product name-->
								<h5 class="fw-bolder"><?php echo $sanPham["tensanpham"] ?></h5>
								<!-- Product reviews-->
								<div class="d-flex justify-content-center small text-warning mb-2">
									<div class="bi-star-fill"></div>
									<div class="bi-star-fill"></div>
									<div class="bi-star-fill"></div>
									<div class="bi-star-fill"></div>
									<div class="bi-star-fill"></div>
								</div>
								<!-- Product price-->
								<p style="color: red; font-size:20px; font-weight:700"><?php echo $sanPham["giasanpham"] ?> vnđ </p>
								<i class="bi bi-eye-fill"></i> <?php echo $sanPham["luotxem"] ?> lượt xem
							</div>
						</div>
						<!-- Product actions-->
						<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
							<div class="text-center">
								<a class="btn btn-outline-dark mt-auto" href="/duanmau/controller/web/index.php?action=chitietsanpham&&sanpham_id=<?php echo $sanPham["sanpham_id"] ?>&&page=1&&maxPageItem=4&&sortBy=desc&&sortName=sanpham_id&&danhmuc=<?php echo $sanPham['danhmuc_id'] ?>&&sortByDanhGia=desc&&sortNameDanhGia=ngayviet ">Xem sản phẩm</a>
							</div>
						</div>
					</div>
				</div>

			<?php
			}
			?>

		</div>
	</div>
</section>
<script>
    function validateForm() {
        var check = document.getElementById("check");
        
        let comment = document.forms["comment"]["noidung"].value;
console.log(comment);
        if (comment == "" ) {
            check.innerHTML = "Bạn chưa ghi bình luận!";
            return false;
        } else {
            check.innerHTML = "";
        }
        
    }
	function checkForm(){
		var form = document.getElementById("checkForm");

		form.action = "/duanmau/controller/web/index.php";
		

	}
</script>