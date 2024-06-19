<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tiaat
 */
// $smart_slider        = get_field('smart_slider');
$time        = get_field('time');
$location        = get_field('location');
$art    = get_field('art');

get_header();
?>

    <div class="bg-white h-24 w-full"></div>

    <section class="container max-w-5xl mx-auto py-16 md:pl-0 md:pr-0">
        <a class="accesskey" href="#aM" id="aM" accesskey="M" title="主要內容區塊">:::</a>
            <h1
            class="text-3xl font-think text-center tracking-wider uppercase  border-b border-sky-700 pb-6 mb-8">
            <?php the_title(); ?>
                </h1>
        <div class="flex flex-wrap">
            <div class="w-full md:w-8/12 pl-6 pr-6 single font-thin text-gray-700">
              
      
                <?php the_content(); ?>

                <?php if( $art ):?>
                    <h4>藝術作品</h4>
                <div class="flex flex-wrap art-single">
                        <?php foreach( $art as $p ): // variable must NOT be called $post (IMPORTANT)?>
                        <div class="w-1/2 text-center">
                            <?php echo get_the_post_thumbnail($p->ID, 'medium'); ?>
                            <a
                                href="<?php echo get_permalink( $p->ID ); ?>" class="text-sky-700 text-sm"><?php echo get_the_title( $p->ID ); ?></a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <h4>其他藝術家</h4>

                <div class="flex flex-wrap">
                    <?php
                    $loop = new WP_Query(array(
                        'orderby' => 'rand',
                        'posts_per_page' => '4'
                    )); ?>
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                    <a href="<?php the_permalink(); ?>" class="inline-block w-1/2 pl-4 pr-4 md:pl-0 md:pr-0">
                        <?php 
                            the_post_thumbnail('medium', array('class'  => 'thumbnail rounded-md'));?>
                        <p class="font-light text-sm text-center"><?php the_title(); ?></p>
                    </a>
                    <?php endwhile;
                        wp_reset_query(); ?>
                </div>
            </div>
                            
            <div class="w-full md:w-4/12 pl-6 pr-6 ">
                 <div class="flex justify-center">
                 <?php the_post_thumbnail('', array('class'  => 'object-cover rounded-full h-52 w-52')); ?>
                 </div>
                 <hr class="my-8"/>
                 <div class="bg-gray-100 rounded shadow mt-8 p-4 text-light ">
                 	<ul class="text-orange-300 text-sm">
                     	<li class="mb-4">藝術家-1</li>
                        <li class="mb-4">藝術家-2</li>
                     	<li>藝術家-3</li>
                    </ul>
                 </div>

            </div>
        </div>
    </section>

<?php
get_footer();