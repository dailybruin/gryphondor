<?php/*
Template Name: USC Football Rivalry 2014
*/ ?>
<?php get_header(); ?>
<<<<<<< HEAD

<?php 
	//Hardcode values
	$banner_image_url = get_field('banner_image');
	$stories_tag = "football-gameday-story-2014-usc";
	$feature_tag = "football-gameday-feature-2014-usc"; 
	$graphic_of_the_week = get_field('graphic_of_the_week');
?>

<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.3.15/slick.css"/>

<style>
	#feature-story {
		margin-top: 10px;
		position: relative;
	}

	.feature-content {
		position: absolute;
		bottom: 20px;
        background-color: rgba(255,255,255,0.6);
        display: inline;
        padding: 5px 10px;
	}

	.feature-content a {
		color: black;
	}
	.feature-author {
		float: left;
		text-align: left;
	}

	.feature-title a {
		float: left;
		text-align: left;

	}

	#nonfeature-stories {
		margin: 10px;
		position: relative;
		margin-left: 0px;
	}

	.nonfeature-stories-author {
		margin: 5px 0px;
		font-weight: bold;
	}
	.nonfeature-stories-content {
	}
	.nonfeature-stories-title {
		color: black;
		font-size: 1.5em;
	}

	.thumbnail {
		float: left;
		margin-right: 10px;
		margin-bottom: 10px;
	}

	/*.right-image {
		float: left;
		padding: 128px;
	}*/

	.slick-prev:before, .slick-next:before { 
  	  color:red !important;
	}
</style>

<div class="container">
	<div class="row-fluid">
		<div class="span12">
		<img src=<?php echo $banner_image_url; ?> > 
		</div>
	</div>
	<div class="slick-slideshow">
		<div>
			<img src="http://placekitten.com/512/512">
			<div class="right-image"
			<img src="http://placekitten.com/128/128">
			</div>
		</div>
		<div>
			<img src="http://placekitten.com/128/128">
		</div>
		<div>
			<img src="http://placekitten.com/256/256">
		</div>
	</div>
	<div class="row-fluid">
		<div class="span8">
			<div class="span12" id="feature-story">
	            <?php 
					$args = array(
						'posts_per_page' => 1, 
						'tag' => $feature_tag);

					$posts = get_posts($args);

					foreach ($posts as $post) :
						setup_postdata($post);
						$categories = get_the_category($post->ID);
						echo the_post_thumbnail('large');

				?>
				<div class="feature-content">
					<h4>
					<span class="feature-author">
							By <?php the_author(); ?>
					</span>
					</h4>
					<div class="feature-title">
					<h2>
					<a class="heading" href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
					</h2>

					</div>
				</div>
				<hr style="clear:both;"/>
				<?php
					endforeach; 
				?>
			</div>

			<div class="span12" id="nonfeature-stories">
	            <?php 
					$args = array(
						'tag' => $stories_tag);

					$posts = get_posts($args);

					foreach ($posts as $post) :
						setup_postdata($post);
						$categories = get_the_category($post->ID);

				?>
				<div class="nonfeature-stories">
					<div class="content">

					<?php if ( has_post_thumbnail() ): ?>
						<a href="<?php the_permalink(); ?>">
						<div class="thumbnail">
						<?php 
							echo the_post_thumbnail('medium');
						?>
						</div>
						</a>
					<?php endif; ?>
						<div class="nonfeature-stories-content">
							<a class="nonfeature-stories-title" href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</div>
						<div class="nonfeature-stories-author">
								By <?php the_author(); ?>
						</div>
						<div class="nonfeature-stories-description">
							<p><?php echo get_the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>">More &#187;</a>
							</p>
						</div>
					</div>
				</div>
				<hr style="clear:both;" >
				<?php
					endforeach; 
				?>
			</div>
		</div>
		<div class="span4" id="vertical-graphic">
			<!--  ............  -->
		</div>
	</div>
</div>

<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.3.15/slick.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.slick-slideshow').slick({
			arrows: true,
			dots: true,
			infinite: true,
			speed: 500,
			fade: true,
			slide: 'div',
			cssEase: 'linear'
		});
	});
</script>

=======
hello world
>>>>>>> 26cda262c61f66dd40d6c228959efc192783e04b
<?php get_footer(); ?>