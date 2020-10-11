<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function showSettings()
    {
        $settings = Settings::all();
        $settingsArr = [];
        foreach ($settings as $setting) {
            $settingsArr[$setting->key] = $setting->value;
        }

        $data = [
            'settings' => $settingsArr
        ];

        return view('admin.settings.index',$data);
    }


    public function storeSetting(Request $request)
    {

        $settings = ['name', 'phone', 'email', 'address', 'footertext', 'logo','facebook','twitter','youtube'];
        $input = $request->all();


        // image
        $companylogo = Settings::where('key', 'logo')->first();

        if ($request->hasFile('logo'))
        {
            if ($companylogo === null)
            {
                $logo = $request->file('logo');
                $imageName =  uniqid() . '.' . $logo->getClientOriginalExtension();
                $directory = 'admin/img/logo/';
                $logo->move($directory, $imageName);
                $imageUrl = $directory . $imageName;

            } else
            {
                $logo = $request->file('logo');
                $imageName =  uniqid() . '.' . $logo->getClientOriginalExtension();
                $directory = 'admin/img/logo/';
                $logo->move($directory, $imageName);
                $imageUrl = $directory . $imageName;
            }
        }else{

            $imageUrl = $companylogo['value'];
        }

        $input['logo'] = $imageUrl;

        foreach ($settings as $setting) {
            $s = Settings::where('key', $setting)->first();

            if ($s === null) {
                Settings::create([
                    'key' => $setting,
                    'value' => $input[$setting] ?? null
                ]);
            } else {
                $s->value = $input[$setting] ?? null;
                $s->save();
            }
        }

        return redirect()->back();
    }
}
