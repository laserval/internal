
<!-- saved from url=(0082)https://raw.github.com/joelcox/codeigniter-amazon-ses/master/config/amazon_ses.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style type="text/css"></style></head><body><pre style="word-wrap: break-word; white-space: pre-wrap;">&lt;?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Config for the Amazon Simple Email Service library
 *
 * @see ../libraries/Amazon_ses.php
 */
// Amazon credentials
$config['amazon_ses_secret_key'] = '';
$config['amazon_ses_access_key'] = '';

// Adresses
$config['amazon_ses_from'] = '';
$config['amazon_ses_from_name'] = '';
$config['amazon_ses_reply_to'] = '';

// Path to certificate to verify SSL connection (i.e. 'certs/cacert.pem') 
$config['amazon_ses_cert_path'] = '';

// Charset to be used, for example UTF-8, ISO-8859-1 or Shift_JIS. The SMTP
// protocol uses 7-bit ASCII by default
$config['amazon_ses_charset'] = '';
</pre></body></html>