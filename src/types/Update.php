<?php

namespace TelegramBot\types;

/**
 * This object represents an incoming update.At most one of the optional parameters can be present in any given update.
 */
class Update implements \JsonSerializable
{
    use SerializeTrait;
    use FactoryTrait;

    /**
     * @var int The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially. This ID becomes especially handy if you're using Webhooks, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.
     */
    public $updateId;

    /**
     * @var Message Optional. New incoming message of any kind — text, photo, sticker, etc.
     */
    public $message;

    /**
     * @var Message Optional. New version of a message that is known to the bot and was edited
     */
    public $editedMessage;

    /**
     * @var Message Optional. New incoming channel post of any kind — text, photo, sticker, etc.
     */
    public $channelPost;

    /**
     * @var Message Optional. New version of a channel post that is known to the bot and was edited
     */
    public $editedChannelPost;

    /**
     * @var InlineQuery Optional. New incoming inline query
     */
    public $inlineQuery;

    /**
     * @var ChosenInlineResult Optional. The result of an inline query that was chosen by a user and sent to their chat partner. Please see our documentation on the feedback collecting for details on how to enable these updates for your bot.
     */
    public $chosenInlineResult;

    /**
     * @var CallbackQuery Optional. New incoming callback query
     */
    public $callbackQuery;

    /**
     * @var ShippingQuery Optional. New incoming shipping query. Only for invoices with flexible price
     */
    public $shippingQuery;

    /**
     * @var PreCheckoutQuery Optional. New incoming pre-checkout query. Contains full information about checkout
     */
    public $preCheckoutQuery;
}
