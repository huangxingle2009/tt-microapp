<?php

namespace Juxing\TtMicroApp;

use Doctrine\Common\Cache\Cache;
use Hanson\Foundation\Foundation;

/**
 * Class TtMicroApp
 * @package Juxing\TtMicroApp
 *
 * @property-read AccessToken $access_token
 * @property-read HttpClient $http
 * @property-read Auth $auth
 * @property-read QrCode $qr_code
 * @property-read Storage $storage
 * @property-read TempMsg $temp_msg
 * @property-read ContentSecurity $content_security
 * @property-read Decrypt $decrypt
 * @property-read Payment $payment
 * @property-read Cache $cache
 */
class TtMicroApp extends Foundation
{
    protected $providers = [
        ServiceProvider::class,
    ];

    public function getAppId()
    {
        return $this->getConfig('access_key');
    }

    public function getAppSecret()
    {
        return $this->getConfig('secret_key');
    }

    public function getPaymentAppId()
    {
        return $this->getConfig('payment_app_id');
    }

    public function getPaymentSecret()
    {
        return $this->getConfig('payment_secret');
    }

    public function getPaymentMerchantId()
    {
        return $this->getConfig('payment_merchant_id');
    }
}