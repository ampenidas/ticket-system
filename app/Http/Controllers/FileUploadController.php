<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function store(Request $request)
    {
        $path = $request->file('file')->store('public');
        $path = substr($path, strlen('public'));

        File::create([
            'ticket_id' => $request->get('ticket_id'),
            'path' => $path,
            'title' => 'test',
        ]);

        return redirect()->back();
    }
}
