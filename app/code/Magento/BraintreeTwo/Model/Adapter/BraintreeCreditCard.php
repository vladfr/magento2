<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\BraintreeTwo\Model\Adapter;

use \Braintree_CreditCard;
use \Braintree_Result_Error;
use \Braintree_Result_Successful;

/**
 * BraintreeCreditCard
 *
 * @codeCoverageIgnore
 */
class BraintreeCreditCard
{
    /**
     * @param string $id
     * @return \Braintree_CreditCard
     */
    public function find($token)
    {
        return \Braintree_CreditCard::find($token);
    }

    /**
     * @param string $token
     * @return \Braintree_Result_Successful
     */
    public function delete($token)
    {
        return \Braintree_CreditCard::delete($token);
    }
}
