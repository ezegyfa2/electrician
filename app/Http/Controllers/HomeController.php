<?php

namespace App\Http\Controllers;

use Ezegyfa\LaravelHelperMethods\Database\FormGenerating\DatabaseInfos;
use Ezegyfa\LaravelHelperMethods\DynamicTemplateMethods;
use Illuminate\Support\Facades\App;
use stdClass;

class HomeController extends Controller
{
    public function home() {
        $templateParams = DynamicTemplateMethods::getTemplateLayoutParams();
        $templateParams->form_item_sections = json_decode(file_get_contents(base_path('app/Templates/contactUsTableInfos.json')));
        foreach ($templateParams->form_item_sections as $formItemSection) {
            $formItemSection->data->label = __($formItemSection->data->label);
            $formItemSection->data->placeholder = __($formItemSection->data->placeholder);
        }
        return DynamicTemplateMethods::getTranslatedTemplateDynamicPage(
            'electrician_welcome', 
            'welcome', 
            $templateParams,
            [ 
                'welcome',
            ],
            [ 
                'fontawesome/css/fontawesome.min', 
                'fontawesome/css/brands.min',
                'fontawesome/css/solid.min',
                'bootstrap-vue.min'
            ]
        );
    }
}
