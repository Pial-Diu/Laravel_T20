<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use DB;

class newsController extends Controller
{
    public function createNews()
    {
        return view('admin.news.createNews');
    }
    public function storeNews(Request $request)
    {
        $this->validate($request,[
            'newsTitle' => 'required',   
            'newsShortDescription' => 'required',
            'newsLongDescription' => 'required',
            'newsImage' => 'required',
        ]);
        $newsImage = $request->file('newsImage');
        $imageName = $newsImage->getClientOriginalName();
        $uploadPath = 'public/newsImage/';
        $newsImage->move($uploadPath, $imageName);
        $imageUrl = $uploadPath.$imageName;
        $this->saveNews($request,$imageUrl);
        return redirect('/news/add')->with('message','News Info Saved Successfully !!');
    }
    protected function saveNews($request,$imageUrl)
    {
        $news = new News();
        $news->newsTitle = $request->newsTitle;
        $news->newsAuthor = $request->newsAuthor;
        $news->newsShortDescription = $request->newsShortDescription;
        $news->newsLongDescription = $request->newsLongDescription;
        $news->newsImage = $imageUrl;
        $news->publicationStatus = $request->publicationStatus;
        $news->save();
    }
    public function manageNews()
    {
        $newss = DB::table('news')
                ->orderBy('id','desc')
                ->get();
        return view('admin.news.manageNews',['newss'=>$newss]);
    }
    public function viewNews($id)
    {
        $newsById = DB::table('news')
                ->where('news.id',$id)
                ->first();
        return view('admin.news.viewNews',['news'=>$newsById]);
    }
    
    public function editNews($id)
    {
        $newsById = News::where('id',$id)->first();
        return view('admin.news.editNews',['newsById'=>$newsById]);
    }
    public function updateNews(Request $request)
    {
        $imageUrl = $this->imageExistStatus($request);
        $news = News::find($request->id);
        $news->newsTitle = $request->newsTitle;
        $news->newsAuthor = $request->newsAuthor;
        $news->newsShortDescription = $request->newsShortDescription;
        $news->newsLongDescription = $request->newsLongDescription;
        $news->newsImage = $imageUrl;
        $news->publicationStatus = $request->publicationStatus;
        $news->save();
        return redirect('/news/manage')->with('message','News Updated Successfully !!');
    }
    private function imageExistStatus($request)
    {
        $newsById = News::where('id',$request->id)->first();
        $newsImage = $request->file('newsImage');
        if($newsImage)
        {
            $oldImageUrl = $newsById->newsImage;
            unlink($oldImageUrl);
            $imageName = $newsImage->getClientOriginalName();
            $uploadPath = 'public/newsImage/';
            $newsImage->move($uploadPath, $imageName);
            $imageUrl = $uploadPath.$imageName;
        }
        else
        {
            $imageUrl = $newsById->newsImage;
        }
        return $imageUrl;
    }
    public function deleteNews($id)
    {
        $newsById = News::find($id);
        $newsImage = $newsById->newsImage;
        unlink($newsImage);
        $newsById->delete();
        return redirect('/news/manage')->with('message2','News Deleted Successfully !!');
    }
}
