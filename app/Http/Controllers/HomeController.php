<?php

namespace App\Http\Controllers;

use Ezegyfa\LaravelHelperMethods\DynamicTemplateMethods;
use Illuminate\Support\Facades\App;
use stdClass;

class HomeController extends Controller
{
    public function home() {
        $templateParams = new stdClass;
        $templateParams->language = strtoupper(App::currentLocale());
        $templateParams->current_url = "/home";
        return DynamicTemplateMethods::getTemplateDynamicPage('electrician_index', $templateParams, 'app');
    }

    public function products() {
        $templateParams = new stdClass;
        $templateParams->language = "HU";
        $templateParams->current_url = "/products";
        return DynamicTemplateMethods::getTemplateDynamicPage('electrician_products', $templateParams, 'app');
    }
}
