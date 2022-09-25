<?php
/*
Template Name: Категории
Template Post Type: post, page, product
*/
get_header();
?>
	<div class="wr-about">
		<img src="<?php echo get_template_directory_uri() ?>/img/backgroundmainpage/header.svg" alt="" class="background-about second-scr__rellax">
		<img src="<?php echo get_template_directory_uri() ?>/img/backgroundmainpage/header.svg" alt="" class="background-about__sec second-scr__rellax">
		<div class="container">
			<div class="row">
				<div class="col about-headlings">
					<p class="about-headlings__p"><?php echo CFS()->get( 'categories_main_h_text' ) ?></p>
					<div data-aos="fade-up">
					<h1>
						<span class="about-headlings__h2-first"><?php echo CFS()->get( 'categories_main_h_1' ) ?></span>
						<br>
						<span class="about-headlings__h2-second"><?php echo CFS()->get( 'categories_main_h_2' ) ?></span>
					</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row g-0 categories-main-img">
				<div class="col-auto">
					<img src="<?php echo CFS()->get( 'categories_img' ) ?>" alt="">
				</div>
				<div class="col-auto">
					<div class="benefits-cat" id="service">
						<?php
							$categories__main_loop = CFS()->get( 'categories__main_loop' );
							foreach ( $categories__main_loop as $categories__main_row ) {
						?>
						<div class="benefits-cat__block">
							<p class="benefits__block-h"><?php echo $categories__main_row['categories__blue']; ?></p>
							<p class="benefits__block-p"><?php echo $categories__main_row['categories__main_p']; ?></p>
						</div>
						<?php
							}
						?>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container about">
			<div class="row chemical-content">
				<?php
					$categories_item_loop = CFS()->get( 'categories_item_loop' );
					foreach ( $categories_item_loop as $categories_row ) {
				?>
				<div class="col-md-6 col-lg-4">
					<a href="<?php echo $categories_row['categories_item_link']; ?>" class="categories-content__block">
						<p class="chemical-content__block-name"><?php echo $categories_row['categories_item_h']; ?></p>
						<p class="chemical-content__block-desc"><?php echo $categories_row['categories_item_desc']; ?></p>
						<div class="chemical-content__block-img">
							<img src="<?php echo $categories_row['categories_item_img']; ?>" alt="">
						</div>
						<div class="row g-0 align-items-center justify-content-between align-self-end">
							<div class="col-auto align-self-end">
								<p class="chemical-content__block-price"><?php echo $categories_row['categories_item_price']; ?></p>
							</div>
							<div class="col-auto align-self-end">
								<p class="chemical-content__block-size"><?php echo $categories_row['categories_item_data']; ?></p>
							</div>
						</div>
					</a>
				</div>
				<?php
					}
				?>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-9 chemical-content-seo-text">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
	



<?php
get_footer();