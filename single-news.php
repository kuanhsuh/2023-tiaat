<?php
get_header(); ?>
 <div class="bg-white h-24 w-full"></div>

    <header>
        <img src="https://images.pexels.com/photos/1260841/pexels-photo-1260841.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
            alt="<?php the_title(); ?>" class="object-cover h-80 w-full">
    </header>

    <section class="container max-w-3xl mx-auto py-16 pl-6 pr-6 md:pl-0 md:pr-0">
        <a class="accesskey" href="#aM" id="aM" accesskey="M" title="主要內容區塊">:::</a>
        <h2
            class="text-3xl tracking-wider text-sky-700 uppercase font-medium border-b border-sky-700 pb-6 mb-8">
           <?php the_title(); ?>
           <div class="social mt-4 text-sm"><?php echo do_shortcode("[post-views]"); ?></div>
    
        </h2>

        <?php the_content(); ?>


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

    </section>

<?php
get_footer();