<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        // 1. Ma'lumotlarni tekshirish (Validation)
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'phone'     => 'required|string|max:20',
            'comment'   => 'nullable|string',
        ]);

        // 2. Bazaga saqlash
        Feedback::create($validated);

        // 3. Ortga qaytarish (muvaffaqiyatli xabar bilan)
        return redirect()->back()->with('success', 'Xabaringiz yuborildi!');
    }
}
