<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Controllers;

use Core\Authentication\Auth;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use FortisAPILib\Exceptions\ApiException;
use FortisAPILib\Exceptions\Response401tokenException;
use FortisAPILib\Exceptions\Response412Exception;
use FortisAPILib\Exceptions\ResponseErrorException;
use FortisAPILib\Models\ResponseThreeDSAuthentication;
use FortisAPILib\Models\V1MerchantThreedsecureAuthenticationRequest;

class M3DSAuthenticationController extends BaseController
{
    /**
     * Makes a 3DS Authentication request to authenticate a card or begin the challenge flow.  If a
     * challenge is required, a POST should be made to acs_url using the value of
     * base64_encoded_challenge_request for the value of "creq" using x-www-form-urlencoded for the
     * challenge request to the ACS.
     *
     * @param V1MerchantThreedsecureAuthenticationRequest $body
     *
     * @return ResponseThreeDSAuthentication Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function m3DSAuthenticationRequest(
        V1MerchantThreedsecureAuthenticationRequest $body
    ): ResponseThreeDSAuthentication {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/v1/merchant/threedsecure/authentication')
            ->auth(Auth::and('user-id', 'user-api-key', 'developer-id'))
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Bad Request', ResponseErrorException::class))
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->throwErrorOn('412', ErrorType::init('Precondition Failed', Response412Exception::class))
            ->type(ResponseThreeDSAuthentication::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
