<?php

class WPCF7_ContactFormTemplate {

	public static function get_default( $prop = 'form' ) {
		if ( 'form' == $prop ) {
			$template = self::form();
		} elseif ( 'mail' == $prop ) {
			$template = self::mail();
		} elseif ( 'mail_2' == $prop ) {
			$template = self::mail_2();
		} elseif ( 'messages' == $prop ) {
			$template = self::messages();
		} else {
			$template = null;
		}

		return apply_filters( 'wpcf7_default_template', $template, $prop );
	}

	public static function form() {
		$template = sprintf(
			'
			<h2 class="text-center">%6$s</h2>
			<p class="text-center"> %7$s </p>
			[text* your-name id:full_name class:full_name placeholder "%1$s"]
			[email* your-email id:email class:email placeholder "%2$s"]
			[tel* tel id:tel class:tel placeholder "%3$s"]
			[textarea* message id:message class:message placeholder "%4$s"]
			<div align="center">
			[submit "%5$s"]
			</div>',
			__( 'Name', 'contact-form-7' ),
			__( 'Email Address', 'contact-form-7' ),
			__( 'Phone Number', 'contact-form-7' ),
			__( 'Message', 'contact-form-7' ),
			__( 'Send Now', 'contact-form-7' ),
			__( 'GET IN TOUCH', 'contact-form-7' ),
			__( 'Haven`t found what you are looking for? Contact us for more help.', 'contact-form-7') );
			
		return trim( $template );
	}

	public static function mail() {
		$template = array(
			'subject' =>
				/* translators: 1: blog name, 2: [your-subject] */
				sprintf(
					_x( '%1$s "%2$s"', 'mail subject', 'contact-form-7' ),
					get_bloginfo( 'name' ), '[your-subject]' ),
			'sender' => sprintf( '%s <%s>',
				get_bloginfo( 'name' ), self::from_email() ),
			'body' =>
				/* translators: %s: [your-name] <[your-email]> */
				sprintf( __( 'From: %s', 'contact-form-7' ),
					'[your-name] <[your-email]>' ) . "\n"
				/* translators: %s: [your-subject] */
				. sprintf( __( 'Phone: %s', 'contact-form-7' ),
					'[tel]' ) . "\n\n"
				. __( 'Message Body:', 'contact-form-7' )
					. "\n" . '[message]' . "\n\n"
				. '-- ' . "\n"
				/* translators: 1: blog name, 2: blog URL */
				. sprintf(
					__( 'This e-mail was sent from a contact form on %1$s (%2$s)', 'contact-form-7' ),
					get_bloginfo( 'name' ),
					get_bloginfo( 'url' ) ),
			'recipient' => get_option( 'admin_email' ),
			'additional_headers' => 'Reply-To: [your-email]',
			'attachments' => '',
			'use_html' => 0,
			'exclude_blank' => 0,
		);

		return $template;
	}

	public static function mail_2() {
		$template = array(
			'active' => false,
			'subject' =>
				/* translators: 1: blog name, 2: [your-subject] */
				sprintf(
					_x( '%1$s "%2$s"', 'mail subject', 'contact-form-7' ),
					get_bloginfo( 'name' ), 'Enquiry Form' ),
			'sender' => sprintf( '%s <%s>',
				get_bloginfo( 'name' ), self::from_email() ),
			'body' =>
				__( 'Message Body:', 'contact-form-7' )
					. "\n" . '[message]' . "\n\n"
				. '-- ' . "\n"
				/* translators: 1: blog name, 2: blog URL */
				. sprintf(
					__( 'This e-mail was sent from a contact form on %1$s (%2$s)', 'contact-form-7' ),
					get_bloginfo( 'name' ),
					get_bloginfo( 'url' ) ),
			'recipient' => '[your-email]',
			'additional_headers' => sprintf( 'Reply-To: %s',
				get_option( 'admin_email' ) ),
			'attachments' => '',
			'use_html' => 0,
			'exclude_blank' => 0,
		);

		return $template;
	}

	public static function from_email() {
		$admin_email = get_option( 'admin_email' );
		$sitename = strtolower( $_SERVER['SERVER_NAME'] );

		if ( wpcf7_is_localhost() ) {
			return $admin_email;
		}

		if ( substr( $sitename, 0, 4 ) == 'www.' ) {
			$sitename = substr( $sitename, 4 );
		}

		if ( strpbrk( $admin_email, '@' ) == '@' . $sitename ) {
			return $admin_email;
		}

		return 'wordpress@' . $sitename;
	}

	public static function messages() {
		$messages = array();

		foreach ( wpcf7_messages() as $key => $arr ) {
			$messages[$key] = $arr['default'];
		}

		return $messages;
	}
}

function wpcf7_messages() {
	$messages = array(
		'mail_sent_ok' => array(
			'description'
				=> __( "Sender's message was sent successfully", 'contact-form-7' ),
			'default'
				=> __( "Thank you for your message. It has been sent.", 'contact-form-7' ),
		),

		'mail_sent_ng' => array(
			'description'
				=> __( "Sender's message failed to send", 'contact-form-7' ),
			'default'
				=> __( "There was an error trying to send your message. Please try again later.", 'contact-form-7' ),
		),

		'validation_error' => array(
			'description'
				=> __( "Validation errors occurred", 'contact-form-7' ),
			'default'
				=> __( "One or more fields have an error. Please check and try again.", 'contact-form-7' ),
		),

		'spam' => array(
			'description'
				=> __( "Submission was referred to as spam", 'contact-form-7' ),
			'default'
				=> __( "There was an error trying to send your message. Please try again later.", 'contact-form-7' ),
		),

		'accept_terms' => array(
			'description'
				=> __( "There are terms that the sender must accept", 'contact-form-7' ),
			'default'
				=> __( "You must accept the terms and conditions before sending your message.", 'contact-form-7' ),
		),

		'invalid_required' => array(
			'description'
				=> __( "There is a field that the sender must fill in", 'contact-form-7' ),
			'default'
				=> __( "The field is required.", 'contact-form-7' ),
		),

		'invalid_too_long' => array(
			'description'
				=> __( "There is a field with input that is longer than the maximum allowed length", 'contact-form-7' ),
			'default'
				=> __( "The field is too long.", 'contact-form-7' ),
		),

		'invalid_too_short' => array(
			'description'
				=> __( "There is a field with input that is shorter than the minimum allowed length", 'contact-form-7' ),
			'default'
				=> __( "The field is too short.", 'contact-form-7' ),
		)
	);

	return apply_filters( 'wpcf7_messages', $messages );
}
