<?php

namespace CreditCard;

use CreditCard\Exception\NumberValidateException;
use Respect\Validation\Validator as v;

/**
 * Class Card
 * @package CreditCard
 *
 * @author Vinicius V. de Olivera <vinyvicente@gmail.com>
 */
class Card
{
    /**
     * @param $cardNumber
     * @return array
     * @throws NumberValidateException
     */
    public static function validate($cardNumber)
    {
        if (!v::numeric()->noWhitespace()->validate($cardNumber)) {
            throw new NumberValidateException;
        }

        return [
            'valid' => true,
            'type' => 'visa',
        ];
    }
}
