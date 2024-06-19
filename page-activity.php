<?php
/* Template Name: 活動總覽 Page */
get_header(); ?>

<div class="bg-white h-24 w-full"></div>
    <section class="container max-w-5xl mx-auto border-t-4 py-8 border-sky-700 pl-6 pr-6 md:pl-0 md:pr-0">
        <a class="accesskey" href="#aM" id="aM" accesskey="M" title="主要內容區塊">:::</a>
        <h2 class="text-3xl tracking-wider text-sky-700 uppercase font-medium">活動總覽</h2>
       


        <div class="flex flex-wrap -mx-6 mt-8">
            <?php
            // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $loop = new WP_Query(array(
                'post_type' => 'activity',
                'orderby' => 'post_id',
                'order' => 'ASC',
                'posts_per_page' => '4'
                // 'paged' => $paged
            )); ?>
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
            <div class="w-full md:w-4/12 rounded pl-6 pr-6 mb-6 ">
                <a href="<?php the_permalink(); ?>" class="card shadow-md inline-block rounded-md overflow-hidden">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('medium', array('class'  => 'rounded-lg'));
                    } else {
                    ?>
                        <img src="<?php bloginfo('template_directory'); ?>/img/activity.jpg" alt="活動照片" class="">
                    <?php } ?>
                    <div class="p-4">
                        <h3 class="text-xl font-medium "><?php the_title(); ?></h3>
                        <p class=" mt-4"><?php $content = get_the_content(); echo wp_trim_words( get_the_content(), 20, '...' );?></p>

                        <p class="mt-4 text-sm text-sky-600"><?php echo get_field('activity_date'); ?></p>
                    </div>
                </a>
            </div>
            <?php endwhile;
            wp_reset_query(); ?>
           

        </div>
    </section>


<?php
get_footer();