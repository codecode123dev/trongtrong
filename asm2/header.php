<div class="header">
		<div class="header_top">
			<div  class="logo">
				<a href="index.php"><img width="200" height="100"  src="images/logo2.jpg" alt="" /></a>
			</div>
            
			  <div class="cart">
			  	   <p>Welcome to our Online Store! <span>Cart:</span><div id="dd" class="wrapper-dropdown-2"> 0 item(s) - $0.00
			  	   	<ul class="dropdown">
							<li>you have no items in your Shopping cart</li>
					</ul></div></p>
                    <button class="sign"><a href="contact.php">Sign In</a> </button>	
			  </div>		
	 		<div class="clear"></div>
  			</div>
		<div class="header_bottom">
	     
	     	
        <?php
        $categories = array(
            array("CatId"=>1 ,"CatName"=>"Smart Phone"),
            array("CatId"=>2,"CatName"=>"Laptop"),
            array("CatId"=>3,"CatName"=> 'Tab'),
            array("CatId"=>4,"CatName"=>'Accessories')
        );
        ?>
            <div class="header_bottom">
                <div class="menu">
                    <ul>
                        <li class="active"><a href="index.php">Home</a></li>
<?php   
                     foreach($categories as $cat)
                     {
?>
                    <li><a href="index.php?catid=<?=$cat["CatId"]?>"><?=$cat["CatName"]?></a></li>
<?php
                     }
?>              
                     <div class ="clear" ></div>
                    </ul>
                    </div>
                    </div>
                    <div class="search_box">
	     		<form>
	     			<input type="text" value="Search" name= "search" onfocus="this.value = '';" onblur="
                     if (this.value == '') {this.value = 'Search';}">
	     			<input type="button" value="" onclick="document.form[0].submit();">
	     		</form>
	     	    </div>
	     	    <div class="clear"></div>
		        </div>