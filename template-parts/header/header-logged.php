<?php
$current_user = wp_get_current_user();

$last_notification = get_user_meta($current_user->ID,"_dsi_last_notification", true);

$link_notification = get_permalink($last_notification);

if($last_notification){
    ?>
    <div class="header-notification-alert has-notifications">
        <a href="<?php echo $link_notification; ?>" aria-label="Notifiche">
            <svg class="svg-bell-solid"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-bell-solid"></use></svg>
        </a>
    </div>
    <!-- /header-notification-alert -->

<?php
}

?>

    <a class="toggle-user-menu-mobile toggle-menu menu-right push-body d-xl-none" href="#">
        <div class="avatar-wrapper">
            <img src="<?php echo dsi_get_user_avatar($current_user); ?>" alt="avatar">
        </div><!-- /avatar-wrapper -->
    </a>
    <a class="dropdown-toggle d-none d-xl-flex" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <div class="avatar-wrapper">
            <img src="<?php echo dsi_get_user_avatar($current_user); ?>" alt="avatar">
        </div><!-- /avatar-wrapper -->
        <p><strong><?php echo dsi_get_display_name($current_user->ID); ?></strong></p>
    </a>
    <div class="dropdown-menu dropdown-content menu-user menu-user-blue">
        <div class="menu-user-wrapper">
            <div class="user-details">
                <div class="avatar-wrapper">
                    <img src="<?php echo dsi_get_user_avatar($current_user); ?>" alt="avatar">
                </div><!-- /avatar-wrapper -->
                <div class="user-details-content">
                    <p><strong><?php echo dsi_get_display_name($current_user->ID); ?></strong></p>
                    <p><?php echo dsi_get_user_role($current_user); ?></p>
                    <a class="btn btn-action btn-xs" href="<?php echo admin_url(); ?>">Crea e gestisci</a>
                </div>
            </div><!-- /user-details -->
            <div class="menu-user-list">
                <ul>
                    <li class="active">
                        <a href="<?php echo admin_url(); ?>">
                            <span><?php _e("Area personale", "design_scuole_italia"); ?></span>
                            <svg class="svg-home-solid"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-home-solid"></use></svg>
                        </a>
                    </li>
                    <?php
                    if($last_notification) {
                        ?>
                        <li class="has-notifications">
                            <a href="<?php echo $link_notification; ?>">
                                <span><?php _e("Notifiche", "design_scuole_italia"); ?></span>
                                <svg class="svg-bell-solid">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-bell-solid"></use>
                                </svg>
                            </a>
                        </li>
                        <?php
                    }
                    ?>
                    <li>
                        <a href="<?php echo get_author_posts_url($current_user->ID); ?>">
                            <span><?php _e("Profilo Pubblico", "design_scuole_italia"); ?></span>
                            <svg class="svg-user-solid"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-user-solid"></use></svg>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo get_edit_profile_url(); ?>">
                            <span><?php _e("Modifica Profilo", "design_scuole_italia"); ?></span>
                            <svg class="svg-bookmark-solid"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-bookmark-solid"></use></svg>
                        </a>
                    </li>
                </ul>
            </div><!-- /menu-user-list -->
            <div class="menu-user-bottom">
                <a href="<?php echo wp_logout_url(); ?>">
                    <span><?php _e("Esci", "design_scuole_italia"); ?></span>
                    <svg class="svg-exit"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-exit"></use></svg>
                </a>
            </div><!-- /menu-user-bottom -->
        </div><!-- /menu-user-wrapper -->
    </div><!-- /menu-user -->
