define(['jquery',
    'jquery/ui',
    'Magento_Ui/js/modal/modal'],function ($) {
    'use strict';
    alert({
        title: 'Alert',
        content: $('.alert-modal-content'),
        modalClass: 'alert',
        actions: {
            always: function() {
                // do something when the modal is closed
            }
        },
        buttons: [{
            text: $.mage.__('Accept'),
            class: 'action primary accept',

            /**
             * Click handler.
             */
            click: function () {
                this.closeModal(true);
            }
        }, {
            text: $.mage.__('New Action'),
            class: 'action',

            /**
             * Click handler.
             */
            click: function () {
                // New action
            }
        }]
    });
});
