<?php include_once('header.php'); ?>

<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
	  <div class="gallery">
	  	<?php 
	  		$query = mysqli_query($conn, "SELECT * FROM gallery ORDER BY glr_id DESC");
	  		while ($row = mysqli_fetch_array($query)) {  
	  	?>	
	  		<a href="assets/img/gallery/<?php echo $row['file'] ?>"><img src="assets/img/gallery/<?php echo $row['file'] ?>"></a>	  	
	  	<?php } ?>
	  </div>
	</div>
</section>

<?php include_once('footer.php'); ?>