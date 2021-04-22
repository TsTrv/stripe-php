<?php

// File generated from our OpenAPI spec

namespace Stripe\Service;

class IdentityService extends \Stripe\Service\AbstractService
{
    /**
     * Creates a new identity object.
     *
     * @param null|array $params
     * @param null|array|\Stripe\Util\RequestOptions $opts
     *
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Stripe\Identity
     */
    public function all($params = null, $opts = null)
    {
        return $this->request('get', '/v1/identity/verification_sessions', $params, $opts);
    }

    /**
     * Creates an item to be added to a draft invoice (up to 250 items per invoice). If
     * no invoice is specified, the item will be on the next invoice created for the
     * customer specified.
     *
     * @param null|array $params
     * @param null|array|\Stripe\Util\RequestOptions $opts
     *
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Stripe\Identity
     */
    public function create($params = null, $opts = null)
    {
        return $this->request('post', '/v1/identity/verification_sessions', $params, $opts);
    }

    /**
     * Deletes an invoice item, removing it from an invoice. Deleting invoice items is
     * only possible when they’re not attached to invoices, or if it’s attached to a
     * draft invoice.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\Stripe\Util\RequestOptions $opts
     *
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Stripe\Identity
     */
    public function delete($id, $params = null, $opts = null)
    {
        return $this->request('delete', $this->buildPath('/v1/identity/verification_sessions/%s', $id), $params, $opts);
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
     * @return \Stripe\Identity
     */
    public function retrieve($id, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/identity/verification_sessions/%s', $id), $params, $opts);
    }

    /**
     * Updates the amount or description of an invoice item on an upcoming invoice.
     * Updating an invoice item is only possible before the invoice it’s attached to is
     * closed.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\Stripe\Util\RequestOptions $opts
     *
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \Stripe\Identity
     */
    public function update($id, $params = null, $opts = null)
    {
        return $this->request('post', $this->buildPath('/v1/identity/verification_sessions/%s', $id), $params, $opts);
    }
}
