<?php

namespace App\Http\Controllers;

use App\Models\Zipcode;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ZipcodeController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function check(Request $request): JsonResponse
    {
        $zip = $request->input('postal_code');

        $exists = Zipcode::where('zip_code', $zip)->exists();

        return response()->json([
            'found' => $exists
        ]);
    }
}
