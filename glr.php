<?php include_once('header.php'); ?>
<style type="text/css">
	.gallery{
		margin: 10px 20px;
	}
	.gallery img{
		transition: 1s;
		margin: 10px;
		width: 235px;
		height: 170px;
		border-radius: 5px;
	}
	.gallery img:hover{
		filter: grayscale(100%);
		transform: scale(1.1);
	}

</style>

<section id="contact" class="contact">
    <div class="container">
	  <div class="gallery" data-aos="fade-up">
	  	<?php 
	  		$query = mysqli_query($conn, "SELECT * FROM gallery ORDER BY glr_id DESC");
	  		while ($row = mysqli_fetch_array($query)) {  
	  	?>
	  		<a href="assets/img/gallery/<?php echo $row['file'] ?>" data-lightbox="example-set"><img src="assets/img/gallery/<?php echo $row['file'] ?>"></a>
	  	<?php } ?>
	  </div>
	</div>
</section>

<?php include_once('footer.php'); ?>