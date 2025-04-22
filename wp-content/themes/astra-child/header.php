<?php
/**
 * Custom Header for Astra Child Theme
 */
?>
<header class="site-header">
    <div class="container">
        <h1><a href="<?php echo home_url(); ?>">Business Site</a></h1>
        <nav><?php wp_nav_menu(array('theme_location' => 'primary')); ?></nav>
    </div>
</header>
