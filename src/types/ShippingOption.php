<?php

namespace TelegramBot\types;

/**
 * This object represents one shipping option.
 */
class ShippingOption implements \JsonSerializable
{
    use SerializeTrait;
    use FactoryTrait;

    /**
     * @var string Shipping option identifier
     */
    public $id;

    /**
     * @var string Option title
     */
    public $title;

    /**
     * @var LabeledPrice[] List of price portions
     */
    public $prices;
}
