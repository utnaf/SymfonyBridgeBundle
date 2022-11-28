<?php

namespace LightSaml\SymfonyBridgeBundle\Bridge\Container;

use LightSaml\Store\Credential\CredentialStoreInterface;
use LightSaml\SymfonyBridgeBundle\Bridge\Container\CredentialContainer;
use PHPUnit\Framework\TestCase;

class CredentialContainerTest extends TestCase
{
    public function test_constructs_with_all_arguments()
    {
        $this->expectNotToPerformAssertions();
        new CredentialContainer(
            $this->getMockBuilder(CredentialStoreInterface::class)->getMock()
        );
    }
}
