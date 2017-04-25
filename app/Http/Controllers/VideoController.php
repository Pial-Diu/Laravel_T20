<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideoController extends Controller
{
    public function editVideo()
    {
        $video = Video::where('id',1)->first();
        return view('admin.pinnedVideo.pinnedVideo',['video'=>$video]);
    }
    public function updateVideo(Request $request)
    {
        $imageUrl = $this->imageExistStatus($request);
        $video = Video::find($request->id);
        $video->videoTitle = $request->videoTitle;
        $video->videoDescription = $request->videoDescription;
        $video->videoLink = $request->videoLink;
        $video->videoImage = $imageUrl;
        $video->save();
        return redirect('/video/edit/1')->with('message','Pinned Video Info Saved Successfully !!');
    }
    private function imageExistStatus($request)
    {
        $videoById = Video::where('id',$request->id)->first();
        $videoImage = $request->file('videoImage');
        if($videoImage)
        {
            $oldImageUrl = $videoById->videoImage;
            unlink($oldImageUrl);
            $imageName = $videoImage->getClientOriginalName();
            $uploadPath = 'public/videoImage/';
            $videoImage->move($uploadPath, $imageName);
            $imageUrl = $uploadPath.$imageName;
        }
        else
        {
            $imageUrl = $videoById->videoImage;
        }
        return $imageUrl;
    }
}
