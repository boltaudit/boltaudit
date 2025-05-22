<?php
/**
 * Plugin Name: BoltAudit
 * Description: Warns you if your admin username is weak (like “admin”) or if your password is too easy.
 * Version: 0.0.1
 * Author: HeyMehedi
 * License: GPL2+
 * Text Domain: boltaudit
 */

if (!defined('ABSPATH')) exit;

require_once plugin_dir_path(__FILE__) . 'includes/class-boltaudit-security-check.php';

function bolt_audit_run() {
    $scanner = new BoltAudit_Security_Check();
    $scanner->init();
}
add_action('admin_init', 'bolt_audit_run');
