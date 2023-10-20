<?php

namespace App\Http\Controllers;

use Ezegyfa\LaravelHelperMethods\Database\FormGenerating\DatabaseInfos;
use Ezegyfa\LaravelHelperMethods\DynamicTemplateMethods;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
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
                'welcome', 
            ]
        );
    }

    public function storeContactMessage(Request $request) {
        try {
            $validationRules = [
                "name" => [
                    "string",
                    "max:255",
                    "required",
                ],
                "email" => [
                    "string",
                    "max:255",
                    "required",
                    "email",
                ],
                "phone" => [
                    "string",
                    "max:15",
                    "required",
                    "regex:/([0-9]|\+){0,14}/"
                ],
                "message" => "required",
            ];
            $request->validate($validationRules);
            $requestData = request()->all();
            $insertData = [
                'name' => $requestData['name'],
                'email' => $requestData['email'],
                'phone' => $requestData['phone'],
                'message' => $requestData['message'],
            ];
            \DB::table('contact_messages')->insert($insertData);
            return redirect('/')->with('success_message', __('welcome.contact_form.success_message'));
        }
        catch (ValidationException $e) {
            $errorMessages = HttpMethods::updateErrors($e->errors(), $e->validator->failed());
            return redirect()->back()->withInput(request()->all())->withErrors($errorMessages);
        }
    }
}
