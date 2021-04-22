<?php

namespace Stripe;

/**
 * @internal
 * @covers \Stripe\Identity
 */
final class IdentityTest extends \PHPUnit\Framework\TestCase
{
    use TestHelper;

    const TEST_RESOURCE_ID = 'in_123';
    const TEST_LINE_ID = 'ii_123';

    public function testIsListable()
    {
        $this->expectsRequest(
            'get',
            '/v1/identity/verification_sessions'
        );
        $resources = Identity::all();
        static::assertInternalType('array', $resources->data);
        static::assertInstanceOf(\Stripe\Identity::class, $resources->data[0]);
    }

    public function testIsRetrievable()
    {
        $this->expectsRequest(
            'get',
            '/v1/identity/verification_sessions' . self::TEST_RESOURCE_ID
        );
        $resource = Identity::retrieve(self::TEST_RESOURCE_ID);
        static::assertInstanceOf(\Stripe\Identity::class, $resource);
    }

    public function testIsCreatable()
    {
        $this->expectsRequest(
            'post',
            '/v1/identity/verification_sessions'
        );
        $resource = Identity::create([
            'type' => 'document',
        ]);
        static::assertInstanceOf(\Stripe\Identity::class, $resource);
    }

    public function testIsSaveable()
    {
        $resource = Identity::retrieve(self::TEST_RESOURCE_ID);
        $resource->metadata['key'] = 'value';
        $this->expectsRequest(
            'post',
            '/v1/identity/verification_sessions' . $resource->id
        );
        $resource->save();
        static::assertInstanceOf(\Stripe\Identity::class, $resource);
    }

    public function testIsUpdatable()
    {
        $this->expectsRequest(
            'post',
            '/v1/identity/verification_sessions' . self::TEST_RESOURCE_ID
        );
        $resource = Identity::update(self::TEST_RESOURCE_ID, [
            'metadata' => ['key' => 'value'],
        ]);
        static::assertInstanceOf(\Stripe\Identity::class, $resource);
    }

    public function testIsDeletable()
    {
        $resource = Identity::retrieve(self::TEST_RESOURCE_ID);
        $this->expectsRequest(
            'delete',
            '/v1/identity/verification_sessions' . self::TEST_RESOURCE_ID
        );
        $resource->delete();
        static::assertInstanceOf(\Stripe\Identity::class, $resource);
    }
}
