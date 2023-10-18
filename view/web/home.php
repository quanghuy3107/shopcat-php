<!-- main -->
<header class="bg-dark ">
	<div class="container px-4 px-lg-5 my-5">
		<div class="text-center text-white">
			<!-- <h1 class="display-4 fw-bolder">Shop in style</h1>
				<p class="lead fw-normal text-white-50 mb-0">With this shop
					hompeage template</p> -->
			<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active" data-bs-interval="10000">
						<img src="/duanmau/template/web/img/banner-1.png" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item" data-bs-interval="2000">
						<img src="/duanmau/template/web/img/banner-2.png" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="/duanmau/template/web/img/banner-3.png" class="d-block w-100" alt="...">
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>
	</div>
</header>
<!-- Section-->
<section class="py-5">

	<div class="container px-4 px-lg-5 mt-5">
		<form action="/duanmau/controller/web/index.php" id="formSubmit" method="get">
			<h1 class="topic-1" style="padding-bottom: 50px;">Sản phẩm mới</h1>
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
									<a class="btn btn-outline-dark mt-auto" href="/duanmau/controller/web/index.php?action=chitietsanpham&&sanpham_id=<?php echo $sanPham["sanpham_id"] ?>&&page=1&&maxPageItem=4&&sortBy=desc&&sortName=sanpham_id&&danhmuc=<?php echo $sanPham['danhmuc_id'] ?>&&sortByDanhGia=desc&&sortNameDanhGia=ngayviet">Xem sản phẩm</a>
								</div>
							</div>
						</div>
					</div>
				<?php
				}
				?>


				<ul class="pagination" id="pagination"></ul>
				<input type="hidden" value="" id="page" name="page" />
				<input type="hidden" value="" id="maxPageItem" name="maxPageItem" />
				<input type="hidden" value="" id="sortName" name="sortName" />
				<input type="hidden" value="" id="sortBy" name="sortBy" />
				<input type="hidden" value="phantrang" id="action" name="action" />
			</div>

		</form>
		<div class="content-2">
			<div class="row gx-5">
				<div class="col-7">
					<img src="/duanmau/template/web/img/poster.jpg" alt="" style="width: 100%;">
				</div>
				<div class="col-5">
					<div class="p-3 border bg-light">
						<h5>Top 5 sản phấm có nhiều lượt xem nhất:</h5>
						<hr>
						<?php
							foreach($listTopProduct as $product){
						?>
						<a href="/duanmau/controller/web/index.php?action=chitietsanpham&&sanpham_id=<?php echo $product["sanpham_id"] ?>&&page=1&&maxPageItem=4&&sortBy=desc&&sortName=sanpham_id&&danhmuc=<?php echo $product['danhmuc_id'] ?>&&sortByDanhGia=desc&&sortNameDanhGia=ngayviet">
							<div class="card rounded-3 mb-4">
								<div class="card-body">
									<div class="row d-flex justify-content-between r">
										<div class="col-md-2 col-lg-2 col-xl-2">
											<img src="/duanmau/template/admin/assets/img/<?php echo $product['hinhanh'] ?>" class="img-fluid rounded-3" alt="Cotton T-shirt">
										</div>
										<div class="col-md-7 col-lg-7 col-xl-7">
											<p class=""><?php echo $product['tensanpham'] ?></p>

										</div>
										<div class="col-md-3 col-lg-3 col-xl-3 d-flex">
											<p class=""><i class="bi bi-eye-fill"></i> <?php echo $product['luotxem'] ?></p>
										</div>
										
										
										
									</div>
								</div>
							</div>
						</a>
						<?php
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

<script>
	var totalPage = <?php echo $totalPage ?>;
	var currentPage = <?php echo $page ?>;
	var limit = 8;
	$(function() {
		window.pagObj = $('#pagination').twbsPagination({
			totalPages: totalPage, // so luong page
			visiblePages: 5, // so nut hien tren màn hinh
			startPage: currentPage, // page bat dau
			onPageClick: function(event, page) {
				if (currentPage != page) {
					$('#maxPageItem').val(parseInt(limit));
					$('#page').val(page);
					$('#sortName').val('sanpham_id');
					$('#sortBy').val('desc');
					$('#formSubmit').submit();
				}
			}
		}).on('page', function(event, page) {
			console.info(page + ' (from event listening)');
		});
	});
</script>

<style>
	.content-2 {
		margin-top: 50px;
	}
	a{
		text-decoration: none;
		color: black;
	}
</style>