<?php get_header(); ?>

<header>
    <div class="islamic-pattern"></div>
    <h1 class="main-title"><?php echo get_theme_mod('site_title', 'Home Page Layout'); ?></h1>
    <div class="greeting">
        <p class="arabic"><?php echo get_theme_mod('greeting_arabic_1', 'السلام عليكم ورحمة الله وبركاته'); ?></p>
        <p class="english"><?php echo get_theme_mod('greeting_english_1', 'Peace and blessings be upon you all'); ?></p>
        <p class="arabic"><?php echo get_theme_mod('greeting_arabic_2', 'أهلاً وسهلاً إلى جامعة الإخلاص'); ?></p>
        <p class="english"><?php echo get_theme_mod('greeting_english_2', 'Welcome to Jamiatul Ikhlas'); ?></p>
    </div>
</header>

<div class="top-bar">
    <div class="logo-section">
        <?php 
        if (has_custom_logo()) {
            the_custom_logo();
        }
        ?>
        <div class="logo-text">
            <span class="arabic"><?php echo get_theme_mod('logo_text_arabic', 'جامعة الإخلاص'); ?></span>
            <span class="english"><?php echo get_theme_mod('logo_text_english', 'Jamiatul Ikhlas'); ?></span>
        </div>
    </div>
    <div class="datetime-section">
        <div id="clock"></div>
        <div id="date">
            <span id="gregorian-date"></span>
            <span id="islamic-date"></span>
        </div>
    </div>
</div>

<nav class="main-nav">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary-menu',
        'container' => false,
        'menu_class' => 'nav-menu',
        'fallback_cb' => false
    ));
    ?>
</nav>

<main class="content-grid">
    <div class="left-column">
        <div class="box notices">
            <h2><?php echo get_theme_mod('notices_title', 'Current Notices'); ?></h2>
            <div class="box-content">
                <?php dynamic_sidebar('notices-widget'); ?>
            </div>
        </div>
        <div class="box prayer-times">
            <h2><?php echo get_theme_mod('prayer_times_title', 'Prayer Times'); ?></h2>
            <div class="box-content">
                <?php dynamic_sidebar('prayer-times-widget'); ?>
            </div>
        </div>
    </div>

    <div class="center-column">
        <div class="box quran-display">
            <h2><?php echo get_theme_mod('quran_title', 'Quranic Verse of the Day'); ?></h2>
            <div class="box-content">
                <?php dynamic_sidebar('quran-verse-widget'); ?>
            </div>
        </div>
        <div class="box hadith-display">
            <h2><?php echo get_theme_mod('hadith_title', 'Hadith of the Day'); ?></h2>
            <div class="box-content">
                <?php dynamic_sidebar('hadith-widget'); ?>
            </div>
        </div>
    </div>

    <div class="right-column">
        <div class="box photo-gallery">
            <h2><?php echo get_theme_mod('gallery_title', 'Photo Gallery'); ?></h2>
            <div class="box-content">
                <?php dynamic_sidebar('gallery-widget'); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>