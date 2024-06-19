<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tiaat
 */
$slider        = get_field('slider');
$display_date        = get_field('display_date');
$location        = get_field('location');
$artist        = get_field('artist');


get_header();
?>

    <div class="bg-white h-24 w-full"></div>

    <header class="container mx-auto max-w-5xl">
        <?php echo $slider; ?>
    </header>

    <section class="container max-w-5xl mx-auto py-16 md:pl-0 md:pr-0">
<a class="accesskey" href="#aM" id="aM" accesskey="M" title="主要內容區塊">:::</a>
        <div class="flex flex-wrap">
            <div class="w-full md:w-4/12 pl-6 pr-6">
                <h5
                    class="text-xl tracking-wider flex items-center justify-between font-medium border-b border-sky-700 pb-2 mt-4 mb-2">
                    場次時間

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                        stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                </h5>
                <p class="font-normal">
                    <?php echo $display_date; ?>
                </p>
                <h5
                    class="text-xl tracking-wider flex items-center justify-between font-medium border-b border-sky-700 pb-2 mt-4 mb-2">
                    地點
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                        stroke="currentColor" class="w-8 h-8 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>

                </h5>
                <p class="font-normal">
                    <?php echo $location; ?>
                </p>
             <h5
                    class="text-xl tracking-wider flex items-center justify-between font-medium border-b border-sky-700 pb-2 mt-4 mb-2">
                    SHARE +

                </h5>
                 <!-- Sharingbutton Facebook -->
            <a class="resp-sharing-button__link" href="https://facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsharingbuttons.io" target="_blank" rel="noopener" aria-label="" title="facebook 分享連結"><img src="<?php bloginfo('template_directory'); ?>/img/icon-fb.png" alt="facebook 分享連結" class="h-8"></a>

            <!-- Sharingbutton E-Mail -->
            <a class="resp-sharing-button__link" href="mailto:?subject=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;body=http%3A%2F%2Fsharingbuttons.io" target="_self" rel="noopener" aria-label="" title="email 分享連結">
            <img src="<?php bloginfo('template_directory'); ?>/img/icon-email.png" alt="email 分享連結" class="h-8"></a>

            <!-- Sharingbutton Pinterest -->
            <a class="resp-sharing-button__link" href="https://pinterest.com/pin/create/button/?url=http%3A%2F%2Fsharingbuttons.io&amp;media=http%3A%2F%2Fsharingbuttons.io&amp;description=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking." target="_blank" rel="noopener" aria-label="" title="pinterest 分享連結"><img src="<?php bloginfo('template_directory'); ?>/img/icon-pinterest.png" alt="pinterest 分享連結" class="h-8"></a>
            <div class="social mt-4 text-sm"><?php echo do_shortcode("[post-views]"); ?></div>

            </div>
            <div class="w-full md:w-8/12 pl-6 pr-6 single">
                <h1
                    class="text-3xl tracking-wider text-sky-700 uppercase font-medium border-b border-sky-700 pb-6 mb-8">
                    <?php the_title(); ?>
                </h1>
             
                <?php the_content(); ?>

                <?php if( $artist ):?>
                <h4>藝術家</h4>
                <div class="flex flex-wrap art-single">
                        <a href="<?php echo get_permalink( $artist[0]->ID ); ?>" class="w-1/2 text-center text-sky-700">
                            <?php echo get_the_post_thumbnail($artist[0]->ID, 'medium', array('class'  => 'rounded-md')); ?>
                            <?php echo get_the_title( $artist[0]->ID ); ?>
                        </a>
                    </div>
                <?php endif; ?>


                <h4>其他藝術作品</h4>

                <div class="flex flex-wrap">
                    <?php
                    $loop = new WP_Query(array(
                        'post_type' => 'art',
                        'orderby' => 'rand',
                        'posts_per_page' => '4'
                    )); ?>
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                    <a href="<?php the_permalink(); ?>" class="inline-block w-1/2 pl-4 pr-4 md:pl-0 md:pr-0">
                        <?php 
                            the_post_thumbnail('medium', array('class'  => 'thumbnail rounded-md'));?>

                        <p class="font-light text-sky-700 text-sm text-center"><?php the_title(); ?></p>
                    </a>
                    <?php endwhile;
                        wp_reset_query(); ?>
                </div>

            </div>
        </div>
    </section>

<?php
get_footer();