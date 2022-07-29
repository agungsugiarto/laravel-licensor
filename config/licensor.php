<?php

return [

    /**
     * The path of the licensee's URL to which the private key will be sent
     * during key activation and verification
     */
    'licensee_callback_path' => 'key/callback',

    /**
     * Paths to activate and verify licensees' keys on this server
     */
    'key_verification_path' => 'key/check',
    'key_activation_path' => 'key/activate',

    /**
     * Private key settings
     */
    'key_expiration_time_offset' => 60 * 60 * 24,
    'key_shutdown_time_offset' => 60 * 60 * 24,
];
