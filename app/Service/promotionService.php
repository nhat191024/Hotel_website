<?php
namespace App\Service;

use App\Models\promotion;

class promotionService {

        public function getAll()
        {
            return promotion::all();
        }

        public function getById($id)
        {
            return promotion::where('id', $id)->first();
        }

        public function add($title, $image, $link)
        {
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img/promotion'), $imageName);

            promotion::create([
                'title' => $title,
                'image' => '/img/promotion/' . $imageName,
                'link' => $link
            ]);
        }

        public function edit($id, $title, $image, $link, $status)
        {
            $promotion = promotion::where('id', $id)->first();
            $promotion->title = $title;
            $promotion->link = $link;
            $promotion->status = $status;

            if ($image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('img/promotion'), $imageName);
                $image = '/img/promotion/' . $imageName;

                $oldImage = $promotion->image;
                unlink(public_path($oldImage));

                $promotion->image = $image;
            }
            $promotion->save();
        }

        public function changeStatus($id, $status)
        {
            $promotion = promotion::where('id', $id)->first();
            $promotion->status = $status;
            $promotion->save();
        }

        public function delete($id)
        {
            promotion::destroy($id);
        }
}
