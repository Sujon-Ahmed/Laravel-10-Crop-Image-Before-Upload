<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    // retun view
    public function index() : View
    {
        return view('cropImage');
    }

    // store media data
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
                'image_base64' => 'required',
            ]);

        $input['name'] = $this->storeBase64($request->image_base64);
        Media::create($input);

        return back()->with('success', 'Image uploaded successfully.');
    }

    private function storeBase64($imageBase64)
    {
        list($type, $imageBase64) = explode(';', $imageBase64);
        list(, $imageBase64)      = explode(',', $imageBase64);
        $imageBase64 = base64_decode($imageBase64);
        $imageName= time().'.png';
        $path = public_path() . "/uploads/" . $imageName;

        file_put_contents($path, $imageBase64);

        return $imageName;
    }
}
