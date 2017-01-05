<?php

namespace Xsolve\SalesforceClient\Security\Authentication\Strategy;

use Xsolve\SalesforceClient\Security\Authentication\Credentials;
use Xsolve\SalesforceClient\Security\Token\TokenInterface;

interface RegenerateStrategyInterface
{
    public function getCredentials(Credentials $credentials, TokenInterface $token): Credentials;

    public function support(Credentials $credentials, TokenInterface $token): bool;
}
