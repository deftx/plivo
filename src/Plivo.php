<?php

namespace NotificationChannels\Plivo;

use Plivo\RestAPI as PlivoRestApi;

class Plivo extends PlivoRestApi
{
    /** @var string */
    protected $auth_id;

    /** @var string */
    protected $authToken;

    /** @var string */
    protected $from;

    /** @var string */
    protected $webhookUrl;

    /**
     * Create a new Plivo RestAPI instance.
     *
     * @param array $config
     * @return void
     */
    public function __construct(array $config)
    {
        $this->auth_id = $config['auth_id'];
        $this->authToken = $config['auth_token'];
        $this->from = $config['from_number'];
        $this->webhookUrl = $config['webhook_url'] ?? null;

        parent::__construct($this->auth_id, $this->authToken);
    }

    /**
     * Number SMS is being sent from.
     *
     * @return string
     */
    public function from()
    {
        return $this->from;
    }

    public function webhookUrl()
    {
        return $this->webhookUrl;
    }
}
