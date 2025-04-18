<?php

namespace App\Http\Admin\Controllers;

use App\Http\Web\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads', $filename, 'public');

            $image = Image::create([
                'title' => pathinfo($filename, PATHINFO_FILENAME),
                'path' => 'storage/' . $path
            ]);

            return response()->json([
                'imageId' => $image->id,
                'fileUrl' => asset('storage/' . $path),
            ]);
        }

        return response()->json(['error' => 'No file uploaded'], 400);
    }

}
