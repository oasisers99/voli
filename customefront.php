<?php /* Template Name: CustomPageT1 */ ?>
<?php get_header(); ?>
<div class="sub-page-contents">

	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<main id="main" role="main">

					<?php get_template_part( 'modules/breadcrumbs' ); ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', 'page' ); ?>
					<?php endwhile; ?>

						<div class="box-head">
							Hi 'Bob'!</br>
							Thank you for using your time powerfully!
						</div>

				<!-- end #main --></main>
			<!-- end .col-md-9 --></div>

		<!-- end .row --></div>
	<!-- end .container --></div>

<!-- end .sub-page-contents --></div>
