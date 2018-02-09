<?php

/**
 * Mimics wordpress "home_url".
 * @link https://codex.wordpress.org/Function_Reference/home_url
 */
function home_url( $path = null, $scheme = 'http' ) {
    return ( $scheme ? $scheme : 'http'  ) . '://www.test.com' . ( $path ? $path : '/' );
}

/**
 * Mimics wordpress "network_home_url".
 * @link https://codex.wordpress.org/Function_Reference/network_home_url
 */
function network_home_url( $path = null, $scheme = 'http' ) {
    return ( $scheme ? $scheme : 'http'  ) . '://network.test.com' . ( $path ? $path : '/' );
}
/**
 * Mimics wordpress "apply_filters".
 * @link https://codex.wordpress.org/Function_Reference/apply_filters
 */
function apply_filters( $filter, $value ) {
    return $value;
}