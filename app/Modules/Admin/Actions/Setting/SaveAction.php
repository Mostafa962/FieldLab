<?php
namespace Admin\Actions\Setting;
use Admin\Models\Setting;
use Illuminate\Http\Request;

class SaveAction
{
    public function execute(Request $request): void
    {
        $request->file('logo')? $path =$request->file('logo')->store('settings', 'public'):$path=null;
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
            $record->about_us_page_content = $request->input('about_us_content');
            $record->logo = $path;
            $record->save();
        }
        else
            Setting::create([
                'about_us_page_content' => $request->input('about_us_content'),
                'logo'                  => $path,
            ]);

    }
}
