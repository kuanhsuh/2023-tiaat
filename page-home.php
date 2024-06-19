<?php
/* Template Name: 首頁 Page */


$timeline1title        = get_field('timeline-1-title');
$timeline1        = get_field('timeline-1');
$timeline2title        = get_field('timeline-2-title');
$timeline2        = get_field('timeline-2');
$timeline3title        = get_field('timeline-3-title');
$timeline3        = get_field('timeline-3');
$timeline4title        = get_field('timeline-4-title');
$timeline4        = get_field('timeline-4');

get_header(); ?>


	<header class="mt-20">
        <?php
        echo do_shortcode('[smartslider3 slider="24"]');
        ?>
    </header>
    
    <section class="container max-w-5xl mx-auto py-16 pl-4 pr-4 md:pl-0 md:pr-0">
        <h2 class="text-4xl tracking-wider text-sky-700 uppercase font-medium mb-16 text-center">新聞</h2>
            <div class="flex flex-wrap -mx-6 mt-8 news">
            <div class="w-full sm:w-10/12 pl-6 pr-6 mx-auto">
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 rounded-md">
                    <table class="w-full text-center border-collapse rounded-sm">
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="w-1/5">日期</th>
                                <th class="w-4/5">內容</th>
                            </tr>
                        </thead>
                        <tbody>
                             <?php
                            // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $loop = new WP_Query(array(
                                'post_type' => 'news',
                                'orderby' => 'post_id',
                                'order' => 'ASC',
                                'posts_per_page' => '4'
                                // 'paged' => $paged
                            )); ?>
                            <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                            <tr>
                                <td><a href="<?php the_permalink(); ?>" class="text-blue-700"><?php the_date(); ?></a></td>
                                <td><a href="<?php the_permalink(); ?>" class="text-blue-700"><?php the_title(); ?></a></td>
                            </tr>

                            <?php endwhile;
                            wp_reset_query(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
                    
    </section>                    

    <section class="container max-w-5xl mx-auto py-16 pl-4 pr-4 md:pl-0 md:pr-0">
        <h2 class="text-4xl tracking-wider text-sky-700 uppercase font-medium mb-16 text-center">最新活動</h2>
        <div class="flex flex-wrap -mx-4 mt-8">

            <?php
            // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $loop = new WP_Query(array(
                'post_type' => 'activity',
                'orderby' => 'post_id',
                'order' => 'ASC',
                'posts_per_page' => '3'
                // 'paged' => $paged
            )); ?>
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="inline-block w-full md:w-1/3 pl-4 pr-4" title="<?php the_title(); ?>">
                <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('medium', ['class' => 'rounded-lg h-52']);
                } else {
                ?>
                    <img src="<?php bloginfo('template_directory'); ?>/img/activity.jpg" alt="活動照片" class="h-52">
                <?php } ?>
                <p class="text-center"><?php the_title(); ?></p>
                 <p class="text-center"><?php the_date(); ?></p>
            </a>
            <?php endwhile;
            wp_reset_query(); ?>
        </div>
    </section>
                
    <section class="container max-w-5xl mx-auto py-16 pl-4 pr-4 md:pl-0 md:pr-0 relative">
<a class="accesskey" href="#aM" id="aM" accesskey="M" title="主要內容區塊">:::</a>

        <h2 class="text-4xl text-center tracking-wider text-sky-700 uppercase font-medium mb-16">臺灣國際南島藝術三年展</h2>
        <div class="flex flex-wrap -mx-4 mt-8">
            <div class="pl-4 pr-4 gap-8 columns-2">
                <p><?php the_content(); ?></p>
            </div>
             <div class=" text-center mt-16 w-full">
             <a href="<?php echo esc_html(site_url('/about')) ?>"
                    class="bg-sky-700 hover:bg-sky-600 transition-all duration-500 text-white pl-6 pr-6 py-3 rounded-lg font-medium inline-block" title="關於展覽連結">了解更多</a>
             </div>       

        </div>
    </section>


    <section class="container max-w-5xl mx-auto py-16 md:pl-0 md:pr-0">
        <h2 class="text-4xl tracking-wider text-sky-700 uppercase font-medium mb-16 text-center">時間線</h2>
        <div class="flex flex-wrap -mx-4 mt-16">
            <div class="w-full">
             
<div class="timeline-container">
          <div class="timeline-block">
            <div class="iconic"><i class="fa fa-graduation-cap"></i></div>
            <div class="text">
              <header class="heading">
                <h4 class="title"><?php echo $timeline1title; ?></h4>
              </header>
              <p>
                <?php echo $timeline1; ?></p>
            </div>
          </div>

          <div class="timeline-block">
            <div class="iconic"><i class="fa fa-barcode"></i></div>
            <div class="text">
              <header class="heading">
                <h4 class="title"><?php echo $timeline2title; ?></h4>
              </header>
              <p>
                <?php echo $timeline2; ?></p>
            </div>
          </div>

          <div class="timeline-block">
            <div class="iconic"><i class="fa fa-id-card"></i></div>
            <div class="text">
              <header class="heading">
                <h4 class="title"><?php echo $timeline3title; ?></h4>
              </header>
              <p>
                <?php echo $timeline3; ?></p>
            </div>
          </div>

          <div class="timeline-block">
            <div class="iconic"><i class="fa fa-book"></i></div>
            <div class="text">
              <header class="heading">
                <h4 class="title"><?php echo $timeline4title; ?></h4>
              </header>
              <p>
                <?php echo $timeline4; ?></p>
            </div>
          </div>
        </div>
            </div>



        </div>
    </section>


<?php
get_footer();