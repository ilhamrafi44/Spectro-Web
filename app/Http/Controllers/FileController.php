<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function download($token, $filename, $type)
    {
        $validToken = $this->validateToken($filename, $token);

        if ($validToken) {
            if($type == "resume")
            {
                $filePath = public_path('storage/file/user/resume/' . $filename);

                if (file_exists($filePath)) {
                    return response()->download($filePath, $filename);
                } else {
                    return back()->with('error', 'File not found.');
                }
            } else if($type == "ssw")
            {
                $filePath = public_path('app/files/' . $filename);

                if (file_exists($filePath)) {
                    return response()->download($filePath, $filename);
                } else {
                    return back()->with('error', 'File not found.');
                }
            } else {
                return back()->with('error', 'Tindakan dilarang.');

            }

        } else {
            return back()->with('error', 'Invalid or expired token.');
        }
    }

    private function validateToken($filename, $token)
    {
        $generatedToken = hash('sha256', $filename . now()->format('YmdH'));

        return $token === $generatedToken;
    }
}
