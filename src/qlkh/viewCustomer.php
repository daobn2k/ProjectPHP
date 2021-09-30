<?php
session_start();
include './controllers/product.php';
include './models/supplierModel.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin - Quản lý Khách Hàng</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="Flash Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
	<meta name="keywords"
		content="admin, category, shop">
	<meta name="author" content="Nhóm 1" />

	<!-- Favicon icon -->
	<link rel="icon" href="./assets/images/favicon.ico" type="image/x-icon">
	<!-- fontawesome icon -->
	<link rel="stylesheet" href="./assets/fonts/fontawesome/css/fontawesome-all.min.css">
	<!-- animation css -->
	<link rel="stylesheet" href="./assets/plugins/animation/css/animate.min.css">

	<!-- vendor css -->
	<link rel="stylesheet" href="./assets/css/style.css">
</head>

<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->

	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menupos-fixed menu-light brand-blue ">
		<div class="navbar-wrapper ">
			<div class="navbar-brand header-logo">
				<a href="home.php" class="b-brand">
					<span style="color: whitesmoke;">Quản lý kho</span>
				</a>
				<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
			</div>
			<div class="navbar-content scroll-div">
				<ul class="nav pcoded-inner-navbar">
					<li class="nav-item">
						<a href="home.php" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Màn hình chính</span></a>
					</li>
					<li class="nav-item">
						<a href="product.php" class="nav-link"><span class="pcoded-micon"><i class="feather icon-cpu"></i></span><span class="pcoded-mtext">Sản phẩm</span></a>
					</li>
					<li class="nav-item">
						<a href="supplier.php" class="nav-link"><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Nhà cung cấp</span></a>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Đơn hàng</span></a>
						<ul class="pcoded-submenu">
							<li class=""><a href="importOrder.php" class="">Đơn hàng nhập</a></li>
							<li class=""><a href="exportOrder.php" class="">Đơn hàng xuất</a></li>
						</ul>
					</li>
					<li class="nav-item disabled"><a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-power"></i></span><span class="pcoded-mtext">Disabled menu</span></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->

	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed">
		<div class="m-header">
			<a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
			<a href="index.html" class="b-brand">
				<img src="./assets/images/logo.svg" alt="" class="logo images">
				<img src="./assets/images/logo-icon.svg" alt="" class="logo-thumb images">
			</a>
		</div>
		<a class="mobile-menu" id="mobile-header" href="#!">
			<i class="feather icon-more-horizontal"></i>
		</a>
		<div class="collapse navbar-collapse">
			<a href="#!" class="mob-toggler"></a>
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<div class="main-search open">
						<div class="input-group">
							<input type="text" id="m-search" class="form-control" placeholder="Search . . .">
							<a href="#!" class="input-group-append search-close">
								<i class="feather icon-x input-group-text"></i>
							</a>
							<span class="input-group-append search-btn btn btn-primary">
								<i class="feather icon-search input-group-text"></i>
							</span>
						</div>
					</div>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li>
					<div class="dropdown">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
						<div class="dropdown-menu dropdown-menu-right notification">
							<div class="noti-head">
								<h6 class="d-inline-block m-b-0">Notifications</h6>
								<div class="float-right">
									<a href="#!" class="m-r-10">mark as read</a>
									<a href="#!">clear all</a>
								</div>
							</div>
							<ul class="noti-body">
								<li class="n-title">
									<p class="m-b-0">NEW</p>
								</li>
								<li class="notification">
									<div class="media">
										<img class="img-radius" src="../assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
										<div class="media-body">
											<p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
											<p>New ticket Added</p>
										</div>
									</div>
								</li>
								<li class="n-title">
									<p class="m-b-0">EARLIER</p>
								</li>
								<li class="notification">
									<div class="media">
										<img class="img-radius" src="../assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
										<div class="media-body">
											<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
											<p>Prchace New Theme and make payment</p>
										</div>
									</div>
								</li>
								<li class="notification">
									<div class="media">
										<img class="img-radius" src="../assets/images/user/avatar-3.jpg" alt="Generic placeholder image">
										<div class="media-body">
											<p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 min</span></p>
											<p>currently login</p>
										</div>
									</div>
								</li>
								<li class="notification">
									<div class="media">
										<img class="img-radius" src="../assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
										<div class="media-body">
											<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
											<p>Prchace New Theme and make payment</p>
										</div>
									</div>
								</li>
								<li class="notification">
									<div class="media">
										<img class="img-radius" src="../assets/images/user/avatar-3.jpg" alt="Generic placeholder image">
										<div class="media-body">
											<p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>1 hour</span></p>
											<p>currently login</p>
										</div>
									</div>
								</li>
								<li class="notification">
									<div class="media">
										<img class="img-radius" src="../assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
										<div class="media-body">
											<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>2 hour</span></p>
											<p>Prchace New Theme and make payment</p>
										</div>
									</div>
								</li>
							</ul>
							<div class="noti-footer">
								<a href="#!">show all</a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="dropdown drp-user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon feather icon-settings"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right profile-notification">
							<div class="pro-head">
								<img src="./assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
								<span><?php echo $_SESSION['username']; ?></span>
								<a href="./controllers/signout.php" class="dud-logout" title="Logout">
									<i class="feather icon-log-out"></i>
								</a>
							</div>
							<ul class="pro-body">
								<li><a href="#!" class="dropdown-item"><i class="feather icon-settings"></i> Settings</a></li>
								<li><a href="#!" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
								<li><a href="message.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
								<li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</header>
	<div class="pcoded-main-container">
		<div class="pcoded-wrapper">
			<div class="pcoded-content">
				<div class="pcoded-inner-content">
					<div class="main-body">
						<div class="page-wrapper">
							<div class="page-header">
								<div class="page-block">
									<div class="row align-items-center">
										<div class="col-md-12">
											<div class="page-header-title">
												<h5>Trang chủ</h5>
											</div>
											<ul class="breadcrumb">
												<li class="breadcrumb-item"><a href="home.php"><i class="feather icon-home"></i></a></li>
												<li class="breadcrumb-item"><a href="#!">Sản phẩm</a></li>
												<li class="breadcrumb-item"><a href="#!">Danh sách sản phẩm</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
                            <div class="row">
                            	<div class="col-md-12">
                            		<button class="btn btn-primary" onclick="location.href = 'NewProduct.php';">Tạo mới</button>
                            	</div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Danh sách sản phẩm</h5>
                                            <span class="d-block m-t-5">Đã bao gồm sản phẩm tồn</span>
                                        </div>
                                        <div class="card-body table-border-style">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 10%;">Tên sản phẩm</th>
                                                            <th style="width: 10%;">Nhà cung cấp</th>
                                                            <th style="width: 10%;">Giá</th>
                                                            <th style="width: 10%;">Số lượng nhập</th>
                                                            <th style="width: 5%;">Còn lại</th>
                                                            <th style="width: 20%;">Thông tin sản phẩm</th>
                                                            <th style="width: 5%;">Trạng thái</th>
                                                            <th style="width: 10%;"></th>
                                                        </tr>
                                                    </thead>
                                                    <?php 
                                            	while($row = mysqli_fetch_array($result))
												{
                                            	?>
                                                    <tbody>
                                                        <tr>
                                                            <td><?php echo $row["name"] ?></td>
                                                            <?php 
                                                            	$supplier = new Supplier();
                                                            	$resultSupplier = $supplier->SupplierByID($row["idSupplier"]);
                                                            	$nameSupplier = mysqli_fetch_array($resultSupplier);
                                                            	if($nameSupplier==null){
                                                            ?>
                                                            <td>Nhà cung cấp bị xóa hoặc không tồn tại</td>
                                                            <?php 
                                                            	}
                                                            	else
                                                            	{
                                                            ?>
                                                            <td><?php echo $nameSupplier["name"] ?></td>
                                                            <?php 
	                                                            }
                                                            ?>
                                                            <td><?php echo number_format($row["price"], 0, ',', '.') ?> đ</td>
                                                            <td><?php echo $row["quantity"] ?></td>
                                                            <td><?php echo $row["remain"] ?></td>
                                                            <td><?php echo $row["description"] ?></td>
                                                            <?php 
                                                            	if($row["status"]==0){
                                                            ?>
                                                            	<td>Nhập mới</td>
                                                            <?php 
                                                        		}
                                                        		else if(($row["status"]==1)){
                                                            ?>
                                                            	<td>Tồn kho</td>
                                                            <?php 
                                                            	}
                                                            ?>
                                                            <td><a href="EditProduct.php?idEditProduct=<?php echo $row["id"] ?>">Sửa</a> || <a href="?id=<?php echo $row["id"] ?>" onclick="return confirm('Bạn muốn xóa <?php echo $row["name"] ?> ')">Xóa</a></td>
                                                        </tr>
                                                    </tbody>
                                                <?php 
                                            		}
                                                ?>
                                                </table>
                                                <ul class="pagination">
        											<li style="margin: 10px;"><a href="?pageno=1">First</a></li>
        											<li style="margin: 10px;" class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            											<a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        											</li>
        											<li style="margin: 10px;" class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            											<a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        											</li>
        											<li style="margin: 10px;"><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    											</ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
	<script src="./assets/js/vendor-all.min.js"></script>
	<script src="./assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="./assets/js/pcoded.min.js"></script>

</body>

</html>
