<?php

/**
 * Title: PayPal Payments Standard client
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_PayPalPaymentsStandard_Client {
	/**
	 * Production URL
	 * 
	 * @see https://developer.paypal.com/docs/classic/paypal-payments-standard/integration-guide/formbasics/
	 * @var string
	 */
	const PRODUCTION_URL = 'https://www.paypal.com/cgi-bin/webscr';

	/**
	 * Sandbox URL
	 *
	 * @var string
	 */
	const SANDBOX_URL = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
}
