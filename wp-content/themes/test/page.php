<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package test
 */

get_header();
?>

	
    <div class="main__content">


      <div class="main__content__info-block">

        <h2><?php the_field('text_output_title'); ?></h2>
        <p><?php the_field('text_output_content'); ?></p>
      </div>
      <div class="main__content__numbers-block">


        <h2>The Numbers </h2>
        <div class="main__content__numbers-block-items">
          <div class="main__content__numbers-block-item">
      <span class="number first-number" data-max="1000">0</span>
      <h3>Lorem Ipsum </h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet dolor ex. Sed pellentesque interdum condimentum. Vivamus laoreet urna dui, eget hendrerit mi imperdiet in. Curabitur non tellus id risus tempor feugiat eget a lectus. Nulla a purus velit. Suspendisse eleifend mollis est ut vulputate. Ut velit ex, tempor consequat mollis sit amet, pellentesque dapibus mi. Praesent tincidunt felis massa, ac ultricies justo feugiat vitae. Integer a sapien enim. Vivamus id vulputate massa, et placerat orci. Vestibulum sodales neque nec tellus congue tristique. Morbi a maximus ipsum. Suspendisse ullamcorper tincidunt aliquam. Aenean vulputate est nec lacus ullamcorper, ut placerat massa dignissim. Donec sollicitudin in ipsum nec finibus. </p>

          </div>
          <div class="main__content__numbers-block-item">
            <span class="number second-number" data-max="450">0</span>
            <h3>Lorem Ipsum </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet dolor ex. Sed pellentesque interdum condimentum. Vivamus laoreet urna dui, eget hendrerit mi imperdiet in. Curabitur non tellus id risus tempor feugiat eget a lectus. Nulla a purus velit. Suspendisse eleifend mollis est ut vulputate. Ut velit ex, tempor consequat mollis sit amet, pellentesque dapibus mi. Praesent tincidunt felis massa, ac ultricies justo feugiat vitae. Integer a sapien enim. Vivamus id vulputate massa, et placerat orci. Vestibulum sodales neque nec tellus congue tristique. Morbi a maximus ipsum. Suspendisse ullamcorper tincidunt aliquam. Aenean vulputate est nec lacus ullamcorper, ut placerat massa dignissim. Donec sollicitudin in ipsum nec finibus.
</p>
                </div>
                <div class="main__content__numbers-block-item">
                  <span class="number third-number" data-max="5">0</span>
                  <h3>Lorem Ipsum </h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet dolor ex. Sed pellentesque interdum condimentum. Vivamus laoreet urna dui, eget hendrerit mi imperdiet in. Curabitur non tellus id risus tempor feugiat eget a lectus. Nulla a purus velit. Suspendisse eleifend mollis est ut vulputate. Ut velit ex, tempor consequat mollis sit amet, pellentesque dapibus mi. Praesent tincidunt felis massa, ac ultricies justo feugiat vitae. Integer a sapien enim. Vivamus id vulputate massa, et placerat orci. Vestibulum sodales neque nec tellus congue tristique. Morbi a maximus ipsum. Suspendisse ullamcorper tincidunt aliquam. Aenean vulputate est nec lacus ullamcorper, ut placerat massa dignissim. Donec sollicitudin in ipsum nec finibus.
                  </p>
                      </div>
        </div>
      </div>
      <div class="main__content__testimonials-block">
        <div class="main main__content__testimonials-block ">
        <div class="testimonial-pic"><?php the_field('video'); ?></div>
			
        <div class="main__content__testimonials-block_content "><h2>Testimonials </h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet dolor ex. Sed pellentesque interdum condimentum. </p>
        </div></div>
      </div>
      <div class="main__content__posts-block">
     
<h2>We know it works</h2>
		 
 <div class="main__content__posts-block-items">

<?php>
$featured_posts = get_field('posts');
if( $featured_posts ): ?>
    <ul>
    <?php foreach( $featured_posts as $featured_post ): 
        $permalink = get_permalink( $featured_post->ID );
        $title = get_the_title( $featured_post->ID );
		$thumbnail = get_field( 'custom_thumbnail', $featured_post->ID );
        $content = get_field( 'short_description', $featured_post->ID );
   
		
        ?>
        <li class="post__testimonial">
           
			<img src='<?php echo esc_html($thumbnail); ?>'class ='post__testimonial-pic'>
			 <a href="<?php echo esc_url( $permalink ); ?>" class='post__title'><?php echo esc_html( $title ); ?></a>
			 <span  class='post__content'><?php echo esc_html( $content ); ?></span>
			 <a href="<?php echo esc_url( $permalink ); ?>" class='read__more'>Read more</a>
			
			
			
        </li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>
</div>
		 
		



      </div>
      <div class="main__content__download-block"> <div class="bottom-wrapper">
		  
		 <h2 class="download-main_title">Download more information </h2>
       
<div class="main-download-container">
<div class="download-container"> <span class="download-title">Lorem ipsum dolor sit amet, consectetur. </span><a class="download-btn" href="<?php the_field('download_file'); ?>"  >Download</a></div>
<div class="download-container"> <span class="download-title">Lorem ipsum dolor sit amet, consectetur. </span> <a href="#"  class="download-btn">Download</a></div>
<div class="download-container"> <span class="download-title">Lorem ipsum dolor sit amet, consectetur. </span> <a href="#"  class="download-btn">Download</a></div>
</div>
<div class="main-download-container">
<div class="download-container"> <span class="download-title">Lorem ipsum dolor sit amet, consectetur. </span> <a href="#"  class="download-btn">Download</a></div>
<div class="download-container"> <span class="download-title">Lorem ipsum dolor sit amet, consectetur. </span> <a href="#"  class="download-btn">Download</a></div>
<div class="download-container"> <span class="download-title">Lorem ipsum dolor sit amet, consectetur. </span> <a href="#"  class="download-btn" download="proposed_file_name">Download</a></div>
	<button type="submit" onclick="window.open('file.doc')">Download!</button>
	<button type="submit" onclick="window.location.href='file.doc'">Download!</button>
	<input type="button" value="Download Now!" onclick="window.location = 'file.doc';">
</div>			


       </div>
 </div>
    </div>


<?php
get_footer();
