<div class="header">
	<!-- navigation bar -->
	
	<ul>		
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
        foreach($categories as $cat){
?>
    <li><a href="index.php?catid=<?=$cat["CatId"]?>"><?=$cat["CatName"]?></a></li>
<?php
        }
?>              
	</ul>
</div>