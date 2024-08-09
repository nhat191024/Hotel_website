<?php

namespace App\Http\Controllers;

use App\Models\banner;
use Illuminate\Http\Request;

use App\Service\BannerService;

class BannerController extends Controller
{
    private $BannerService;

    public function __construct(BannerService $BannerService)
    {
        $this->BannerService = $BannerService;
    }

    public function index()
    {
        $allBanner = $this->BannerService->getAll();
        return view('admin.banner.index', compact('allBanner'));
    }

    public function showAddBanner()
    {
        return view('admin.banner.add');
    }

    public function addBanner(Request $request)
    {

        // dd($request);

        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'image' => 'required',
            'link' => 'required',
        ]);

        $this->BannerService->add($request->title, $request->sub_title, $request->image, $request->link);

        return redirect()->route('admin.banner.index')->with('success', 'Successfully create banner');
    }

    public function showEditBanner($id)
    {
        $banner = $this->BannerService->getById($id);
        return view('admin.banner.edit', compact('banner'));
    }

    public function editBanner(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'title' => 'required',
            'sub_title' => 'required',
            'image' => 'required',
            'link' => 'required',
            'status' => 'required',
        ]);

        $this->BannerService->edit($request->id, $request->title, $request->sub_title, $request->image, $request->link, $request->status);

        return redirect()->route('admin.banner.index')->with('success', 'Successfully edit banner');
    }

    public function changeStatus($id, $status)
    {
        $this->BannerService->changeStatus($id, $status);
        return redirect()->route('admin.banner.index')->with('success', 'Successfully change status banner');
    }

    public function deleteBanner($id)
    {
        $this->BannerService->delete($id);
        return redirect()->route('admin.banner.index')->with('success', 'Successfully delete banner');
    }
}
