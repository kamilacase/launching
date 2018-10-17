<?php
/*
Template Name: launching
Template Post Type: post, page, product
*/



?>

<body>


	<?php get_header("launching"); ?>


	<?php
	$id=get_the_id();

	$date_release=get_post_meta($id, 'date_release')[0];
    $dtz = new DateTimeZone("Europe/Paris"); //Your timezone
    $start = new DateTime( 'now', new DateTimeZone('Europe/Paris'));
    var_dump($start);
    echo $date_release;
    $end = new DateTime($date_release);
    $duration = $end->Diff($start);

?>

	<div class="container-fluid">

		<div id="primary" class="content-area">
			<main id="main" class="launching site-main">
                <i class="fab fa-fort-awesome"></i>
				<h1>WE ARE LAUNCHING IN</h1>
				<div id="count"> <?php echo $duration->format('%Y %m %d %h:%i:%s'); ?> </div>

				<p id="countdown"></p>


				<p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit doloremque non aliquid tempora corporis, dolorum aspernatur incidunt totam esse dolore ad, atque praesentium quia culpa excepturi, facilis alias consequatur asperiores.</p>
				<p class="text">bla bla codi n camp</p>

				<button class="btn btn-danger" type="submit">Notify me</button>
				<button type="button" class="btn btn-outline-light">About us</button>

                <ul class="social-network">
                    <li>
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                    </li>
                </ul>

			</main><!-- #main -->
		</div><!-- #primary -->

	</div>
<?php
get_footer("launching");
?>
</body>
</html>
<?php
