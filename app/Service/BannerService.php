<?php

namespace App\Service;

use App\Models\banner;

class BannerService {

    public function getAll() {
        return banner::all();
    }

    public function getById($id) {
        return banner::where('id', $id)->first();
    }

    public function add($title, $sub_title, $image, $link)
    {
        banner::create([
            'title' => $title,
            'sub_title' => $sub_title,
            'image' => $image,
            'link' => $link,
        ]);
    }

    public function edit($id, $title, $sub_title, $image, $link, $status)
    {
        $banner = banner::where('id', $id)->first();
        $banner->title = $title;
        $banner->sub_title = $sub_title;
        $banner->image = $image;
        $banner->link = $link;
        $banner->status = $status;
        $banner->save();
    }

    public function delete($id) {
        banner::destroy($id);
    }
}
