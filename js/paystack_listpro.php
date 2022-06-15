<?php
/*
  Plugin Name: Paystack for Listingpro
  Plugin URI:
  Description: This plugin Only compatible With listingpro Theme By CridioStudio.
  Version: 1.5
  Author: CridioStudio (Dev Team)
  Author URI: http://www.crid.io
  Author Email: help@cridio.com
  Text Domain: paystack-for-listingpro
  Copyright 2018 CridioStudio
 */

if (!defined('PAYSTACK_PLUGIN_DIR')) {
    define('PAYSTACK_PLUGIN_DIR', plugin_dir_path(__FILE__));
}


/*
 * class for payment method PAYSTACK
 * it will be used to add extra payment method method
 */

class Paystack_for_listingpro {
    /*
     * $paystack_license    check license status
     * @since   1.0
     * @var     bool
     */

    public $paystack_license = false;


    /*
     * $paystack_toggle    check license status
     * @since   1.0
     * @var     bool
     */
    public $paystack_toggle = false;
    /*
     * $mode  Test/Live
     * @since   1.0
     * @var     string
     */
    public $mode;


    /*
     * $public_key  Public Key
     * if you are in Test mode use TEST PUBLIC else PUBLIC
     * @since   1.0
     * @var     string
     */
    public $public_key;

    /*
     * $public_key  Secret Key
     * if you are in Test mode use TEST SECRET else SECRET
     * @since   1.0
     * @var     string
     */
    public $secret_key;



    /*
     * $Currency    currency ABBREVIATION e.g GHS.
     * please make sure that currency set in your paystack account and on website are same.
     * @since   1.0
     * @var     string
     */
    public $currency;

    /*
     * pass arguments while creating object.
     * $mode
     * $key
     * $curr
     */

    public function __construct($mode, $public_key, $secret_key, $paystack_toggle) {
        $this->mode = $mode;
        $this->public_key = $public_key;
        $this->secret_key = $secret_key;
        $this->paystack_toggle = $paystack_toggle;
        
        $paystack_status = get_option('lp-paystack');
        if ($paystack_status == 'active') {
            $this->paystack_license = true;
        }
        if (!$this->paystack_license) {
            add_action('admin_notices', array($this, 'lp_activate_paystack'));
        }

        add_action('init', array($this, 'listingpro_paystack_load_textdomain'), 0);
        add_filter('redux/options/listingpro_options/sections', array($this, 'lp_paystack_section'));
        add_action('admin_post_activate_paystack', array($this, 'activate_paystack_cb'));
        add_action('admin_post_nopriv_activate_paystack', array($this, 'activate_paystack_cb'));
        add_action('wp_enqueue_scripts', array($this, 'lp_paystack_script'));
        add_action('admin_enqueue_scripts', array($this, 'lp_paystack_script_admin'));
        add_action('lp_add_custom_payment_method_html', array($this, 'lp_paystack_payment_method_html'), 10, 1);
        add_action('wp_ajax_lp_save_paystack_transaction', array($this, 'lp_save_paystack_transaction'));
        add_action('wp_ajax_nopriv_lp_save_paystack_transaction', array($this, 'lp_save_paystack_transaction'));
        add_action('wp_ajax_lp_save_paystack_ads_campaign', array($this, 'lp_save_paystack_ads_campaign'));
        add_action('wp_ajax_nopriv_lp_save_paystack_ads_campaign', array($this, 'lp_save_paystack_ads_campaign'));
        add_action('wp_ajax_lp_unsub_paystack', array($this, 'lp_unsub_paystack'));
        add_action('wp_ajax_nopriv_lp_unsub_paystack', array($this, 'lp_unsub_paystack'));
        add_action('lp_invoices_filter', array($this, 'lp_ads_invoices_filter_cb'));
        add_action('lp_paystack_unsubscribe', array($this, 'paystack_process_unsub'), 30, 2);

        add_filter('lp_price_plan_recurring_duration', array($this, 'lp_price_plan_recurring_duration_callback'), 30, 3);
        add_filter('lp_checkout_payment_methods', array($this, 'lp_enable_paystack_payment_method'), 30, 1);
        add_filter('lp_plan_extra_attr', array($this, 'lp_plan_extra_attr_callback'), 30, 3);
        add_action('add_meta_boxes', array($this, 'paystack_recurring_payment'));
        add_action('save_post', array($this, 'paystack_plan_package_type_save'));
        
        if(isset($_REQUEST['paystack_renew_listings']) && $_REQUEST['paystack_renew_listings'] == 'true'){
            add_action('init', array($this, 'lp_paystack_renew_listings'));
        }
        
        add_action('lp_daily_renew_listings_subcription', array($this, 'lp_paystack_renew_listings'));
    }

    public function listingpro_paystack_load_textdomain() {
        load_plugin_textdomain('paystack-for-listingpro', false, basename(dirname(__FILE__)) . '/languages');
    }

    public function lp_ads_invoices_filter_cb() {
        ?>
        <option value="paystack">
            <?php echo esc_html__('Paystack', 'paystack-for-listingpro'); ?>
        </option>
        <?php
    }

    public function activate_paystack_cb() {
        if (isset($_POST['paystack_nonce_field']) && wp_verify_nonce($_POST['paystack_nonce_field'], 'paystack_nonce') && !empty($_POST['license_key'])) {
            $product_site = 'https://listingprowp.com/';
            $action = '?edd_action=activate_license';
            $item_id = '&item_id=7878';
            $license = '&license=' . sanitize_text_field($_POST['license_key']);
            $site_url = '&url=' . get_site_url();
            $api_url = $product_site . $action . $item_id . $license . $site_url;

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $api_url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

            $response = curl_exec($ch);
            curl_close($ch);

            $response = json_decode($response);
            if ($response->license == 'valid') {
                update_option('lp-paystack', 'active');
                $redirect_url = admin_url();
                $redirect_url .= '?license-res=success';
            }
            if ($response->license == 'invalid') {
                $redirect_url = admin_url();
                $redirect_url .= '?license-res=failed';
            }
            wp_redirect($redirect_url);
        }
    }

    public function lp_activate_paystack() {
        ?>
        <script>
            jQuery(document).ready(function () {
                jQuery('.colose-activation-popup').click(function (e) {
                    e.preventDefault();
                    jQuery('.paystack-activation-wrap').fadeOut();
                });
                jQuery('.activate-paystack-addon').click(function (e) {
                    e.preventDefault();
                    jQuery('.paystack-activation-wrap').fadeIn();
                });
            });
            jQuery(document).on('keyup', ".key-enter-bar-paystack", function () {
                var clenght = jQuery('.key-enter-bar-paystack').val();
                if (clenght.length >= 32) {
                    jQuery(".button-success").removeAttr("disabled");
                } else {
                    jQuery(".button-success").attr("disabled", "");
                }
            });
        </script>
        <div class="paystack-activation-wrap">
            <div class="paystack-activation-wrap-inner">
                <div class="e-blaster-activation license-verification-form">
                    <div class="colored-top-bar"></div>
                    <div class="license-verification-form-header">
                        <span class="colose-activation-popup">x</span>
                        <span class="license-verification-form-header-title"><?php esc_html_e('Paystack License Activation', 'paystack-for-listingpro'); ?></span>
                    </div>
                    <div class="license-verification-form-box-content">
                        <p class="license-verification-form-content-box-des"><?php esc_html_e('When you purchase a single license of', 'paystack-for-listingpro'); ?> <a
                                href="" target="_blank"><?php esc_html_e('Paystack', 'paystack-for-listingpro'); ?></a>, <?php esc_html_e('you are allowed to use the plugin on one single finished directory site.', 'paystack-for-listingpro'); ?></p>
                    </div>
                    <form class="license-verification-form-container" id="activate-paystack" action="<?php echo esc_attr('admin-post.php'); ?>" method="post">
                        <img alt="" class="img-key-bar" src="<?php echo get_site_url(); ?>/wp-content/plugins/listingpro-plugin/images/key-img.png">
                        <input type="hidden" name="action" value="activate_paystack">
                        <input type="hidden" name="item_id" value="7878">
                        <span style="position: relative;">
                            <span class="input-caption-left"><?php esc_html_e('ENTER YOUR ITEM PURCHASE CODE (KEY)', 'paystack-for-listingpro'); ?></span>
                            <input id="license_key" class="key-enter-bar-paystack" required=""
                                   placeholder="E.G : XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX" name="license_key"
                                   maxlength="32" autocomplete="off" type="text">
                        </span>
                        <?php echo wp_nonce_field('paystack_nonce', 'paystack_nonce_field', true, false); ?>
                        <input type="submit" name="submit" disabled class="button button-success button-hero" value="<?php esc_html_e('Activate', 'paystack-for-listingpro'); ?>">
                    </form>
                </div>
            </div>
        </div>
        <div class="notice notice-warning bg-red"><p><strong><?php esc_html_e('Paystack', 'paystack-for-listingpro'); ?></strong></p> <?php esc_html_e('is currently inactive.', 'paystack-for-listingpro'); ?>
            <a href="#" class="activate-paystack-addon"><?php esc_html_e('Activate', 'paystack-for-listingpro'); ?></a> <?php esc_html_e('your license key or get one', 'paystack-for-listingpro'); ?> <a target="_blank" href="https://listingprowp.com/downloads/paystack-for-listingpro/"><?php esc_html_e('here', 'paystack-for-listingpro'); ?></a>.
        </div>
        <?php
    }

    public function lp_paystack_script() {
        wp_register_script('paystack-popup', 'https://js.paystack.co/v1/inline.js');
        wp_register_script('paystack-main', plugin_dir_url(__FILE__) . 'assets/js/paystack.js', array('jquery'));

        wp_enqueue_script('paystack-popup');
        wp_enqueue_script('paystack-main');

        $listingpro_month_year_plans = lp_theme_option('listingpro_month_year_plans');
        $currency_position = lp_theme_option('pricingplan_currency_position');
        $recurring_minimum_amount = 99;
        if ($currency_position == 'right') {
            $recurring_minimum_amount .= listingpro_currency_sign();
        } else {
            $recurring_minimum_amount = listingpro_currency_sign() . $recurring_minimum_amount;
        }
        $recurring_min_amount_error = sprintf(__('Sorry! Paid amount should be greater than %s for recurring payment.', 'paystack-for-listingpro'), $recurring_minimum_amount);
        wp_localize_script('paystack-main', 'lp_paystack', array('recurring_min_amount_error' => $recurring_min_amount_error, 'lp_month_year_plans' => $listingpro_month_year_plans));

        wp_enqueue_style('paystack-css', plugin_dir_url(__FILE__) . 'assets/css/paystack.css');
    }

    public function lp_paystack_script_admin() {
        wp_enqueue_style('paystack-css', plugin_dir_url(__FILE__) . 'assets/css/paystack.css');

        wp_register_script('paystack-admin', plugin_dir_url(__FILE__) . 'assets/js/paystack-admin.js', array('jquery'));
        wp_enqueue_script('paystack-admin');
    }

    public function lp_save_paystack_transaction() {
        global $wpdb, $listingpro_options;

        $coupon = isset($_POST['coupon']) ? $_POST['coupon'] : '';
        $planID = isset($_POST['plan']) ? $_POST['plan'] : '';
        $plan_time = isset($_POST['plan_time']) ? $_POST['plan_time'] : '';
        $token = isset($_POST['token']) ? $_POST['token'] : '';
        $recurring = isset($_POST['recurring']) ? $_POST['recurring'] : '';
        $listing = isset($_POST['listing']) ? $_POST['listing'] : '';
        $currency = isset($_POST['currency']) ? $_POST['currency'] : lp_theme_option('currency_paid_submission');
        $callFrom = isset($_POST['callFrom']) ? $_POST['callFrom'] : '';

        $planprice = '';
        if (isset($_POST['plan_price']) && !empty($_POST['plan_price'])) {
            $planprice = $_POST['plan_price'];
        }
        if (empty($planprice)) {
            $planprice = get_post_meta($planID, 'plan_price', true);
        }

        $taxrate = 0;
        if (isset($_POST['taxrate']) && !empty($_POST['taxrate'])) {
            $taxrate = $_POST['taxrate'];
        }

        $claimPost = get_post_meta($listing, 'claimpID', true);
        if (isset($claimPost) && isset($callFrom) && $callFrom == 'claim') {
            if (!empty($claimPost)) {
                $new_author = listing_get_metabox_by_ID('claimer', $claimPost);
                $exMetaboxes = get_post_meta($listing, 'lp_' . strtolower(THEMENAME) . '_options', true);
                $feautes_metaBoxes = get_post_meta($listing, 'lp_' . strtolower(THEMENAME) . '_options_fields', true);
                $argListing = array(
                    'ID' => $listing,
                    'post_author' => $new_author,
                );
                wp_update_post($argListing);
                update_post_meta($listing, 'lp_' . strtolower(THEMENAME) . '_options', $exMetaboxes);
                update_post_meta($listing, 'lp_' . strtolower(THEMENAME) . '_options_fields', $feautes_metaBoxes);
                lp_update_paid_claim_metas($claimPost, $listing, 'stripe');
                delete_post_meta($listing, 'claimpID');
            }
        }

        $planprice = ($planprice + $taxrate);
        $planprice = (float) $planprice * 100;
        $planprice = round($planprice, 2);
        $planprice = (int) $planprice;
        $planpriceINVOICE = number_format(($planprice / 100), 2, '.', '');

        $status = 'success';
        $payment_method = 'paystack';
        $user_id = get_current_user_id();

        // Updating Listing Status
        $listing_status = get_post_status($listing);
        if ($listingpro_options['listings_admin_approved'] == "no" || $listing_status == "publish") {
            $my_post = array('ID' => $listing, 'post_date' => date("Y-m-d H:i:s"), 'post_status' => 'publish');
        } else {
            $my_post = array('ID' => $listing, 'post_date' => date("Y-m-d H:i:s"), 'post_status' => 'pending');
        }
        wp_update_post($my_post);

        // Applying Coupon Code
        if (isset($coupon) && !empty($coupon)) {
            listingpro_apply_coupon_code_at_payment($coupon, $listing, $taxrate, $planprice);
        }

        /// Update New Plan ID & Remove previous subscription
        $ex_plan_id = listing_get_metabox_by_ID('Plan_id', $listing);
        $new_plan_id = listing_get_metabox_by_ID('changed_planid', $listing);
        if (!empty($new_plan_id)) {
            if ($ex_plan_id != $new_plan_id) {
                lp_cancel_stripe_subscription($listing, $ex_plan_id);
                listing_set_metabox('Plan_id', $new_plan_id, $listing);
                listing_set_metabox('changed_planid', '', $listing);
                listing_draft_save($listing, $user_id);
            }
        }

        $listing_order = $wpdb->get_row("SELECT * FROM " . $wpdb->prefix . "listing_orders WHERE post_id = $listing AND plan_id = $planID ORDER BY main_id DESC LIMIT 0, 1", ARRAY_A);
        $order_id = isset($listing_order['order_id']) ? $listing_order['order_id'] : 0;

        $currency_position = lp_theme_option('pricingplan_currency_position');
        if ($currency_position == 'right') {
            $plan_price = $planpriceINVOICE . $currency;
        } else {
            $plan_price = $currency . $planpriceINVOICE;
        }

        $plan_title = isset($listing_order['plan_name']) ? $listing_order['plan_name'] : '';
        $invoice_no = $order_id;

        $update_data = array(
            'currency' => $currency,
            'date' => date('d-m-Y'),
            'status' => $status,
            'description' => 'listing has been purchased',
            'payment_method' => $payment_method,
            'summary' => $recurring == 'yes' ? 'recurring' : $status,
            'price' => $planpriceINVOICE,
            'tax' => $taxrate,
            'token' => $token,
            'transaction_id' => $token,
            'status' => $status,
            'used' => 1
        );

        $where = array('order_id' => $order_id);
        $update_format = array('%s', '%s', '%s', '%s', '%s', '%s', '%s');
        $wpdb->update($wpdb->prefix . 'listing_orders', $update_data, $where, $update_format);

        $admin_email = get_option('admin_email');
        $website_url = site_url();
        $website_name = get_option('blogname');
        $current_user = wp_get_current_user();
        $useremail = $current_user->user_email;
        $user_name = $current_user->user_login;
        $listing_title = esc_html(get_the_title($listing));
        $listing_url = esc_url(get_the_permalink($listing));

        /// Sending Admin Email Notification
        $mail_subject = $listingpro_options['listingpro_subject_purchase_activated_admin'];
        $formated_mail_subject = lp_sprintf2("$mail_subject", array(
            'website_url' => "$website_url",
            'website_name' => "$website_name",
            'user_name' => "$user_name",
        ));

        $mail_content = $listingpro_options['listingpro_content_purchase_activated_admin'];
        $formated_mail_content = lp_sprintf2("$mail_content", array(
            'website_url' => "$website_url",
            'listing_title' => "$listing_title",
            'plan_title' => "$plan_title",
            'plan_price' => "$plan_price",
            'listing_url' => "$listing_url",
            'invoice_no' => "$invoice_no",
            'website_name' => "$website_name",
            'payment_method' => "$payment_method",
            'user_name' => "$user_name",
                )
        );

        lp_mail_headers_append();
        $headers1[] = 'Content-Type: text/html; charset=UTF-8';
        LP_send_mail($admin_email, $formated_mail_subject, $formated_mail_content, $headers1);

        /// Sending Listing Owner Email Notification
        $mail_subject2 = $listingpro_options['listingpro_subject_purchase_activated'];
        $formated_mail_subject2 = lp_sprintf2("$mail_subject2", array(
            'website_url' => "$website_url",
            'website_name' => "$website_name",
            'user_name' => "$user_name",
                )
        );

        $mail_content2 = $listingpro_options['listingpro_content_purchase_activated'];
        $formated_mail_content2 = lp_sprintf2("$mail_content2", array(
            'website_url' => "$website_url",
            'listing_title' => "$listing_title",
            'plan_title' => "$plan_title",
            'plan_price' => "$plan_price",
            'listing_url' => "$listing_url",
            'invoice_no' => "$invoice_no",
            'website_name' => "$website_name",
            'payment_method' => "$payment_method",
            'user_name' => "$user_name",
                )
        );

        lp_mail_headers_append();
        $headers[] = 'Content-Type: text/html; charset=UTF-8';
        LP_send_mail($useremail, $formated_mail_subject2, $formated_mail_content2, $headers);
        lp_mail_headers_remove();

        $enable_paystack_recurring = get_post_meta($planID, 'enable_paystack_recurring', true);
        if ($recurring == 'yes' && $enable_paystack_recurring == 'true') {
            $this->lp_create_paystack_plan_subsc($planID, $planprice, $_POST['email'], $listing, $plan_time);
        }

        $response = json_encode(array('status' => 'success', 'redirect' => $this->redirect_url()));
        die($response);
    }

    public function lp_save_paystack_ads_campaign() {
        global $listingpro_options;

        $currency = lp_theme_option('currency_paid_submission');
        $status = 'success';
        $listing_id = isset($_POST['listing']) ? $_POST['listing'] : '';
        $token = isset($_POST['token']) ? $_POST['token'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $taxprice = isset($_POST['taxprice']) ? $_POST['taxprice'] : '';
        $adsTypeval = isset($_POST['adsTypeval']) ? $_POST['adsTypeval'] : '';
        $ads_price = isset($_POST['ads_price']) ? $_POST['ads_price'] : '';
        $ads_days = isset($_POST['ads_days']) ? $_POST['ads_days'] : '';
        $price_packages = isset($_POST['packages']) ? $_POST['packages'] : '';
        $budget = isset($_POST['lpTOtalprice']) ? $_POST['lpTOtalprice'] : '';
        $payment_method = 'paystack';
        $ads_org_price = $ads_price;
//        if($listingpro_options['lp_tax_swtich'] == "1"){
//            $ads_org_price = $ads_price - $taxprice;
//        }

        lp_save_campaign_data($price_packages, $token, $payment_method, $token, $status, $ads_price, $budget, $listing_id, $adsTypeval, $ads_days, $ads_org_price, $taxprice);
        $response = json_encode(array('status' => 'success', 'token' => $token, 'email' => $email, 'listing' => $listing_id, 'redirect' => $this->redirect_url(), 'pgks' => $price_packages));
        die($response);
    }

    public function redirect_url() {
        global $listingpro_options, $wp_rewrite;
        $lpURLChar = '?';
        if ($wp_rewrite->permalink_structure == '') {
            $lpURLChar = '&';
        }
        $payment_success = $listingpro_options['payment-checkout'];
        if (!empty($payment_success)) {
            $payment_success = get_permalink($payment_success);
            $payment_success .= $lpURLChar . 'lpcheckstatus=success';
        }

        return $payment_success;
    }

    public function lp_paystack_payment_method_html($location) {
        if ($location == 'listing') {
            return $this->lp_paystack_listing_html();
        }
        if ($location == 'ads') {
            return $this->lp_paystack_ads_html();
        }
    }

    public function lp_paystack_listing_html() {
        $current_user = get_current_user_id();
        $user_info = get_userdata($current_user);
        $inactive_class = 'inactive-payment-mode';

        if ($this->paystack_toggle) {
            if ($this->paystack_license) {
                $inactive_class = '';
            }
            ?>
            <div class="lp-method-wrap paystack-metho-wrap <?php echo $inactive_class; ?>">
                <?php
                if ($this->paystack_license) {
                    ?>
                    <input type="hidden" id="paystack_public_key" value="<?php echo $this->public_key; ?>">
                    <input type="hidden" id="customer_email" value="<?php echo $user_info->user_email; ?>">
                    <?php
                    if (isset($_GET['claim_post']) && isset($_GET['claim_plan'])) {
                        echo '<input type="hidden" id="claimID" value="' . sanitize_text_field($_GET['claim_post']) . '">';
                        echo '<input type="hidden" id="claimPlan" value="' . sanitize_text_field($_GET['claim_plan']) . '">';
                        echo '<input type="hidden" id="hidePaystackRecurring" value="">';
                    }
                    ?>
                    <label>
                        <div class="radio radio-danger">
                            <input type="radio" name="plan" id="rd-paystack" value="paystack">
                            <label for="rd-paystack"></label>
                        </div>
                        <p><?php esc_html_e('Paystack', 'paystack-for-listingpro'); ?></p>
                        <div class="lp-checkout-payment-img">
                            <img src="<?php echo plugin_dir_url(__FILE__); ?>/assets/images/paystack.png">
                        </div>
                    </label>
                    <?php
                } else {
                    ?>
                    <label>
                        <p class="inactive-license"><?php esc_html_e('Inactive License', 'paystack-for-listingpro'); ?></p>
                        <div class="lp-checkout-payment-img">
                            <img src="<?php echo plugin_dir_url(__FILE__); ?>/assets/images/paystack.png">
                        </div>
                    </label>
                    <?php
                }
                ?>
            </div>
            <?php
        }
    }

    public function lp_paystack_ads_html() {
        ob_start();
        $current_user = get_current_user_id();
        $user_info = get_userdata($current_user);
        if ($this->paystack_toggle) {
            if ($this->paystack_license) {
                ?>
                <input type="hidden" id="paystack_public_key" value="<?php echo $this->public_key; ?>">
                <input type="hidden" id="customer_email" value="<?php echo $user_info->user_email; ?>">
                <div class="col-sm-4">
                    <div class="lp-payement-images">
                        <input class="radio_checked" type="radio" name="method" id="adPaystackOpt" value="paystack">
                        <label class="lp-lbl-with-radio"></label>
                        <label for="adPaystackOpt" class="lp-label-wrp">
                            <img src="<?php echo plugin_dir_url(__FILE__); ?>/assets/images/paystack.png">
                        </label>
                    </div>
                </div>
                <?php
            } else {
                ?>
                <div class="col-sm-4">
                    <div class="lp-payement-images">
                        <div class="lp-label-wrp lp-label-wrp lp-payement-images-new-wrap">
                            <span><?php esc_html_e('Paystack Inactive', 'paystack-for-listingpro'); ?></span>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        return ob_get_contents();
        ob_end_clean();
    }

    public function lp_create_paystack_plan_subsc($plan_id, $amount, $email, $listing_id, $plan_time) {

        $return = false;

        $plan_name = get_the_title($plan_id);
        $currency = lp_theme_option('currency_paid_submission');

        $interval = get_post_meta($plan_id, 'paystack_recurring_duration', true);
        $interval = ($interval == '') ? 'monthly' : $interval;

        $lp_purchase_days_arr = array(
            'daily' => 1,
            'weekly' => 7,
            'monthly' => 30,
            'quarterly' => 90,
            'annually' => 365,
        );
        $lp_purchase_days = isset($lp_purchase_days_arr[$interval]) ? $lp_purchase_days_arr[$interval] : 30;
        listing_set_metabox('lp_purchase_days', $lp_purchase_days, $listing_id);

        $post_fields = array(
            'name' => $plan_name . '(' . $email . ')',
            'interval' => $interval,
            'amount' => $amount,
            'currency' => $currency,
                //'invoice_limit' => 1,
        );
        $url = "https://api.paystack.co/plan";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_fields));  //Post Fields
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $headers = [
            'Authorization: Bearer ' . $this->secret_key,
            'Content-Type: application/json',
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $request = curl_exec($ch);
        curl_close($ch);

        if ($request) {
            $result = json_decode($request);
            if ($result->status) {
                $subs_fields = array(
                    'customer' => $email,
                    'plan' => $result->data->plan_code,
                    //'start_date' => gmdate("Y-m-d\TH:i:s\Z")
                );
                $url = 'https://api.paystack.co/subscription';

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($subs_fields));  //Post Fields
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                $headers = [
                    'Authorization: Bearer ' . $this->secret_key,
                    'Content-Type: application/json',
                ];
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                $subscription = curl_exec($ch);
                curl_close($ch);

                if ($subscription) {
                    $subs_res = json_decode($subscription);
                    if ($subs_res->status) {
                        $new_subsc = array(
                            'method' => 'paystack',
                            'email_tokent' => $subs_res->data->email_token,
                            'next_payment' => strtotime($subs_res->data->next_payment_date),
                            'plan_id' => $plan_id,
                            'subscr_id' => $subs_res->data->subscription_code,
                            'listing_id' => $listing_id
                        );
                        lp_add_new_susbcription_meta($new_subsc);
                        $return = true;
                    }
                }
            }
        }

        return $return;
    }

    public function lp_paystack_section($redux_sections) {
        $paystack_options[] = array(
            'title' => esc_html__('Paystack', 'paystack-for-listingpro'),
            'id' => 'mem-paystack-settings',
            'desc' => '',
            'subsection' => true,
            'fields' => array(
                array(
                    'id' => 'enable_paystack',
                    'type' => 'switch',
                    'title' => esc_html__('Paystack', 'paystack-for-listingpro'),
                    'desc' => esc_html__('Enable to allow Paystack Payments', 'paystack-for-listingpro'),
                    'subtitle' => '',
                    'default' => 0,
                    'on' => esc_html__('Enabled', 'paystack-for-listingpro'),
                    'off' => esc_html__('Disabled', 'paystack-for-listingpro'),
                ),
                array(
                    'id' => 'paystack_api',
                    'type' => 'select',
                    'required' => array('enable_paystack', '=', '1'),
                    'title' => esc_html__('API Type', 'paystack-for-listingpro'),
                    'subtitle' => esc_html__('Sandbox = test API. LIVE = real payments API', 'paystack-for-listingpro'),
                    'desc' => esc_html__('Select between Live and Sandbox. Sandbox is used for testing ', 'paystack-for-listingpro'),
                    'options' => array(
                        'test' => esc_html__('Sandbox', 'paystack-for-listingpro'),
                        'live' => esc_html__('Live', 'paystack-for-listingpro'),
                    ),
                    'default' => 'test',
                ),
                array(
                    'id' => 'paystack_secret_key',
                    'required' => array('enable_paystack', '=', '1'),
                    'type' => 'text',
                    'title' => esc_html__('Secret Key', 'paystack-for-listingpro'),
                    'subtitle' => '',
                    'default' => '',
                ),
                array(
                    'id' => 'paystack_public_key',
                    'required' => array('enable_paystack', '=', '1'),
                    'type' => 'text',
                    'title' => esc_html__('Public Key', 'paystack-for-listingpro'),
                    'subtitle' => '',
                    'default' => '',
                ),
            )
        );

        array_splice($redux_sections, 33, 0, $paystack_options);
        return $redux_sections;
    }

    public function lp_unsub_paystack() {
        if (isset($_REQUEST)) {
            if (!isset($_REQUEST['subscriber_id'])) {
                check_ajax_referer('lp_ajax_nonce', 'lpNonce');
                // Nonce is checked, get the POST data and sign user on
                if (!wp_verify_nonce(sanitize_text_field($_POST['lpNonce']), 'lp_ajax_nonce')) {
                    $res = json_encode(array('nonceerror' => 'yes'));
                    die($res);
                }
            }

            $response = array();
            global $listingpro_options;

            if (isset($_REQUEST['subscriber_id'])) {
                $uid = $_REQUEST['subscriber_id'];
            } else {
                $uid = get_current_user_id();
            }
            $userSubscriptions = get_user_meta($uid, 'listingpro_user_sbscr', true);

            $subscrip_id = sanitize_text_field($_POST['sub_id']);

            if (!empty($userSubscriptions)) {
                foreach ($userSubscriptions as $key => $subscription) {
                    $subscr_id = $subscription['subscr_id'];
                    $subscr_listing_id = $subscription['listing_id'];

                    if ($subscr_id == $subscrip_id) {

                        if ($this->paystack_process_unsub($subscrip_id, $_REQUEST['token'])) {
                            $table = 'listing_orders';
                            $summary = 'expired';
                            $data = array('summary' => $summary);
                            $where = array('post_id' => $subscr_listing_id);
                            lp_update_data_in_db($table, $data, $where);

                            $website_url = site_url();
                            $website_name = get_option('blogname');
                            $listing_title = get_the_title($subscr_listing_id);
                            $listing_url = get_the_permalink($subscr_listing_id);


                            unset($userSubscriptions[$key]);
                            $headers[] = 'Content-Type: text/html; charset=UTF-8';
                            /* user email */
                            $author_obj = get_user_by('id', $uid);
                            $user_email = $author_obj->user_email;
                            $usubject = $listingpro_options['listingpro_subject_cancel_subscription'];
                            $usubject = lp_sprintf2("$usubject", array(
                                'website_url' => "$website_url",
                                'listing_title' => "$listing_title",
                                'listing_url' => "$listing_url",
                                'website_name' => "$website_name",
                            ));
                            $ucontent = $listingpro_options['listingpro_content_cancel_subscription'];
                            $ucontent = lp_sprintf2("$ucontent", array(
                                'website_url' => "$website_url",
                                'listing_title' => "$listing_title",
                                'listing_url' => "$listing_url",
                                'website_name' => "$website_name",
                            ));
                            LP_send_mail($user_email, $usubject, $ucontent, $headers);
                            /* admin email */
                            $adminemail = get_option('admin_email');
                            $asubject = $listingpro_options['listingpro_subject_cancel_subscription_admin'];
                            $asubject = lp_sprintf2("$asubject", array(
                                'website_url' => "$website_url",
                                'listing_title' => "$listing_title",
                                'listing_url' => "$listing_url",
                                'website_name' => "$website_name",
                            ));
                            $acontent = $listingpro_options['listingpro_content_cancel_subscription_admin'];
                            $acontent = lp_sprintf2("$acontent", array(
                                'website_url' => "$website_url",
                                'listing_title' => "$listing_title",
                                'listing_url' => "$listing_url",
                                'website_name' => "$website_name",
                            ));
                            LP_send_mail($adminemail, $asubject, $acontent, $headers);

                            if (!empty($userSubscriptions)) {
                                update_user_meta($uid, 'listingpro_user_sbscr', $userSubscriptions);
                            } else {
                                delete_user_meta($uid, 'listingpro_user_sbscr');
                            }
                            /* end removing user meta */
                            $response = array('status' => 'success', 'msg' => esc_html__('you have unsubscribed successfully', 'paystack-for-listingpro'));
                        } else {
                            $response = array('status' => 'fail', 'msg' => esc_html__('something went wrong', 'paystack-for-listingpro'));
                        }
                    }
                }
            }
        } else {
            $response = array('status' => 'fail', 'msg' => esc_html__('something went wrong', 'paystack-for-listingpro'));
        }
        die(json_encode($response));
    }

    public function paystack_process_unsub($sub_id, $token) {
        $un_subs_fields = array(
            'code' => $sub_id,
            'token' => $token
        );
        $url = "https://api.paystack.co/subscription/disable";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($un_subs_fields));  //Post Fields
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $headers = [
            'Authorization: Bearer ' . $this->secret_key,
            'Content-Type: application/json',
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $request = curl_exec($ch);
        curl_close($ch);

        if ($request) {
            $result = json_decode($request);
            if ($result->status) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function lp_price_plan_recurring_duration_callback($output = '', $plan_id = 0, $view = 'vertical_view_1') {

        if ($this->paystack_toggle) {
            $enable_paystack_recurring = get_post_meta($plan_id, 'enable_paystack_recurring', true);
            if ($enable_paystack_recurring == 'true') {
                $paystack_recurring_duration = get_post_meta($plan_id, 'paystack_recurring_duration', true);
                $paystack_recurring_duration = $paystack_recurring_duration == '' ? 'monthly' : $paystack_recurring_duration;

                $intervals = array(
                    'daily' => esc_html__('Daily', 'paystack-for-listingpro'),
                    'weekly' => esc_html__('Weekly', 'paystack-for-listingpro'),
                    'monthly' => esc_html__('Monthly', 'paystack-for-listingpro'),
                    'quarterly' => esc_html__('Quarterly ', 'paystack-for-listingpro'),
                    'annually' => esc_html__('Annually ', 'paystack-for-listingpro'),
                );
                $recurring_duration = isset($intervals[$paystack_recurring_duration]) ? $intervals[$paystack_recurring_duration] : '';
                if ($recurring_duration) {
                    if ($view == 'vertical_view_1') {
                        ob_start();
                        ?>
                        <li>
                            <span class="icon-text">
                                <img class="icon icons8-Cancel" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAFaElEQVRoQ+1aTVbbVhT+rpSDO6s5EePACgqTVh7F7ABWgFkBZlKbUckInAnJCmJWULICxMhuJjgrCIxxDnQGja3bcyU9+0lI1pNsSk9OPAL8/r77893v3QfhO/nQd4IDP4CkefLtp9vXzH6dmesErgK0Ph3HAwbdye9E5BFZH3//dXmwqIiY2yNHvZs6Ee0Q0Ch6KAauAHjMfHpQW/GKztfHlwbS+Wu4xYw9AupqQQZ/BsTa8IjsK93ibz/dro/Ho6plUZUZdWJsgfBqOjcA9KYsoMJAjnq3q0TjDxMAjGuAuz5edA9qy2Jh44+A4/Foi4maBPwsExnwKhV7e39jOQhD008hIOIFMD4AqDLwN4EOW+7Ld6abZY07ubyt/nM/aipAEnKWZW8nc0jGZQE0BnLc/7pH4ODQDHysVOxGUavlAZaDPjyMPAL9ImN9xu5BzenKz0e9YcMinJBlb6aRhBGQ4/5QQilKZtpfhBdmgTruD98RsEeWvSGHFkKxiM6T4Aole6f/tQnwiYQSM5rKQnnWnfd7yUXJuSCP/LGAqIL5Tau2cpi29kyPRDnx5yxLzHvgWfOD3HkYnQf1iHHaqjmZFJ8JRCxi0fgysASePpzSAHX6N5cCQmi9UnlRn5WTmUCO+8NzoVhJ7LbrbD2l5dPWnuQl43rpJ3tdQEiuZNWZVCAqpCQvKhV7ddHslGcUPS8ty67rCe8zb6aBSQWivPEcIRXRrNQqgLDd+s05kx87vZtDEP0hBbPtOptJYzwCMqE6xnWr5qzmWW+R3+sMpdcQ2SOsMeMrUQBpXnkEpNMbdkHYmUV1izy8WitGLhkMpbySxmCPgfSHHNKtvVZUO5UFGKdZvmjVViZCVF8zAvsFwN1SxV7TczcGZJrk/Lntrmh3ibJHNJvX6Q+lVm2Z0Oxx/2YgEiYZXnEg04R633adptkx5hulaDZUDvZ6XhQo+ZIM/SQQD0SvdbaY75izZyuGEhCKZvP20+bE6lscSFRJlVjLW3Se702EYNr6U1aN51ICSJjoLdcxVsXMuCgqJE2FYBqQkBjGt5LwLddZVmNKA9ELV5Lz84Tgw8P4koDVPCGYtU4nYlbd4KWByCY6GAY12+7L93nhpgvBssy4cCCPwaDbdp3dLDBpQjAPeNr3uUAURxdN9rhn0sFoWsmYodJARPl1KTVH9+jC6Dfqb52JFmLEwcTzKV29mnpmctnjWaw1Z0EUa/n+2IvABG2db9+wyn5wQYs1E0wPnhxnVBCn3M6DlruyUWYzHQzAA4BEQVfLMlTyDIosZkoUmaQSaR7RGIIZdVVbZ1G3TCUaRQm0Xaeqg3wyGa96VLJZ3n3b1POFZLwKL+n2tV1nzXSTrCp8f49qnhA03aPTH0pFrxpdrILw6t2E4vGZuifptSPsryHBVqkSRf1R62c9usCYWm+R4yJ9JReqVG/IXpnicOoVnLVcZ3uRByu61vTild2amtmgIxoPwnb/8zToQhbVW7bZF6//dcs0qzWU5tHce4eyiOh/n7Ff9O5RNIzU+BgIg4jIBRKyWNQiCt5GzOR6WQAyT3+LMVUERkD0WI0OeLZUsXcX3UqN2Em6jFGv2Tw3jYEEYMIH0G703nfHoEOTy5SJdyIvyNtH+KxHaKh2qcn8QkBkwUDvYNQNC2bwDHdFRF3ft06LVvBgLcvfYeZGcPWNnvWY7WbRtQoDiRVNn5sKUPh3UbvwGORZln2dfOuLlPErAksnsR77hwLmCx84/M+ep5NuDrQZqBH0iwt+ghBinPngblkAMyVKwfNMhoeggn8gqDOhqmS8GiDXU2LI+7nnA968h9fPWTq0yoJ9qnk/gDyVZcuu+y8Ax3BgT7fNbAAAAABJRU5ErkJggg==" alt="icon-cross">
                            </span>
                            <span>
                                <?php echo esc_html__('Paystack Recurring Duration', 'listingpro-plugin') . ' : ' . $recurring_duration ?>
                            </span>
                        </li>
                        <?php
                        $output1 = ob_get_contents();
                        ob_end_clean();
                        $output = $output1;
                    } else if ($view == 'vertical_view_5' || $view == 'vertical_view_2' || $view == 'vertical_view_9') {
                        $output = '<li class="outer_tooltip_price">
                            <span class="icon-text">
                                <i class="awesome_plan_icon_check fa fa-check-circle"></i>
                            </span>';
                        $output .= '<span>';
                        $output .= esc_html__('Paystack Recurring Duration', 'listingpro-plugin') . ' : ' . $recurring_duration;
                        $output .= '</span>';
                        $output .= '<div class="tooltip_price_features">
                                <span><i class="fa fa-question"></i></span>
                                <p class="lp_tooltip_text">' . esc_html__('Lorem ipsum dolor sit amet, lorem sit.', 'listingpro-plugin') . '</p>
                            </div>';
                        $output .= '</li>';
                    } else if ($view == 'horizontal_view_1') {
                        $output .= "<br>" . esc_html__('Paystack Recurring Duration', 'listingpro-plugin') . ' : ' . $recurring_duration;
                    } else if ($view == 'horizontal_view_2') {
                        $output = '<li>
                            <span class="icon-text">
                                <i class="awesome_plan_icon_check fa fa-check-circle"></i>
                            </span>';
                        $output .= '<span>';
                        $output .= esc_html__('Paystack Recurring Duration', 'listingpro-plugin') . ' : ' . $recurring_duration;
                        $output .= '</span>';
                        $output .= '<div class="tooltip_price_features">
                                <span><i class="fa fa-question"></i></span>
                                <p class="lp_tooltip_text">' . esc_html__('Lorem ipsum dolor sit amet, lorem sit.', 'listingpro-plugin') . '</p>
                            </div>';
                        $output .= '</li>';
                    }
                }
            }
        }
        return $output;
    }

    public function lp_enable_paystack_payment_method($enable_payment_method) {
        if ($this->paystack_toggle) {
            return true;
        }
    }

    public function lp_plan_extra_attr_callback($paystack_recurring_payment, $plan_id, $post_id) {

        $enable_paystack_recurring = get_post_meta($plan_id, 'enable_paystack_recurring', true);
        if ($enable_paystack_recurring == 'true') {
            $paystack_recurring_payment .= ' data-paystackrecurring="yes"';
        }
        return $paystack_recurring_payment;
    }

    public function paystack_recurring_payment() {
        if ($this->paystack_toggle && $this->paystack_license) {
            add_meta_box(
                    'paystack_recurring_payment', __('Paystack Recurring Payment', 'paystack-for-listingpro'), array($this, 'paystack_recurring_payment_content'), 'price_plan'
            );
        }
    }

    public function paystack_plan_package_type_save($post_id = 0) {

        if (!isset($_POST['paystack_recurring_duration'])) {
            return;
        }
        $post_type = get_post_type($post_id);
        if ("price_plan" != $post_type) {
            return;
        } else {

            $enable_paystack_recurring = isset($_POST['enable_paystack_recurring']) ? $_POST['enable_paystack_recurring'] : '';
            $paystack_recurring_duration = isset($_POST['paystack_recurring_duration']) ? $_POST['paystack_recurring_duration'] : 'monthly';
            update_post_meta($post_id, 'enable_paystack_recurring', $enable_paystack_recurring);
            update_post_meta($post_id, 'paystack_recurring_duration', $paystack_recurring_duration);
        }
    }

    public function paystack_recurring_payment_content() {
        global $post;

        $enable_paystack_recurring = get_post_meta($post->ID, 'enable_paystack_recurring', true);
        $checked = '';
        $display_recurring_duration = 'none';
        if ($enable_paystack_recurring == 'true') {
            $checked = 'checked';
            $display_recurring_duration = 'block';
        }
        echo '<div class="paystack-recurring-holder">';
        echo '<label class="switch lp_enable_paystack_recurring">';
        echo '<input ' . $checked . ' type="checkbox" id="enable_paystack_recurring" name="enable_paystack_recurring" value="';
        echo wp_kses_post($enable_paystack_recurring);
        echo '">';
        echo '<span class="slider round"></span>';
        echo'</label>';
        echo '<label for="enable_paystack_recurring">' . esc_html__('Enable/Disable Paystack Recurring Payment', 'paystack-for-listingpro');
        echo '</div>';

        $paystack_recurring_duration = get_post_meta($post->ID, 'paystack_recurring_duration', true);
        $paystack_recurring_duration = $paystack_recurring_duration == '' ? 'monthly' : $paystack_recurring_duration;

        echo '<div class="paystack-recurring-duration-holder" style="display:' . $display_recurring_duration . ';">';
        echo '<label for="paystack_recurring_duration">' . esc_html__('Paystack Recurring Duration', 'paystack-for-listingpro') . '</label>';

        $intervals = array(
            'daily' => esc_html__('Daily', 'paystack-for-listingpro'),
            'weekly' => esc_html__('Weekly', 'paystack-for-listingpro'),
            'monthly' => esc_html__('Monthly', 'paystack-for-listingpro'),
            'quarterly' => esc_html__('Quarterly ', 'paystack-for-listingpro'),
            'annually' => esc_html__('Annually ', 'paystack-for-listingpro'),
        );

        echo '<select name="paystack_recurring_duration" id="paystack_recurring_duration">';
        foreach ($intervals as $key => $val) {
            $selected = '';
            if ($paystack_recurring_duration == $key) {
                $selected = 'selected';
            }
            echo '<option ' . $selected . ' value="' . $key . '">' . $val . '</option>';
        }
        echo '</select>';
        echo '</div>';
    }
    
    public function lp_paystack_renew_listings() {
        
        $users = get_users( array( 'fields' => array( 'ID' ) ) );
        foreach($users as $user){
            $user_id = $user->ID;
            $userSubscriptions = get_user_meta($user_id, 'listingpro_user_sbscr', true);
            if(isset($userSubscriptions) && !empty($userSubscriptions)){
                foreach($userSubscriptions as $key => $userSubs){
                    if(isset($userSubs['method']) && $userSubs['method'] == 'paystack'){

                        $curl = curl_init();
                        curl_setopt_array($curl, array(
                            CURLOPT_URL => "https://api.paystack.co/subscription/". $userSubs['subscr_id'],
                            CURLOPT_RETURNTRANSFER => true,
                            CURLOPT_ENCODING => "",
                            CURLOPT_MAXREDIRS => 10,
                            CURLOPT_TIMEOUT => 30,
                            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                            CURLOPT_CUSTOMREQUEST => "GET",
                            CURLOPT_HTTPHEADER => array(
                                'Authorization: Bearer '. $this->secret_key,
                                'Content-Type: application/json',
                            ),
                        ));

                        $response = curl_exec($curl);
                        $err = curl_error($curl);
                        curl_close($curl);
                        $response = json_decode($response);
                        
                        if( isset($response->data->status) && $response->data->status == 'active' && strtotime($response->data->next_payment_date) != $userSubs['next_payment'] ){

                            $userSubscriptions[$key]['next_payment'] = strtotime($response->data->next_payment_date);
                            update_user_meta($user_id, 'listingpro_user_sbscr', $userSubscriptions);

                            $listing_id = $userSubs['listing_id'];
                            // is active and today is renewal day
                            $lpCurrentTime = current_time('mysql');
                            $my_listing = array('ID' => $listing_id, 'post_date' => $lpCurrentTime, 'post_date_gmt' => get_gmt_from_date($lpCurrentTime), 'post_status' => 'publish');
                            wp_update_post( $my_listing );
                            $table = 'listing_orders';
                            $wherecond = 'post_id="'.$listing_id.'" AND status = "success" AND summary="recurring"';
                            $recurringData = lp_get_data_from_db('listing_orders', '*', $wherecond);
                            if(!empty($recurringData)){
                                $main_id = '';
                                foreach($recurringData as $data){
                                    $main_id = $data->main_id;
                                    $date    = date('d-m-Y');
                                    $data    = array('date' => $date);
                                    $where   = array('main_id' => $main_id);
                                    lp_update_data_in_db($table, $data, $where);
                                }
                            }
                        }
                    }
                }
            }
        }
        
    }

}

$paystack_options = get_option('listingpro_options');
$paystack_toggle = isset($paystack_options['enable_paystack']) ? $paystack_options['enable_paystack'] : '';
$mode = isset($paystack_options['paystack_api']) ? $paystack_options['paystack_api'] : '';
$public_key = isset($paystack_options['paystack_public_key']) ? $paystack_options['paystack_public_key'] : '';
$secret_key = isset($paystack_options['paystack_secret_key']) ? $paystack_options['paystack_secret_key'] : '';
$paystack_obj = new Paystack_for_listingpro($mode, $public_key, $secret_key, $paystack_toggle);






















jQuery(document).ready(function () {
    if(jQuery('.paystack-metho-wrap').length) {
        jQuery('.lp-rightbnk-transfer-msg-new').html(jQuery('.lp-rightbnk-transfer-msg-new').html().replace('Sorry! You have not enable any payment method',''));
    }
    jQuery('.lp_payment_step_next.firstStep').click(function () {
        if(jQuery('#hidePaystackRecurring').length) {
        } else {
            jQuery('.lp-checkout-recurring-wrap').show();
        }
    });
    
    jQuery(document).on('click', 'button.firstStep', function(){
        jQuery('#listings_checkout_form .inactive-license').closest('.lp-method-wrap').css('display', 'none');
    });
    
    jQuery(document).on('click', 'button.firstStep, button.secondStep', function(){
        if( jQuery('#hidePaystackRecurring').length ) {
        }else{
            var payment_method = jQuery('input[name="plan"]:checked').val();
            if( payment_method == 'paystack' ){
                if( jQuery('input[name="listing_id"]:checked').data('paystackrecurring') === 'yes' ) {
                    jQuery('.lp-checkout-recurring-wrap').css('display', 'block');
                }else{
                    jQuery('.lp-checkout-recurring-wrap input[name="lp-recurring-option"]').prop("checked", false);
                    jQuery('.lp-checkout-recurring-wrap').css('display', 'none');
                }
            }
        }
    });
    
    jQuery('#listings_checkout_form').on('submit', function(e){
        var $this = jQuery(this);
        alert('chk')

        var method      =   $this.find('input[name="plan"]:checked').val(),
            key         =   jQuery('#paystack_public_key').val(),
            custom_mail =   jQuery('#customer_email').val(),
            listing_id  =   $this.find('input[name="listing_id"]:checked').val(),
            plan_id     =   $this.find('input[name="listing_id"]:checked').data('planid'),
            plan_time   =   $this.find("input[name=plan_time]").val(),
            post_title  =   $this.find('input[name="listing_id"]:checked').data('title'),
            plan_price  =   jQuery('span.lp-subtotal-total-price').data('subtotal'),
            currency    =   jQuery('input[name=currency]').val(),
            taxRate     =   $this.find('input[name="listing_id"]:checked').data('taxrate'),
            ajaxurl     =   ajax_search_term_object.ajaxurl,
            coupon_used =   '',
            callFrom    =   'listing';


        if($this.find('input[name="lp-recurring-option"]').is(':checked')) {
            var recurrText  =   'yes';
        } else {
            var recurrText  =   'no';
        }
        
        var custom_fields   =   [];
        var listing_meta    =   {
            display_name: "Listing ID",
            variable_name: "listing_id",
            value: listing_id
        };
        var plan_meta   =   {
            display_name: "Plan Name",
            variable_name: "plan_name",
            value: post_title
        };
        if(taxRate){
            var tax_rate    =   {
                display_name: "Tax Rate",
                variable_name: "tax_rate",
                value: taxRate
            };
            custom_fields.push(tax_rate);
        }
        if(jQuery('#claimID').length) {
            var claimID    =   {
                display_name: "Claim ID",
                variable_name: "claimID",
                value: jQuery('#claimID').val()
            };
            var claimPlan   =   {
                display_name: 'Claim Plan',
                'variable_name': claimPlan,
                value: jQuery('#claimPlan').val()
            };
            custom_fields.push(claimID);
            custom_fields.push(claimPlan);

            callFrom    =   'claim';
        }
        custom_fields.push(plan_meta);
        custom_fields.push(listing_meta);

        if($this.find('input[name=coupon-text-field]').length) {
            coupon_used =   $this.find('input[name=coupon-text-field]').val();
            if(coupon_used != ''){
                var coupons_meta    =   {
                    display_name: "Coupon",
                    variable_name: "coupon",
                    value: coupon_used
                };
                custom_fields.push(coupons_meta);
            }
        }

        if(method === 'paystack'){
//            var payfast_intervals = ["1", "7", "30", "90", "365"];
//            if( recurrText === 'yes' && $this.find("input[name=plan_time]").length !== 'undefined' && lp_paystack.lp_month_year_plans !== 'yes' && jQuery.inArray(plan_time, payfast_intervals) === -1 ){
//                alert('Paystack does not support '+ plan_time +' days duration for recurring payment. Please contact with site Administrator.');
//                return false;
//            }
            if( recurrText === 'yes' && plan_price < 100 ){
                alert(lp_paystack.recurring_min_amount_error);
                return false;
            }
            
            plan_price = plan_price*100;
//          alert('here1')
            var handler = PaystackPop.setup({
             key: key,
             email: custom_mail,
                amount: Math.round(plan_price),
                subaccount: 'ACCT_lz2pk8g34m306ec',
                currency: currency,
                ref: ''+ Math.floor((Math.random() * 1000000000) + 1),
                metadata: {
                    custom_fields: custom_fields
                },
                callback: function(response){
                    if(response.status == 'success') {
                        jQuery("body").addClass("listingpro-loading");
                        jQuery.ajax({
                            type: "POST",
                            dataType: "json",
                            url: ajaxurl,
                            data: {
                                "action": "lp_save_paystack_transaction",
                                "email": custom_mail,
                                "listing": listing_id,
                                "plan": plan_id,
                                "plan_price": $this.find("input[name=plan_price]").val(),
                                "plan_time": plan_time,
                                "taxrate": $this.find("input[name=listings_tax_price]").val(),
                                "coupon": coupon_used,
                                "recurring" : recurrText,
                                "currency": currency,
                                'token' : response.reference,
                                'callFrom' : callFrom
                            },
                            success: function(res){
                                jQuery("body").removeClass("listingpro-loading");
                                window.location.href = res.redirect;
                            },
                            error: function(errorThrown){
                                alert(errorThrown);
                                jQuery("body").removeClass("listingpro-loading");
                            }
                        });
                    }
                },
                onClose: function(){
                    
                }
            });
            handler.openIframe();

            e.preventDefault();
        }
    });

    var packages = [];
    jQuery('input[name="lpadsoftype[]"]').click(function(){
        if(jQuery(this).attr('checked')){
            packages.push(jQuery(this).val());
        }
        else{
            var i = packages.indexOf(jQuery(this).val());
            if(i != -1) {
                packages.splice(i, 1);
            }
        }
    });

    jQuery('#lp-new-ad-compaignForm').on('submit', function(e){
        var $this = jQuery(this),
            lpTotalPrice    =   jQuery('input[name="ads_price"]').val(),
            customer_email  =   jQuery('#customer_email').val(),
            adsTypeVal      =   jQuery('input[name="adsTypeval"]').val(),
            adsDays         =   '',
            taxPrice        =   jQuery('input[name="taxprice"]').val(),
            listing_id      =   jQuery('select[name="lp_ads_for_listing"]').val(),
            key             =   jQuery('#paystack_public_key').val(),
            method          =   jQuery('input[name="method"]:checked').val(),
            currency        =   $this.find('input[name="currency"]').val(),
            ajaxurl         =   ajax_search_term_object.ajaxurl;
        
        var totalPrice  =   lpTotalPrice;
        if($this.data('type') == 'adsperclick') {
            totalPrice  =   jQuery('input[name="adsprice_pc"]').val();
        }

        var custom_fields   =   [];
        var listing_meta    =   {
            display_name: "Listing ID",
            variable_name: "listing_id",
            value: listing_id
        };
        var ads_type    =   {
            display_name: "Ads Type",
            variable_name: "ads_type",
            value: adsTypeVal
        };
        var tax_price    =   {
            display_name: "Tax Price",
            variable_name: "tax_price",
            value: taxPrice
        };
        var ads_packages    =   {
            display_name: 'Packages',
            variable_name: 'ads_packages',
            value: packages
        };
        custom_fields.push(ads_packages);
        custom_fields.push(listing_meta);
        custom_fields.push(ads_type);
        custom_fields.push(tax_price);

        if(jQuery('input[name="ads_days"]').length) {
            adsDays = jQuery('input[name="ads_days"]').val()
            var ads_days    =   {
                display_name: "Ad Days",
                variable_name: "ads_days",
                value: adsDays
            };
            custom_fields.push(ads_days);
        }
        if(method === 'paystack'){
            var adTotalPrice    =   lpTotalPrice;
            lpTotalPrice    =   lpTotalPrice*100;

            var handler = PaystackPop.setup({
                key: key,
                email: customer_email,
                amount: lpTotalPrice,
                subaccount: 'ACCT_lz2pk8g34m306ec',
                currency: currency,
                ref: ''+Math.floor((Math.random() * 1000000000) + 1),
                metadata: {
                    custom_fields: custom_fields
                },
                callback: function(response){
                    if(response.status == 'success') {
                        jQuery("body").addClass("listingpro-loading");
                        jQuery.ajax({
                            type: "POST",
                            dataType: "json",
                            url: ajaxurl,
                            data: {
                                "action": "lp_save_paystack_ads_campaign",
                                "email": customer_email,
                                "listing": listing_id,
                                'token' : response.reference,
                                "packages": packages,
                                "lpTOtalprice":adTotalPrice,
                                "adsTypeval":adsTypeVal,
                                "ads_days":adsDays,
                                "ads_price":totalPrice,
                                "taxprice":taxPrice,
                            },
                            success: function(res){
                                jQuery("body").removeClass("listingpro-loading");
                                window.location.href = res.redirect;
                            },
                            error: function(errorThrown){
                                alert(errorThrown);
                                jQuery("body").removeClass("listingpro-loading");
                            }
                        });

                    } else {
                        alert('problem with transaction');
                    }
                },
                onClose: function(){
                }
            });
            handler.openIframe();

            e.preventDefault();
        }
    });
});
function unsubsribe_paystack(subs_id, token, $this) {

    var ajaxurl         =   ajax_search_term_object.ajaxurl;
    jQuery.ajax({
        type: "POST",
        dataType: "json",
        url: ajaxurl,
        data: {
            "action": "lp_unsub_paystack",
            "sub_id": subs_id,
            "token": token,
            'lpNonce' : jQuery('#lpNonce').val()
        },
        success: function(res){
            jQuery("body").removeClass("listingpro-loading");
            alert(res.msg);
            if(res.status=="success"){
                $this.closest('.lp-listing-outer-container').slideToggle();
            }
        },
        error: function(errorThrown){
            alert(errorThrown);
            jQuery("body").removeClass("listingpro-loading");
        }
    });
}