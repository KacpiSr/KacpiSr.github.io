<?php if (have_rows('category_section')) : ?>
		<?php while (have_rows('category_section')) : the_row(); ?>
			<section class="case-studies-item">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="case-studies-content case-studies-content--all-projects">
								<div class="row">
									<?php if (have_rows('projects')) : ?>
										<?php while (have_rows('projects')) : the_row(); ?>
											<div class="col-lg-6 case-studies-content__column">
												<?php $post_object = get_sub_field('project'); ?>
												<?php if ($post_object) : ?>
													<?php $post = $post_object; ?>
													<?php setup_postdata($post); ?>
													<a href="<?php the_permalink(); ?>">
														<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail'); ?>
														<img class="case-studies-content__image" src="<?php echo $image[0]; ?>" alt="">
														<?php if (have_rows('description')) : ?>
															<div class="case-studies-content__heading">
																<?php the_title(); ?>
															</div>
															<ul class="case-studies-content__description">
																<?php while (have_rows('description')) : the_row(); ?>

																	<li>
																		<?php the_sub_field('description'); ?>
																	</li>

																<?php endwhile; ?>
															</ul>
														<?php else : ?>
															<?php // no rows found 
															?>
														<?php endif; ?>
													</a>
													<?php wp_reset_postdata(); ?>
												<?php endif; ?>
											</div>
										<?php endwhile; ?>
									<?php else : ?>
										<?php // no rows found 
										?>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php endwhile; ?>
	<?php else : ?>
		<?php // no rows found 
		?>
	<?php endif; ?>
	<?php get_template_part('template-page/case-studies/category-boxes') ?>