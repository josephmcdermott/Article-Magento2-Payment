<?php
/**
 * CodeByJoe Ltd :: http://www.codebyjoe.com
 *
 * @category CodeByJoe
 * @package CodeByJoe_ArticlePayment
 * @author Joseph McDermott <code@josephmcdermott.co.uk>
 * @license http://choosealicense.com/licenses/mit/ MIT License
 */
namespace CodeByJoe\ArticlePayment\Model;

use Magento\Payment\Model\Method\AbstractMethod;

class MethodOne extends AbstractMethod
{
    const CODE = 'codebyjoe_articlepayment_method_one';

    /**
     * @var string
     * @author Joseph McDermott <code@josephmcdermott.co.uk>
     */
    protected $_code = self::CODE;

    /**
     * Check whether payment method can be used
     *
     * @param \Magento\Quote\Api\Data\CartInterface|null $quote
     * @return bool
     */
    public function isAvailable($quote = null)
    {
        return true;
    }
}