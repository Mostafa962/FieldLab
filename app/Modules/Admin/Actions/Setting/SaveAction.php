<?php
namespace Admin\Actions\Setting;
use Admin\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SaveAction
{
    public function execute(Request $request): void
    {
        $request->file('logo')? $path =$request->file('logo')->store('settings', 'public'):$path=null;
        $request->file('home_cover')? $home_cover =$request->file('home_cover')->store('settings', 'public'):$home_cover=null;
        $request->file('about_cover')? $about_cover =$request->file('about_cover')->store('settings', 'public'):$about_cover=null;
        $request->file('about_img1')? $about_img1 =$request->file('about_img1')->store('settings', 'public'):$about_img1=null;
        $request->file('about_img2')? $about_img2 =$request->file('about_img2')->store('settings', 'public'):$about_img2=null;
        $request->file('about_img3')? $about_img3 =$request->file('about_img3')->store('settings', 'public'):$about_img3=null;
        $request->file('about_img4')? $about_img4 =$request->file('about_img4')->store('settings', 'public'):$about_img4=null;
        $record = Setting::first();
        if($record)
        {
            $path = $record->logo;
            if ($request->hasFile('logo')) 
            {
                if ($record->logo)
                    Storage::disk('public')->delete($record->logo);
                $path =  $request->file('logo')->store('settings', 'public');
            }

            $home_cover = $record->home_cover;
            if ($request->hasFile('home_cover')) 
            {
                if ($record->home_cover)
                    Storage::disk('public')->delete($record->home_cover);
                $home_cover =  $request->file('home_cover')->store('settings', 'public');
            }

            $about_cover = $record->about_cover;
            if ($request->hasFile('about_cover')) 
            {
                if ($record->about_cover)
                    Storage::disk('public')->delete($record->about_cover);
                $about_cover =  $request->file('about_cover')->store('settings', 'public');
            }

            $about_img1 = $record->about_img1;
            if ($request->hasFile('about_img1')) 
            {
                if ($record->about_img1)
                    Storage::disk('public')->delete($record->about_img1);
                $about_img1 =  $request->file('about_img1')->store('settings', 'public');
            }

            $about_img2 = $record->about_img2;
            if ($request->hasFile('about_img2')) 
            {
                if ($record->about_img2)
                    Storage::disk('public')->delete($record->about_img2);
                $about_img2 =  $request->file('about_img2')->store('settings', 'public');
            }

            $about_img3 = $record->about_img3;
            if ($request->hasFile('about_img3')) 
            {
                if ($record->about_img3)
                    Storage::disk('public')->delete($record->about_img3);
                $about_img3 =  $request->file('about_img3')->store('settings', 'public');
            }

            $about_img4 = $record->about_img4;
            if ($request->hasFile('about_img4')) 
            {
                if ($record->about_img4)
                    Storage::disk('public')->delete($record->about_img4);
                $about_img4 =  $request->file('about_img4')->store('settings', 'public');
            }
            $record->logo             = $path;
            $record->home_title       = $request->input('home_title');
            $record->home_cover       = $home_cover;
            $record->home_description = $request->input('home_description');
            $record->address          = $request->input('address');
            $record->fax              = $request->input('fax');
            $record->phone            = $request->input('phone');
            $record->email            = $request->input('email');
            $record->facebook         = $request->input('facebook');
            $record->instagram        = $request->input('instagram');
            $record->twitter          = $request->input('twitter');
            $record->linkedin         = $request->input('linkedin');
            $record->youtube          = $request->input('youtube');
            $record->about_cover      = $about_cover;
            $record->about_header     = $request->input('about_header');
            $record->about_p1         = $request->input('about_p1');
            $record->about_p2         = $request->input('about_p2');
            $record->about_p3         = $request->input('about_p3');
            $record->about_p4         = $request->input('about_p4');
            $record->about_img1       = $about_img1;
            $record->about_img2       = $about_img2;
            $record->about_img3       = $about_img3;
            $record->about_img4       = $about_img4;
            $record->save();
        }
        else
            Setting::create([
                'logo'             => $path,
                'home_title'       => $request->input('home_title'),
                'home_cover'       => $home_cover,
                'home_description' => $request->input('home_description'),
                'address'          => $request->input('address'),
                'fax'              => $request->input('fax'),
                'phone'            => $request->input('phone'),
                'email'            => $request->input('email'),
                'facebook'         => $request->input('facebook'),
                'instagram'        => $request->input('instagram'),
                'twitter'          => $request->input('twitter'),
                'linkedin'         => $request->input('linkedin'),
                'youtube'          => $request->input('youtube'),
                'about_cover'      => $about_cover,
                'about_p1'         => $request->input('about_p1'),
                'about_p2'         => $request->input('about_p2'),
                'about_p3'         => $request->input('about_p3'),
                'about_p4'         => $request->input('about_p4'),
                'about_img1'       => $about_img1,
                'about_img2'       => $about_img2,
                'about_img3'       => $about_img3,
                'about_img4'       => $about_img4,
                
            ]);

    }
}
