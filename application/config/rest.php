<?php

defined('BASEPATH') OR exit('No direct script access allowed');
$config['force_https'] = FALSE;
$config['rest_default_format'] = 'json';
$config['rest_supported_formats'] = [
    'json',
    'array',
    'csv',
    'html',
    'jsonp',
    'php',
    'serialized',
    'xml',
];
$config['rest_status_field_name'] = 'status';
$config['rest_message_field_name'] = 'error';
$config['enable_emulate_request'] = TRUE;
$config['rest_realm'] = 'REST API';
$config['rest_auth'] = '';
$config['auth_source'] = 'ldap';
$config['allow_auth_and_keys'] = TRUE;
$config['auth_library_class'] = '';
$config['auth_library_function'] = '';
$config['rest_valid_logins'] = ['admin' => '1234'];
$config['rest_ip_whitelist_enabled'] = FALSE;
$config['rest_ip_whitelist'] = '';
$config['rest_ip_blacklist_enabled'] = FALSE;
$config['rest_ip_blacklist'] = '';
$config['rest_database_group'] = 'default';
$config['rest_keys_table'] = 'keys';
$config['rest_enable_keys'] = true;
$config['rest_key_column'] = 'key';
$config['rest_limits_method'] = 'ROUTED_URL';
$config['rest_key_length'] = 40;
$config['rest_key_name'] = 'X-API-KEY';
$config['rest_enable_logging'] = TRUE;
$config['rest_logs_table'] = 'logs';
$config['rest_enable_access'] = FALSE;
$config['rest_access_table'] = 'access';
$config['rest_logs_json_params'] = FALSE;
$config['rest_enable_limits'] = true;
$config['rest_limits_table'] = 'limits';
$config['rest_ignore_http_accept'] = FALSE;
$config['rest_ajax_only'] = FALSE;
$config['rest_language'] = 'english';
$config['check_cors'] = FALSE;
$config['allowed_cors_headers'] = [
  'Origin',
  'X-Requested-With',
  'Content-Type',
  'Accept',
  'Access-Control-Request-Method'
];
$config['allowed_cors_methods'] = [
  'GET',
  'POST',
  'OPTIONS',
  'PUT',
  'PATCH',
  'DELETE'
];
$config['allow_any_cors_domain'] = FALSE;
$config['allowed_cors_origins'] = [];
