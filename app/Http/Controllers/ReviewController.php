<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ReviewController extends Controller
{
    public function reviewStore(Request $request, Product $id): \Illuminate\Http\RedirectResponse
    {
        if (isset($request->user()->id))
        {
            $user_id = $request->user()->id;
        }else{
            $user_id = null;
        }
        $id->reviews()->create(
            [
                'user_id' =>  $user_id,
                'name' => $request->name,
                'email' => $request->email,
                'rating' => $request->rating,
                'review' => $request->review,
            ]
        );

        return redirect()->back();
    }

    /**
     * @param $id
     * @return RedirectResponse
     * @throws \Exception
     */
    public function reviewDelete($id): RedirectResponse
    {
        Review::findOrFail($id)->delete();

        return redirect()->back();
    }
}
