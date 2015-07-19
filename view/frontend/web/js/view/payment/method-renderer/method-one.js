/*browser:true*/
/*global define*/
define(
    [
        'Magento_Checkout/js/view/payment/default',
    ],
    function (Component) {
        return Component.extend({
            defaults: {
                template: 'CodeByJoe_ArticlePayment/payment/method-one'
            }
        });
    }
);