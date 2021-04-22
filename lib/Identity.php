<?php

namespace Stripe;

/**
 * Class Identity.
 *
 * @see https://stripe.com/docs/identity
 */
class Identity extends ApiResource
{
    const OBJECT_NAME = 'identity';

    use ApiOperations\All;
    use ApiOperations\Create;
    use ApiOperations\Retrieve;
    use ApiOperations\Update;
}
