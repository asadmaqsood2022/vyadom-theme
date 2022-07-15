<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vyadom
 */

?>

   <!-- footer section starts here -->
   <footer>
        <div class="footer-top">
            <div class="container">
                <div class="footer-inner">
                    <div class="footer-logo">
					<?php 
						$image = get_field('footer_logo','options');
						if( !empty( $image ) ): ?>
                        <a href="javascript:void(0)"> <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
						<?php endif; ?>
						<?php if( get_field('footer_text', 'options') ): ?>
							<p><?php the_field('footer_text', 'options'); ?></p>
						<?php endif; ?>
                    </div>
                    <div class="contact-us">
                        <h4>CONTACT US</h4>
                        <ul>
							<?php if( get_field('footer_address', 'options') ): ?>
								<li><a href=""><?php the_field('footer_address', 'options'); ?></a></li>
							<?php endif; ?>
							<?php if( get_field('footer_phone_number', 'options') ): ?>
								<li><a href="tel:<?php the_field('footer_phone_number', 'options'); ?>">Tel: <?php the_field('footer_phone_number', 'options'); ?></a></li>
							<?php endif; ?>
							<?php if( get_field('footer_email', 'options') ): ?>
								<li><a href="mailto:<?php the_field('footer_email', 'options'); ?>">Email: <?php the_field('footer_email', 'options'); ?></a></li>
							<?php endif; ?>
                        </ul>
                    </div>
                    <div class="gallery">
                        <h5>Gallery</h5>

						<?php 
							$images = get_field('footer_gallery', 'options');
						//	var_dump(	$images);
							$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
							if( $images ): ?>
								<ul>
									<?php foreach( $images as $image_id ): ?>
										<li>
											<?php echo wp_get_attachment_image( $image_id, $size ); ?>
										</li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-rights">
            <div class="container">
				<?php if( get_field('copyright_text', 'options') ): ?>
               	 <p><?php the_field('copyright_text', 'options'); ?> <a href="<?php the_field('copyright_website_link', 'options'); ?>"><?php the_field('copyright_website', 'options'); ?>.</a></p>
				<?php endif; ?>
            </div>
        </div>
    </footer>
    <!-- footer section ends here -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
