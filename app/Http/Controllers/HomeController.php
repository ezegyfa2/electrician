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
        return DynamicTemplateMethods::getTemplateDynamicPage('electrician_welcome', $templateParams, 'app');
    }
}
