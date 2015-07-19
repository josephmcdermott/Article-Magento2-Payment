define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'codebyjoe_articlepayment_method_one',
                component: 'CodeByJoe_ArticlePayment/js/view/payment/method-renderer/method-one'
            }
        );

        return Component.extend({});
    }
);