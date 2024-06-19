<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tiaat
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- <meta
    http-equiv="Content-Security-Policy"
    content="default-src 'self'; img-src https://*; child-src 'none';" /> -->
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="w-full pl-4 pr-4 fixed z-20 bg-white shadow-md top-0" style="left: 50%; transform: translateX(-50%);">
<a class="accesskey" href="#aH" id="aH" accesskey="H" title="頁首區塊">:::</a>
        <div class="flex max-w-5xl mx-auto justify-between items-center">
            <a href="<?php echo esc_html(site_url("/")) ?>" title="首頁連結">
                <span class="hidden md:block"><img src="https://tiaat.tacp.gov.tw/wp-content/uploads/2023/08/tiaat-logo.png" alt="tiaat logo" class="h-10"></span>
                <span class="block md:hidden"><img src="<?php bloginfo('template_directory'); ?>/img/mobile-logo.png" alt="tiaat logo" class="h-8"></span>
            </a>
            <div class="menu cross menu--1 flex items-center">
                <span id="menuText" class="text-xl font-normal tracking-wider text-white"></span>
                <label class="nav-label">
                    <input class="menu-input" type="checkbox">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="50" cy="50" r="30" />
                        <path class="line line--1" d="M0 40h62c13 0 6 28-4 18L35 35" />
                        <path class="line line--2" d="M0 50h70" />
                        <path class="line line--3" d="M0 60h62c13 0 6-28-4-18L35 65" />
                    </svg>
                </label>
            </div>
        </div>

    </div>

    <div class="fullscreen-menu bg-white font-normal w-screen h-screen hidden fixed z-10">
        <div class="max-w-5xl mx-auto pt-16 ">
            <div class="flex flex-wrap pl-4 pr-4 -mx-4 md:-mx-16">
                <div class="w-full pl-4 pr-4 md:pr-16 md:pl-16 mt-6">
                    <h4 class="text-2xl text-sky-700  border-b border-sky-700 pb-4 mb-4">搜尋</h4>
                    <?php get_search_form()?>
                </div>
                <div class="w-1/2 md:w-4/12 pl-4 pr-4 md:pr-16 md:pl-16 mt-12">
                    <h4 class="text-2xl text-sky-700  border-b border-sky-700 pb-4 mb-4">首頁</h4>
                    <ul>
                        <li class="mb-4"><a href="<?php echo esc_html(site_url("/")) ?>" title="首頁連結">首頁</a></li>
                    </ul>
                </div>
                <div class="w-1/2 md:w-4/12 pl-4 pr-4 md:pr-16 md:pl-16 mt-12">
                    <h4 class="text-2xl text-sky-700  border-b border-sky-700 pb-4 mb-4">關於</h4>
                    <ul>
                        <li class="mb-4"><a href="<?php echo esc_html(site_url("/about")) ?>" title="關於藝術節連結">關於藝術節</a></li>
                        <li class="mb-4"><a href="<?php echo esc_html(site_url("/current-expo")) ?>" title="2023策展論述連結">2023策展論述</a></li>
                        <li class="">活動歷程</li>
                    </ul>
                </div>
                <div class="w-1/2 md:w-4/12 pl-4 pr-4 md:pr-16 md:pl-16 mt-12">
                    <h4 class="text-2xl text-sky-700 border-b border-sky-700 pb-4 mb-4">展覽</h4>
                    <ul>
                        <!--<li class="mb-4"><a href="<?php //echo esc_html(site_url("/artists")) ?>" title="藝術家列表連結">藝術家列表</a></li>
                        <li><a href="<?php echo esc_html(site_url("/arts")) ?>" title="作品列表連結">作品列表</a></li> -->
                    </ul>
                </div>
                <div class="w-1/2 md:w-4/12 pl-4 pr-4 md:pr-16 md:pl-16 mt-12">
                    <h4 class="text-2xl text-sky-700 border-b border-sky-700 pb-4 mb-4">活動/學習推廣</h4>
                    <ul>
                        <li class="mb-4"><a href="<?php echo esc_html(site_url("/activities")) ?>" title="最新活動連結">最新活動</a></li>
                        <li class="mb-4"><a href="<?php echo esc_html(site_url("/news")) ?>" title="文章/影音連結">文章/影音</a></li>
                    </ul>
                </div>
                <div class="w-1/2 md:w-4/12 pl-4 pr-4 md:pr-16 md:pl-16 mt-12">
                    <h4 class="text-2xl text-sky-700  border-b border-sky-700 pb-4 mb-4">參觀資訊</h4>
                    <ul>
                        <li class="mb-4"><a href="<?php echo esc_html(site_url("/opening-hour")) ?>" title="交通/開放時間連結">交通/開放時間</a></li>
                        <li class="mb-4"><a href="<?php echo esc_html(site_url("/attractions")) ?>" title="周邊景點連結">周邊景點</a></li>
                    </ul>
                </div>
                <div class="w-1/2 md:w-4/12 pl-4 pr-4 md:pr-16 md:pl-16 mt-12">
                    <h4 class="text-2xl text-sky-700  border-b border-sky-700 pb-4 mb-4">其他</h4>
                    <ul>
                        <li class="mb-4"><a href="<?php echo esc_html(site_url("/privacy")) ?>" title="隱私權保護政策連結">隱私權保護政策</a></li>
                        <li class="mb-4"><a href="<?php echo esc_html(site_url("/announcement-on-the-opening-of-government-website-information")) ?>" title="政府網站資料開放宣告連結">政府網站資料開放宣告</a></li>
                    </ul>
                </div>
           
            </div>
        </div>
    </div>