<?php

/**
 * Title: PayPal Payments Standard commands
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 * @see https://developer.paypal.com/docs/classic/paypal-payments-standard/integration-guide/formbasics/
 * @see https://developer.paypal.com/docs/classic/paypal-payments-standard/integration-guide/Appx_websitestandard_htmlvariables/
 */
class Pronamic_WP_Pay_Gateways_PayPalPaymentsStandard_Commands {
	/**
	 * Buy Now buttons
	 *
	 * The button that the person clicked was a Buy Now button.
	 *
	 * @var string
	 */
	const XCLICK = '_xclick';

	/**
	 * Shopping cart buttons
	 *
	 * For shopping cart purchases. The following variables specify the kind of shopping cart button that the person clicked:
	 * - add – Add to Cart buttons for the PayPal Shopping Cart
	 * - display – View Cart buttons for the PayPal Shopping Cart
	 * - upload – The Cart Upload command for third-party carts
	 *
	 * @var string
	 */
	const CART = '_cart';

	/**
	 * Buy Gift Certificate buttons
	 *
	 * The button that the person clicked was a Buy Gift Certificate button.
	 *
	 * @var string
	 */
	const OE_GIFT_CERTIFICATE = '_oe-gift-certificate';

	/**
	 * Subscribe buttons
	 *
	 * The button that the person clicked was a Subscribe button.
	 *
	 * @var string
	 */
	const XCLICK_SUBSCRIPTIONS = '_xclick-subscriptions';

	/**
	 * Automatic Billing buttons
	 *
	 * The button that the person clicked was an Automatic Billing button.
	 *
	 * @var string
	 */
	const XCLICK_AUTO_BILLING = '_xclick-auto-billing';

	/**
	 * Installment Plan buttons
	 *
	 * The button that the person clicked was an Installment Plan button.
	 *
	 * @var string
	 */
	const XCLICK_PAYMENT_PLAN = '_xclick-payment-plan';

	/**
	 * Donate buttons
	 *
	 * The button that the person clicked was a Donate button.
	 *
	 * @var string
	 */
	const DONATIONS = '_donations';

	/**
	 * The button that the person clicked was protected from tampering by using encryption, 
	 * or the button was saved in the merchant's PayPal account. PayPal determines which 
	 * kind of button was clicked by decoding the encrypted code or by looking up the saved 
	 * button in the merchant's account.
	 *
	 * @var string
	 */
	const S_XCLICK = '_s-xclick';
}
