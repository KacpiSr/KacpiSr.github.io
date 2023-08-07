<section class="services-block-categories colored-element-bg">
	<div class="container">
		<div class="row">
			<div class="col-12 services-block-categories__column">
				<?php if (have_rows('sections')) : ?>
					<ul class="services-block-categories__items">
						<?php while (have_rows('sections')) : the_row(); ?>
							<li class="services-block-categories__item">
								<?php $section = get_sub_field('section'); ?>
								<?php if ($section) { ?>
									<a data-scroll="<?php echo $section['url']; ?>" class="services-block-categories__link" href="<?php echo $section['url']; ?>"><?php echo $section['title']; ?></a>
								<?php } ?>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php else : ?>
					<?php // no rows found 
					?>
				<?php endif; ?>
				<span class="services-block-categories__scroll services-block-categories__scroll--right btn btn__white--transparent"></span>
				<span class="services-block-categories__scroll services-block-categories__scroll--left colored-element-gradient btn btn__white--transparent"></span>
				<?php $link = get_field( 'link' ); ?>
<?php if ( $link ) { ?>
	<a class="services-block-categories__btn btn btn__white--transparent services-block-categories__btn--desktop" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
<?php } ?>
			</div>
		</div>
	</div>
</section>
<?php if ( $link ) { ?>
	<a class="colored-element-bg services-block-categories__btn btn btn__white--transparent services-block-categories__btn--mobile" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
<?php } ?>