<?php

namespace App\Http\Controllers;

use App\Models\ProjectInquiry;
use Illuminate\Http\Request;

class ProjectInquiryController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'company' => 'nullable|string|max:255',
            'service_id' => 'nullable|exists:services,id',
            'budget' => 'nullable|string|max:100',
            'message' => 'required|string',
        ]);

        ProjectInquiry::create($data);

        return back()->with('success', 'Pesan berhasil dikirim.');
    }
}