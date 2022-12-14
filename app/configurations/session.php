<?php

return
[
	/*
	 * ---------------------------------------------------------
	 * The configuration options
	 * ---------------------------------------------------------
	 *
	 * Default configuration to use.
	 */
	'default' => 'localhost',

	/*
	 * ---------------------------------------------------------
	 * Configurations
	 * ---------------------------------------------------------
	 *
	 * The configuration options for setting coolie options
	 *
	 */
	'configurations' =>
	[
		'localhost' =>
		[
			/*
			 * The name of the cookie. This denotes the name of actual cookie
			 * sent to the HTTP client.
			 */
			'cookie_name'  => 'serve_session',

			/*
			 * Set a unix timestamp or 'strtotime' arg of when the cookie will expire.
			 * Note that a time of 0 or the current time, will set the cookie to
			 * expire at the end of the session (when the browser closes).
			 */
			'expire'       => '+1 month',

			/*
			 * The path on the server in which the cookie will be available on.
			 * If set to '/', the cookie will be available within the entire domain.
			 * If set to '/foo/', the cookie will only be available within the /foo/ directory and all sub-directories.
			 */
			'path'         => '/',

			/*
			 * The domain that the cookie is available to.
			 * To make the cookie available on all subdomains of example.org (including example.org itself) then you'd set it to '.example.org'.
			 */
			'domain'       => '',

			/*
			 * Indicates that the cookie should only be transmitted over a secure HTTPS connection from the client. When set to TRUE,
			 * the cookie will only be set if a secure connection exists. On the server-side, it's on the programmer to send this kind of cookie
			 * only on secure connection (e.g. with respect to $this->request->secure()).
			 */
			'secure'       => false,

			/*
			 * When TRUE the cookie will be made accessible only through the HTTP protocol.
			 * This means that the cookie won't be accessible by scripting languages, such as JavaScript.
			 * It has been suggested that this setting can effectively help to reduce identity theft through XSS attacks
			 * (although it is not supported by all browsers), but that claim is often disputed.
			 */
			'httponly'     => true,

			/*
			 * Storage implementation for saving, storing and sending of session data.
			 * Type can be either 'file'||'native'
			 */
			'storage' =>
			[
				'type' => 'native',

				'path' => SERVE_APPLICATION_PATH . '/storage/session',
			],
		],
	],
];
