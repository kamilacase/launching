<?php
/*
Template Name: launching
Template Post Type: post, page, product
*/



?>

	<?php get_header("launching"); ?>


	<?php
	$id=get_the_id();

	$date_release=get_post_meta($id, 'date_release')[0];
    $dtz = new DateTimeZone("Europe/Paris"); //Your timezone
    $start = new DateTime( 'now', new DateTimeZone('Europe/Paris'));
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


				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
 Notify me
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	</div>
		<form id="formsavemail" action="." method="post">
      		<div class="modal-body">
				<input type="email" name="email" id="email" placeholder="votre email ici">
		   	</div>
		   	<div class="modal-footer">
			   	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			   	<button type="submit" class="btn btn-primary">Envoyer </button>
			</div>
		</form>

    </div>
    </form>
  </div>
</div>
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
