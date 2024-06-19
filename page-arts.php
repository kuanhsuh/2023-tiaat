<?php
/* Template Name: 作品總覽 Page */
get_header(); ?>

<div class="bg-white h-24 w-full"></div>
    <section class="container max-w-5xl mx-auto border-t-4 py-8 border-sky-700 pl-6 pr-6 md:pl-0 md:pr-0">
        <a class="accesskey" href="#aM" id="aM" accesskey="M" title="主要內容區塊">:::</a>
        <h2 class="text-3xl tracking-wider text-sky-700 uppercase font-medium">作品總覽</h2>
        <!-- <div class="mt-4">
            <a href="#"
                class="bg-white hover:bg-sky-600 hover:text-sky-900 hover:text-white transition-all border border-sky-700 duration-500 text-sky-700 px-6 py-3 rounded-lg font-medium inline-block mr-4">分類1</a>
            <a href="#"
                class="bg-white hover:bg-sky-600 hover:text-sky-900 hover:text-white transition-all border border-sky-700 duration-500 text-sky-700 px-6 py-3 rounded-lg font-medium inline-block mr-4">分類1</a>
            <a href="#"
                class="bg-white hover:bg-sky-600 hover:text-sky-900 hover:text-white transition-all border border-sky-700 duration-500 text-sky-700 px-6 py-3 rounded-lg font-medium inline-block mr-4">分類1</a>
        </div> -->


        <div class="flex flex-wrap -mx-6 mt-8">
      <?php
            // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $loop = new WP_Query(array(
                'post_type' => 'art',
                'orderby' => 'post_id',
                'order' => 'ASC',
                'posts_per_page' => '4'
                // 'paged' => $paged
            )); ?>
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
            <div class="w-full md:w-4/12 rounded pl-6 pr-6 mb-6 ">
                <a href="<?php the_permalink(); ?>" class="card link--arrowed inline-block shadow-md rounded-md overflow-hidden">
                    <?php the_post_thumbnail('medium');?>
                    <div class="p-4">
                        <h3 class="text-xl font-medium ">
                           <?php the_title(); ?></h3>
                        <p class=" mt-4"><?php $content = get_the_content(); echo wp_trim_words( get_the_content(), 40, '...' );?></p>

                        <div class="flex justify-between items-center">
                         <p class="mt-4 text-sm text-sky-600"><?php echo get_field('display_date'); ?></p>
        
                        <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32">
                        <g fill="none" stroke="#2175FF" stroke-width="1.5" stroke-linejoin="round" stroke-miterlimit="10">
                            <circle class="arrow-icon--circle" cx="16" cy="16" r="15.12"></circle>
                            <path class="arrow-icon--arrow" d="M16.14 9.93L22.21 16l-6.07 6.07M8.23 16h13.98"></path>
                        </g>
                        </svg>
                        </div>
                       
                    </div>
                </a>
            </div>
<?php 		endwhile;     wp_reset_query();?>
        </div>
    </section>

<?php
get_footer();