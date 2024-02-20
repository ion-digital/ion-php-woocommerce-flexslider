<?php

/* 
 * See license information at the package root in LICENSE.md
 */

$bootstrap = realpath(__DIR__ . "/vendor/ion/packaging/bootstrap.php") ?: realpath(__DIR__ . "/../packaging/bootstrap.php");

if(!empty($bootstrap))
    require_once($bootstrap);

\Ion\Package::create("ion", "woocommerce-flexslider", function($package) {

    return;

}, __FILE__);