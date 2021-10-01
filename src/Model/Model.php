<?php

namespace Escherchia\PhpWorkflowCore\Model;

use Escherchia\PhpWorkflowCore\Contracts\ModelElementContainerInterface;
use Escherchia\PhpWorkflowCore\Contracts\ModelInterface;
use Escherchia\PhpWorkflowCore\Model\Elements\ElementInterface;

class Model implements ModelInterface
{
    /**
     * @var ModelElementContainerInterface
     */
    private $modelElementContainer;

    /**
     * @param ModelElementContainerInterface $modelElementContainer
     */
    public function __construct(ModelElementContainerInterface $modelElementContainer )
    {
        $this->modelElementContainer = $modelElementContainer;
    }

    /**
     * @param ElementInterface $element
     */
    public function addElement(ElementInterface $element): void
    {
        $this->modelElementContainer->add($element);
    }

    /**
     * @param string $key
     * @return null|ElementInterface
     */
    public function getElement(string $key): ?ElementInterface
    {
        return $this->modelElementContainer->get($key);
    }

    /**
     * @return ModelElementContainerInterface
     */
    public function getModelElementContainer(): ModelElementContainerInterface
    {
        return $this->modelElementContainer;
    }
}
