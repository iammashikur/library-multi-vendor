<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SiteSettingsRequest;
use App\Models\SiteSettings;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use File;

class SiteSettingsController extends Controller
{
    use ImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = SiteSettings::first();
        return view('admin.site_settings', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SiteSettingsRequest $request)
    {

        $settings = SiteSettings::first();
        if($settings){

            //update
            if($request->hasFile('logo')){
                $logo = $this->MakeImage($request, 'logo', public_path('/uploads/images/'));
                File::delete(public_path('/uploads/images/'.$settings->logo));
                $settings->logo = $logo;
            }

            if($request->hasFile('favicon')){
                $favicon = $this->MakeImage($request, 'favicon', public_path('/uploads/images/'));
                File::delete(public_path('/uploads/images/'.$settings->favicon));
                $settings->favicon = $favicon;
            }

            if($request->hasFile('banner_one')){
                $banner_one = $this->MakeImage($request, 'banner_one', public_path('/uploads/images/'));
                File::delete(public_path('/uploads/images/'.$settings->banner_one));
                $settings->banner_one = $banner_one;
            }

            if($request->hasFile('banner_two')){
                $banner_two = $this->MakeImage($request, 'banner_two', public_path('/uploads/images/'));
                File::delete(public_path('/uploads/images/'.$settings->banner_two));
                $settings->banner_two = $banner_two;
            }

            if($request->hasFile('banner_three')){
                $banner_three = $this->MakeImage($request, 'banner_three', public_path('/uploads/images/'));
                File::delete(public_path('/uploads/images/'.$settings->banner_three));
                $settings->banner_three = $banner_three;
            }


            // store
            $settings->meta = $request->meta;
            $settings->description = $request->description;
            $settings->tags = json_encode($request->tags);
            $settings->hero_title = $request->hero_title;
            $settings->hero_sub_title = $request->hero_sub_title;
            $settings->basic_credit = $request->basic_credit;
            $settings->pro_credit = $request->pro_credit;
            $settings->save();


            toast('Settings Updated!','success')->width('300px')->padding('10px');
            return redirect()->route('admin.settings.index');

        }else{
            $addSetting = new SiteSettings();

            if($request->hasFile('logo')){
                $logo = $this->MakeImage($request, 'logo', public_path('/uploads/images/'));
                $addSetting->logo = $logo;
            }

            if($request->hasFile('favicon')){
                $favicon = $this->MakeImage($request, 'favicon', public_path('/uploads/images/'));
                $addSetting->favicon = $favicon;
            }

            if($request->hasFile('banner_one')){
                $banner_one = $this->MakeImage($request, 'banner_one', public_path('/uploads/images/'));
                $addSetting->banner_one = $banner_one;
            }

            if($request->hasFile('banner_two')){
                $banner_two = $this->MakeImage($request, 'banner_two', public_path('/uploads/images/'));
                $addSetting->banner_two = $banner_two;
            }

            if($request->hasFile('banner_three')){
                $banner_three = $this->MakeImage($request, 'banner_three', public_path('/uploads/images/'));
                $addSetting->banner_three = $banner_three;
            }


            // store
            $addSetting->meta = $request->meta;
            $addSetting->description = $request->description;
            $addSetting->tags = json_encode($request->tags);
            $addSetting->hero_title = $request->hero_title;
            $addSetting->hero_sub_title = $request->hero_sub_title;
            $addSetting->basic_credit = $request->basic_credit;
            $addSetting->pro_credit = $request->pro_credit;
            $addSetting->save();
            toast('Settings Updated!','info')->width('300px')->padding('10px');
            return redirect()->route('admin.settings.index');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
