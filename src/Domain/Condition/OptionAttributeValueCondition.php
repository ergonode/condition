<?php

/**
 * Copyright © Ergonode Sp. z o.o. All rights reserved.
 * See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Ergonode\Condition\Domain\Condition;

use Ergonode\SharedKernel\Domain\Aggregate\AttributeId;
use Ergonode\Condition\Domain\ConditionInterface;
use JMS\Serializer\Annotation as JMS;

class OptionAttributeValueCondition implements ConditionInterface
{
    public const TYPE = 'OPTION_ATTRIBUTE_VALUE_CONDITION';
    public const PHRASE = 'OPTION_ATTRIBUTE_VALUE_CONDITION_PHRASE';

    /**
     * @JMS\Type("Ergonode\SharedKernel\Domain\Aggregate\AttributeId")
     */
    private AttributeId $attribute;

    /**
     * @JMS\Type("string")
     */
    private string $value;

    public function __construct(AttributeId $attribute, string $value)
    {
        $this->attribute = $attribute;
        $this->value = $value;
    }

    /**
     * {@inheritDoc}
     *
     * @JMS\VirtualProperty()
     */
    public function getType(): string
    {
        return self::TYPE;
    }

    public function getAttribute(): AttributeId
    {
        return $this->attribute;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
