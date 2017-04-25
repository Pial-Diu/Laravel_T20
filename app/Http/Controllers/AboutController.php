<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    public function editAbout()
    {
        $about = About::where('id',1)->first();
        return view('admin.aboutUs.aboutUs',['about'=>$about]);
    }
    public function updateAbout(Request $request)
    {
        $imageUrl = $this->imageExistStatus($request);
        $about = About::find($request->id);
        $about->aboutTitle = $request->aboutTitle;
        $about->aboutDescription = $request->aboutDescription;
        $about->aboutImage = $imageUrl;
        $about->save();
        return redirect('/about-us/edit/1')->with('message','About Info Saved Successfully !!');
    }
    private function imageExistStatus($request)
    {
        $aboutById = About::where('id',$request->id)->first();
        $aboutImage = $request->file('aboutImage');
        if($aboutImage)
        {
            $oldImageUrl = $aboutById->aboutImage;
            unlink($oldImageUrl);
            $imageName = $aboutImage->getClientOriginalName();
            $uploadPath = 'public/aboutImage/';
            $aboutImage->move($uploadPath, $imageName);
            $imageUrl = $uploadPath.$imageName;
        }
        else
        {
            $imageUrl = $aboutById->aboutImage;
        }
        return $imageUrl;
    }
}
