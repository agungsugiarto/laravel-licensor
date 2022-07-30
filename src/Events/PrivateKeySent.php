<?php

namespace Fluent\Licensor\Events;

use Fluent\Licensor\Models\Key;
use Fluent\Licensor\Models\Secret;
use GuzzleHttp\TransferStats;
use Psr\Http\Message\ResponseInterface;

/**
 * Class PrivateKeySent
 */
class PrivateKeySent
{
    /**
     * @var Key
     */
    public $key;

    /**
     * @var Secret
     */
    public $secret;

    /**
     * @var string
     */
    public $privateKey;

    /**
     * @var ResponseInterface
     */
    public $response;

    /**
     * @var TransferStats
     */
    public $transfer;

    /**
     * PrivateKeySent constructor.
     * @param Key $key
     * @param Secret $secret
     * @param string $privateKey
     * @param ResponseInterface $response
     * @param TransferStats $transfer
     */
    public function __construct(
        Key $key,
        Secret $secret,
        string $privateKey,
        ResponseInterface $response,
        TransferStats $transfer)
    {
        $this->key = $key;
        $this->secret = $secret;
        $this->response = $response;
        $this->transfer = $transfer;
        $this->privateKey = $privateKey;
    }
}
