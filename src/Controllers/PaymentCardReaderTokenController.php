<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Controllers;

use Core\Authentication\Auth;
use Core\Request\Parameters\QueryParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use FortisAPILib\Exceptions\ApiException;
use FortisAPILib\Exceptions\Response401tokenException;
use FortisAPILib\Models\ResponsePaymentCardReaderToken;

class PaymentCardReaderTokenController extends BaseController
{
    /**
     * For initializing iPhone card readers for Apple Tap to Pay transactions
     *
     * @param string $productTransactionId Product Transaction ID to be used to initialize the card
     *        reader
     *
     * @return ResponsePaymentCardReaderToken Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function paymentCardReaderTokenRequest(string $productTransactionId): ResponsePaymentCardReaderToken
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v1/payment-card-reader-token')
            ->auth(Auth::and('user-id', 'user-api-key', 'developer-id'))
            ->parameters(QueryParam::init('product_transaction_id', $productTransactionId));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->type(ResponsePaymentCardReaderToken::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
