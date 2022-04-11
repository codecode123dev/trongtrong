<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
	<style>
		#detail{
			
            text-align:left;
			
			width:600px;
			float:right;
			margin:20px 0 0 0;
		}
		#pr{
			margin:10px 0 0 0;
			color:blue;
		}
	</style>


</head>
<body>
<div class="main">
        <div class="content">
        	<!-- Begin New Product -->		
	    	<div class="content_top">
	    		<div class="heading">
	    			<h3>New Products</h3>
	    		</div>
	    		<div class="see">
	    			<p><a href="index.php">See all Products</a></p>
	    		</div>
	    		<div class="clear"></div>
	    	</div>

			
			<?php
			// một sản phẩm có các trường :pid,pname,image,price,catid (mã chủng loại)
			$product = array(
				array(1,"Phone","images/phone.jpg",1000,1),
				array(2,"Loudspeaker","images/tablets5.jpg",2000,4),
				array(3,"Camera","images/tablets3.jpg",3000,4),
				array(4,"Samsung","images/tivi.png",4000,2),
				array(5,"TV","images/tablest7.jpg",5000,2),
				array(6,"Headphone","images/accessories.jpg",6000,4),
				array(7,"Tablets","images/tablets .PNG",7000,3),
				array(8,"Dell Laptop","images/laptop.jpg",8000,2)
			);
			?>
			
		<div class="section group">

<?php
// xem chi tiết ảnh
			 if(isset($_GET['pid']))
			 {
				$pid=$_GET['pid'];
				foreach($product as $p)
				{
					if($p[0]==$pid)
					{		
									
						
?>						
						<div id="detail">
							<h2>Product details:</h2>
							<h3>Smartphone or smartphone is a term that refers to a type of mobile device that combines a mobile phone with mobile computing functions into one device.</h3> <br>
							<h3>They are distinguished from feature phones by more powerful hardware capabilities and expanded mobile operating systems, enabling broader software, internet (including mobile broadband web browsing) and functionality. 
								multimedia (including music, video, camera and gaming), plus key phone functions such as voice calls and text messaging </h3><br>
							<h3>Users can change an interface (User interface) on their smartphone (wallpaper, layout of applications), as well as have the ability to install or remove an application provided on the device. Mobile application store. </h3>	<br>			
							<h3>Phone is one of the mobile devices that many “gamers” appreciate and love. Because the device owns Kirin 970 processor with up to 6GB RAM and 128GB ROM. From there, the device can operate smoothly and smoothly when using heavy applications with high processing speed. Comes with a battery with a capacity of up to 4000mAh</h3>	
						</div>
						<div class="can">
						<img src="<?= $p[2]?>" style="max-width:450px"alt="" /></a>						 
						<h2><?=$p[1]?> </h2>
						<p><span class="rupees"><?=$p[3] ?></span></p>														
						<h4><a href="preview.html">Add to Cart</a></h4>														
						</div>							
<?php
					}
				}
			 }
// chia theo thể loại
			elseif(isset($_GET['catid']))
			{
				$catid=$_GET['catid'];
				foreach($product as $p)
				{
					if($p[4]==$catid)
					{
?>		
					<div class="grid_1_of_4 images_1_of_4">
						 <a href="index.php?pid=<?=$p[0]?>"><img src="<?= $p[2]?>"  alt="" /></a>
						 
						 <h2><?=$p[1] ?> </h2>
						<div class="price-details">
						   <div class="price-number">
								<p><span class="rupees"><?=$p[3] ?></span></p>
							</div>
									   <div class="add-cart">								
										<h4><a href="preview.html">Add to Cart</a></h4>
									 </div>
								 <div class="clear"></div>
						</div>					 
					</div>
<?php
					}
				}
// search					
			}
			elseif(isset($_GET['search']))
			{
				$key = $_GET['search'];
				foreach ($product as $p)
				{
					if(strpos($p[1],$key) != false)
					{
?>		
					<div class="grid_1_of_4 images_1_of_4">
						 <a href="index.php?pid=<?=$p[0]?>"><img src="<?= $p[2]?>" alt="" /></a>
						 <h2><?=$p[1] ?> </h2>
						<div class="price-details">
						   <div class="price-number">
								<p><span class="rupees"><?=$p[3] ?></span></p>
							</div>
									   <div class="add-cart">								
										<h4><a href="preview.html">Add to Cart</a></h4>
									 </div>
								 <div class="clear"></div>
						</div>					 
					</div>
<?php
					}
				}
			}
// hiển thị
			else
		{
				foreach($product as $p)
			{
?>		
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="index.php?pid=<?=$p[0]?>"><img src="<?= $p[2]?>"  alt="" /></a>
					 <h2><?=$p[1] ?> </h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees"><?=$p[3] ?></span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview.html">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>					 
				</div>
<?php
			}
				
		}
			?> 
			<div class="clear"></div>
			
</body>
</html>