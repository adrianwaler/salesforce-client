<?php

namespace Xsolve\SalesforceClient\Request;

class Delete implements RequestInterface
{
    const ENDPOINT = '/sobjects/%s/%s/';

    /**
     * @var string
     */
    protected $objectType;

    /**
     * @var string
     */
    protected $id;

    /**
     * @param string $objectType
     * @param string $id
     */
    public function __construct(string $objectType, string $id)
    {
        $this->objectType = $objectType;
        $this->id = $id;
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod() : string
    {
        return self::METHOD_DELETE;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return sprintf(self::ENDPOINT, $this->objectType, $this->id);
    }

    /**
     * {@inheritdoc}
     */
    public function getParams(): array
    {
        return [];
    }
}