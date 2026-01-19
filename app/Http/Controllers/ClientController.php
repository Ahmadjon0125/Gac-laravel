<?php

namespace App\Http\Controllers;

use App\Models\Guarantee;
use App\Models\GuaranteeForms;
use App\Models\GuaranteeText;
use App\Models\Infos;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function storeDealerApplication(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'region' => 'required|string',
            'address' => 'required|string',
            'employee_count' => 'required|string',
            'full_name' => 'required|string',
            'phone' => 'required|string',
            'additional_info' => 'nullable|string',
        ]);

        $data=GuaranteeForms::create($validated);

        dd($data);

        return back()->with('success', 'Arizangiz muvaffaqiyatli yuborildi!');
    }

    
    public static function client()
    {
        $guarantees = Guarantee::first();
        $guaranteeTexts = GuaranteeText::first();
         $info = Infos::first();
        return view('front.client', compact('guarantees', 'guaranteeTexts','info'));
    }
}
