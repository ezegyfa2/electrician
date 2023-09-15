<?php

namespace App\Http\Controllers;

use Ezegyfa\LaravelHelperMethods\Database\FormGenerating\DatabaseInfos;
use Ezegyfa\LaravelHelperMethods\DynamicTemplateMethods;
use Illuminate\Support\Facades\App;
use stdClass;

class HomeController extends Controller
{
    public function home() {
        $templateParams = new stdClass;
        $templateParams->language = strtoupper(App::currentLocale());
        $templateParams->current_url = "/home";
        $orderTableInfos = DatabaseInfos::getTableInfos()['orders'];
        $templateParams->contact_form_item_sections = $orderTableInfos->getFormInfos('welcome.contact_form');
        return DynamicTemplateMethods::getTemplateDynamicPage('electrician_welcome', $templateParams, [ 'welcome' ], [ 
            'fontawesome/css/fontawesome.min', 
            'fontawesome/css/brands.min',
            'fontawesome/css/solid.min'  ]);
        return DynamicTemplateMethods::getTranslatedTemplateDynamicPage(
            'electrician_welcome', 
            'node_modules/electrician-vue-components/src/Templates/Compiled/welcome.json', 
            $templateParams,
            [ 'welcome' ]
        );
    }
}
