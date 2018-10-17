<?php
/*
Template Name: launching
Template Post Type: post, page, product
*/

      

?>

<body>
		
		
	<?php get_header("launching"); ?>


	<?php
	$id=23;
	$date_release=get_post_meta($id, 'date_release')[0];
	$day_release=get_post_meta($id, 'date_release')[1];
	$title=get_post_meta($id, 'Title')[0];
	
?>

	<div class="container-fluid">

		<div id="primary" class="content-area">
			<main id="main" class="launching site-main">

				<h1> <?php echo $title ?></h1>
				<!-- <div id="count"> <?php echo $date_release ?> </div> -->
				<!-- <div id="countlegend"> <?php echo $day_release ?> </div> -->

				<p id="countdown"></p>
				
				
				<p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit doloremque non aliquid tempora corporis, dolorum aspernatur incidunt totam esse dolore ad, atque praesentium quia culpa excepturi, facilis alias consequatur asperiores.</p>
				<p class="text">bla bla codi n camp</p>
				
				<button class="btn btn-danger" type="submit">Notify me</button>
				<button type="button" class="btn btn-outline-light">About us</button>
				
				
			</main><!-- #main -->
		</div><!-- #primary -->
		
	</div>
<?php
get_footer("launching");
?>
</body>
</html>
<?php
