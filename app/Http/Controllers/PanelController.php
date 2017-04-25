<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Panel;
use DB;

class PanelController extends Controller
{
     public function createPanel()
    {
        return view('admin.panel.createPanel');
    }
    public function storePanel(Request $request)
    {
        $this->validate($request,[
            'panelName' => 'required',
            'panelTitle' => 'required',
            'panelImage' => 'required',
            'panelQuote' => 'required',
        ]);
        $panelImage = $request->file('panelImage');
        $imageName = $panelImage->getClientOriginalName();
        $uploadPath = 'public/panelImage/';
        $panelImage->move($uploadPath, $imageName);
        $imageUrl = $uploadPath.$imageName;
        $this->savePanel($request,$imageUrl);
        return redirect('/panel/add')->with('message','Panel Info Saved Successfully !!');
    }
    protected function savePanel($request,$imageUrl)
    {
        $panel = new Panel();
        $panel->panelName = $request->panelName;
        $panel->panelTitle = $request->panelTitle;
        $panel->panelQuote = $request->panelQuote;
        $panel->panelImage = $imageUrl;
        $panel->publicationStatus = $request->publicationStatus;
        $panel->save();
    }
    public function managePanel()
    {
        $panels = DB::table('panels')
                ->orderBy('id')
                ->get();
        return view('admin.panel.managePanel',['panels'=>$panels]);
    }
    public function editPanel($id)
    {
        $panelById = Panel::where('id',$id)->first();
        return view('admin.panel.editPanel',['panelById'=>$panelById]);
    }
    public function updatePanel(Request $request)
    {
        $imageUrl = $this->imageExistStatus($request);
        $panel = Panel::find($request->id);
        
        $panel->panelName = $request->panelName;
        $panel->panelTitle = $request->panelTitle;
        $panel->panelQuote = $request->panelQuote;
        $panel->panelImage = $imageUrl;
        $panel->publicationStatus = $request->publicationStatus;
        $panel->save();
        return redirect('/panel/manage')->with('message','Panel Updated Successfully !!');
    }
    private function imageExistStatus($request)
    {
        $panelById = Panel::where('id',$request->id)->first();
        $panelImage = $request->file('panelImage');
        if($panelImage)
        {
            $oldImageUrl = $panelById->panelImage;
            unlink($oldImageUrl);
            $imageName = $panelImage->getClientOriginalName();
            $uploadPath = 'public/panelImage/';
            $panelImage->move($uploadPath, $imageName);
            $imageUrl = $uploadPath.$imageName;
        }
        else
        {
            $imageUrl = $panelById->panelImage;
        }
        return $imageUrl;
    }
}
