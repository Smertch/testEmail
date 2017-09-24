<?php
/**
 * Created by PhpStorm.
 * User: smertch
 * Date: 23.09.17
 * Time: 22:16
 */
if (!class_exists('CaptchaConfiguration')) { return; }

// BotDetect PHP Captcha configuration options

return [
    // Captcha configuration for example page
    'ExampleCaptcha' => [
        'UserInputID' => 'CaptchaCode',
        'ImageWidth' => 250,
        'ImageHeight' => 50,
    ],

];