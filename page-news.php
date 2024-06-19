<?php
/* Template Name: 最新消息 Page */
get_header(); ?>


<div class="bg-white h-24 w-full"></div>
     <section class="container max-w-5xl mx-auto border-t-4 py-8 border-sky-700 pl-6 pr-6 md:pl-0 md:pr-0">
        <a class="accesskey" href="#aM" id="aM" accesskey="M" title="主要內容區塊">:::</a>
        <h2 class="text-3xl text-center tracking-wider text-sky-700 uppercase font-medium">新聞/影音</h2>


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

        </div>
    </section>


<?php
get_footer();