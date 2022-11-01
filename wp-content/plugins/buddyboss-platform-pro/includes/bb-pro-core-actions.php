<?php
/**
 * BuddyBoss Platform Pro Core Actions.
 *
 * @package BuddyBossPro/Actions
 * @since 1.0.4
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

add_action( 'bp_admin_init', 'bbp_pro_setup_updater', 1001 );
