<?php
/* Template Name: 一般頁面 Page */
get_header(); ?>


<div class="bg-white h-24 w-full"></div>

    <header>
        <img src="https://images.pexels.com/photos/1260841/pexels-photo-1260841.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
            alt="<?php the_title(); ?>" class="object-cover h-80 w-full">
    </header>

    <section class="container max-w-3xl mx-auto py-16 pl-6 pr-6 md:pl-0 md:pr-0">
        <a class="accesskey" href="#aM" id="aM" accesskey="M" title="主要內容區塊">:::</a>
        <h2 class="text-4xl tracking-wider text-sky-700 uppercase font-medium border-b border-sky-700 pb-6 mb-8">
            <?php the_title(); ?>
        </h2>
        <div class="single">
            <?php the_content(); ?>
        </div>
        
    </section>

<?php
get_footer();