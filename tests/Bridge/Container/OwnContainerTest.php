<?php

namespace LightSaml\SymfonyBridgeBundle\Bridge\Container;

use LightSaml\Provider\EntityDescriptor\EntityDescriptorProviderInterface;
use LightSaml\Store\Credential\CredentialStoreInterface;
use LightSaml\SymfonyBridgeBundle\Bridge\Container\OwnContainer;
use PHPUnit\Framework\TestCase;

class OwnContainerTest extends TestCase
{
    public function test_constructs_with_all_arguments()
    {
        $this->expectNotToPerformAssertions();
        new OwnContainer(
            $this->getMockBuilder(EntityDescriptorProviderInterface::class)->getMock(),
            $this->getMockBuilder(CredentialStoreInterface::class)->getMock(),
            "string"
        );
    }
}
