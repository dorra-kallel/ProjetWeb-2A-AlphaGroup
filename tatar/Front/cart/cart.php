<?php 

if(!isset($_SESSION)) 
{ 
	session_start(); 
} 
$nbr = 0;
$array = $_SESSION['panier'];
foreach(array_values($array) as $value) {
$nbr += $value; 
}
require_once "Controller/ArticleC.php";
$articleC=new ArticleC();

$cart_array = array();

foreach($array as $key => $value) {
	$cart_array[$value] = $articleC->getArticleById($key);
}

$total = 0;

?>
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from wpthemesgrid.com/themes/eshop/shop-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Apr 2021 19:05:07 GMT -->

<body class="js">
	
		<!-- Header -->
		<header class="header shop">
			<!-- Topbar -->
			<!-- End Topbar -->
			<div class="middle-inner">
				<div class="container">
					<div class="row">
					
						<div class="col-lg-2 col-md-3 col-12">
							<div class="right-bar">
								<!-- Search Form -->
								<div class="sinlge-bar shopping">
									<a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count"><?php echo $nbr; ?></span></a>
									<!-- Shopping Item -->
									<div class="shopping-item">
										<div class="dropdown-cart-header">
											<span><?php echo $nbr; ?> Item(s)</span>
											<a href="#">View Cart</a>
										</div>
										<ul class="shopping-list">
											<?php foreach($cart_array  as $key => $value) {?>
											<li>
											<a href="removeItem.php?id=<?php echo $value['idArticle'] ;?>&all=1" class="remove" title="Remove 1 item"><i class="fa fa-remove"></i></a>
											<a href="removeItem.php?id=<?php echo $value['idArticle'] ;?>&all=2" class="remove" style="background-color:orange; color: white; margin-left:2vw;" title="Remove All"><i class="fa fa-remove"></i></a>
											
												<a class="cart-img" href="#"><img src="images/products/<?php echo  $value['image']; ?>" alt="#"></a>
												<h4><a href="#"><?php echo  $value['nom']; ?></a></h4>
												<p class="quantity"><?php echo $key;  ?> <span class="amount"><?php echo "x ". $value['prix']." TND"; ?></span></p>
											</li>
											<?php 
										$total += ($key * $value['prix']);
										} ?>
										</ul>
										<div class="bottom">
											<div class="total">
												<span>Total</span>
												<span class="total-amount"><?php echo $total.' TND' ?></span>
											</div>
										</div>
									</div>
									<!--/ End Shopping Item -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Header Inner -->
			<!--/ End Header Inner -->
		</header>
		<!--/ End Header -->
						
		<!--/ End Product Style 1  -->	

		
		<!-- /End Footer Area -->
	
</body>

<!-- Mirrored from wpthemesgrid.com/themes/eshop/shop-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Apr 2021 19:05:12 GMT -->
</html>