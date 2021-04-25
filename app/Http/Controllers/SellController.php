<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemCondition;
use App\Models\PrimaryCategory;

class SellController extends Controller
{
    public function showSellForm()
    {
        $categories = PrimaryCategory::orderBy('sort_no')->get();
        $conditions = ItemCondition::orderBy('sort_no')->get();
        return view('sell')
            ->with('categories', $categories)
            ->with('conditions', $conditions);
    }
}
