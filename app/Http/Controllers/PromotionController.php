<?php

namespace App\Http\Controllers;

use App\Models\promotion;
use App\Service\promotionService;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    private $promotionService;

    public function __construct(promotionService $promotionService)
    {
        $this->promotionService = $promotionService;
    }

    public function index()
    {
        $promotions = $this->promotionService->getAll();
        return view('admin.promotion.index', compact('promotions'));
    }

    public function showAddPromotion()
    {
        return view('admin.promotion.add');
    }

    public function addPromotion(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'link' => 'required',
        ]);

        $this->promotionService->add($request->title, $request->image, $request->link);

        return redirect()->route('admin.promotion.index');
    }

    public function showEditPromotion($id)
    {
        $promotion = $this->promotionService->getById($id);
        return view('admin.promotion.edit', compact('promotion'));
    }
}
