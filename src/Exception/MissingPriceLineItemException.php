<?php declare(strict_types=1);


namespace Etbag\TrxpsPayments\Exception;


use Shopware\Core\Framework\ShopwareHttpException;
use Symfony\Component\HttpFoundation\Response;

class MissingPriceLineItemException extends ShopwareHttpException
{
    public function __construct(string $id)
    {
        $message = sprintf('The OrderLineItemEntity with id (%s) has no price set', $id);
        parent::__construct($message);
    }

    public function getErrorCode(): string
    {
        return 'ORDER__LINE_ITEM_MISSING_PRICE_COLLECTION';
    }

    public function getStatusCode(): int
    {
        return Response::HTTP_BAD_REQUEST;
    }
}
