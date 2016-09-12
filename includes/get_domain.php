<?php
/**
 * get_domain function
 *
 * @since     1.0.0
 */

function get_domain()
{
    $domain = get_option('siteurl');
    return $domain;
}