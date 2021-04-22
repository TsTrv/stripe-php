<?php

// File generated from our OpenAPI spec

namespace Stripe\Service\Identity;

class VerificationReports extends \Stripe\Service\AbstractService
{
    /**
     * Creates a new identity object.
     *
     * @param null|array $params
     * @param null|array|\Stripe\Util\RequestOptions $opts
     *
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Stripe\Identity\VerificationReports
     */
    public function all($params = null, $opts = null)
    {
        return $this->request('get', '/v1/identity/verification_reports', $params, $opts);
    }

    /**
     * Retrieves the invoice item with the given ID.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\Stripe\Util\RequestOptions $opts
     *
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Stripe\Identity\VerificationReports
     */
    public function retrieve($id, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/identity/verification_reports/%s', $id), $params, $opts);
    }
}
