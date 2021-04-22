<?php

// File generated from our OpenAPI spec

namespace Stripe\Service\Identity;

/**
 * Service factory class for API resources in the Issuing namespace.
 *
 * @property AuthorizationService $authorizations
 * @property CardholderService $cardholders
 * @property CardService $cards
 * @property DisputeService $disputes
 * @property TransactionService $transactions
 */
class IdentityServiceFactory extends \Stripe\Service\AbstractServiceFactory
{
    /**
     * @var array<string, string>
     */
    private static $classMap = [
        'verificationReports' => VerificationReports::class,
        'verificationSessions' => VerificationSessions::class,
    ];

    protected function getServiceClass($name)
    {
        return \array_key_exists($name, self::$classMap) ? self::$classMap[$name] : null;
    }
}
