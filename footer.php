<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tiaat
 */

?>
<footer class="bg-sky-900 text-white pl-4 pr-4 md:pl-0 md:pr-0 py-16 relative">
<a class="accesskey" href="#aF" id="aF" accesskey="F" title="頁尾區塊">:::</a>

        <div class="container mx-auto max-w-4xl">
            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2">
                    <ul>
                        <li class="text-xl mb-4">臺灣原住民族文化園區遊客服務中心</li>
                        <li class="text-sky-400">(TEL)08-7991219、(FAX)08-7994153</li>
                        <li class="text-sky-400">營業時間 Mon-Sun: 10.00am – 5.00pm</li>
                        <li class="text-sky-400"><a href="https://rss.app/feeds/R80tGGCWq2fu1WtD.xml" title="RSS Feed連結">RSS Feed</a></li>
                    </ul>
                </div>
                <div class="w-full md:w-1/2 mt-4 md:mt-0">
                    <ul>
                        <li class="text-xl mb-4">原住民族委員會原住民族文化發展中心</li>
                        <li class="text-sky-400">屏東縣瑪家鄉北葉村風景104號</li>
                        <li class="text-sky-400">電話：08-7991219</li>
                        <li class="text-sky-400"><a href="<?php echo esc_html(site_url("/privacy")) ?>" title="隱私權保護政策連結">隱私權保護政策</a> | <a href="<?php echo esc_html(site_url("/announcement-on-the-opening-of-government-website-information")) ?>" title="政府網站資料開放宣告連結">政府網站資料開放宣告</a></li>

<?php echo '瀏覽人數: ' . pvc_get_post_views(5); ?>

                    </ul>
                </div>
            </div>
            <div class="mt-12 border-t border-sky-200 pt-8">
                <p class="text-base text-gray-400 xl:text-center">&copy; 原住民族委員會原住民族文化發展中心保留一切權利. <a href="https://www.bigboycancode.com" style="display:none;" rel="noopener noreferrer" target="_blank">鎰誠數位</a></p>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>
   <script>
        const hamburgerMenu = document.querySelector('.menu-input');
        const fullMenu = document.querySelector('.fullscreen-menu');


        hamburgerMenu.addEventListener('click', function () {
            console.log(hamburgerMenu.checked); // false
            fullMenu.classList.toggle("hidden")
            menuText.classList.toggle("text-white")
        })

    </script>
</body>
</html>