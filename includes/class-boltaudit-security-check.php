<?php

class BoltAudit_Security_Check {

	public function init() {
		add_action( 'admin_notices', [$this, 'check_common_usernames'] );
	}

	public function check_common_usernames() {
		// Only show to users who can manage options (typically admins)
		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}

		$current_user = wp_get_current_user();
		$username     = strtolower( $current_user->user_login );

		$common_usernames = [
			'admin',
			'test',
			'demo',
			'user',
			'root',
			'administrator',
			'manager',
			'superadmin',
			'wpadmin',
		];

		if ( in_array( $username, $common_usernames, true ) ) {
			echo '<div class="notice notice-error"><p><strong>' .
			esc_html__( 'BoltAudit Warning:', 'boltaudit' ) .
			'</strong> ' .
			sprintf(
				esc_html__( 'Your username "%s" is too common and insecure. Please change it to something unique.', 'boltaudit' ),
				esc_html( $username )
			) .
				'</p></div>';
		}
	}
}
