<?php

/**
 * Add userfeedback install and activate notifications.
 * Recurrence: 30 Days
 *
 * @since 8.14
 */
final class ExactMetrics_Notification_Install_User_Feedback extends ExactMetrics_Notification_Event {

	public $notification_id = 'exactmetrics_notification_install_user_feedback';
	public $notification_interval = 30; // in days
	public $notification_type = array( 'basic', 'lite', 'master', 'plus', 'pro' );
	public $notification_icon = 'lightning';
	public $notification_category = 'insight';
	public $notification_priority = 1;

	/**
	 * Build Notification
	 *
	 * @return array $notification notification is ready to add
	 *
	 * @since 8.14
	 */
	public function prepare_notification_data( $notification ) {

		$is_em = class_exists( 'ExactMetrics' ) || class_exists( 'ExactMetrics_Lite' );

		$uf_plugin_active = class_exists( 'UserFeedback_Base' );

		if( ! $uf_plugin_active ) {

			// Translators: user feedback notification title
			$notification['title'] = sprintf( __( 'What Are Your Users Really Thinking?', 'google-analytics-dashboard-for-wp' ) );
			
			// Translators: user feedback notification content
			$notification['content'] = sprintf( __( 'ExactMetrics tells you WHAT your website visitors are doing on your website, but our latest plugin, UserFeedback, tells you WHY. Use its short surveys to make more money, increase engagement, and grow your business faster with candid customer feedback.', 'google-analytics-dashboard-for-wp' ) );

			if ( $is_em ) {
				// Translators: user feedback notification content
				$notification['content'] = sprintf( __( 'ExactMetrics tells you WHAT your website visitors are doing on your website, but UserFeedback tells you WHY. Use its short surveys to make more money, increase engagement, and grow your business faster with candid customer feedback.', 'google-analytics-dashboard-for-wp' ) );
			}

			$notification['btns'] = array(
				"cta_install_user_feedback" => array(
					'url'  => $this->get_view_url( false, 'userfeedback_onboarding' ),
					'text' => __( 'Install & Activate', 'google-analytics-dashboard-for-wp' ),
				),
			);

			return $notification;
		}

		return false;
	}

}

// initialize the class
new ExactMetrics_Notification_Install_User_Feedback();
