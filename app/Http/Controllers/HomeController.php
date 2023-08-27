<?php

namespace App\Http\Controllers;

use Ezegyfa\LaravelHelperMethods\DynamicTemplateMethods;
use stdClass;

class HomeController extends Controller
{
    public function home() {
        $templateParams = new stdClass;
        $templateParams->language = "HU";
        $templateParams->current_url = "/home";
        return DynamicTemplateMethods::getTemplateDynamicPage('electrician_index', $templateParams, 'app');
    }

    public function products() {
        $templateParams = new stdClass;
        $templateParams->language = "HU";
        $templateParams->current_url = "/products";
        return DynamicTemplateMethods::getTemplateDynamicPage('electrician_products', $templateParams, 'app');
    }

    public function homeRO() {
        $templateParams = new stdClass;
        $templateParams->language = "RO";
        $templateParams->current_url = "/home";
        return DynamicTemplateMethods::getTemplateDynamicPage('electrician_index', $templateParams, 'app');
    }

    public function productsRO() {
        $templateParams = new stdClass;
        $templateParams->language = "RO";
        $templateParams->current_url = "/products";
        return DynamicTemplateMethods::getTemplateDynamicPage('electrician_products_index', $templateParams, 'app');
    }
}
