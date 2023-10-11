<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\EmployerProfile;
use App\Models\CandidateProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class GhostController extends Controller
{
    public function __construct()
    {
        $this->middleware('ghost');
    }

    public function pick_role()
    {
        $this->middleware('ghost');
        $data = Auth::user()->name;
        return view('prehome', [
            'full_name' => $data
        ]);
    }

    public function set_role(User $user, string $id)
    {
        $this->middleware('ghost');
        $user = User::where('id', Auth::user()->id);
        $user->update([
            'role' => $id
        ]);

        if ($id == 1) {
            CandidateProfile::create([
                'user_id' => User::orderBy('created_at', 'desc')->first()->id,
            ]);
        } else {
            EmployerProfile::create([
                'user_id' => User::orderBy('created_at', 'desc')->first()->id,
            ]);
        }

        if ($id == 1) {
            return Redirect::route('user_home');
        } else {
            return Redirect::route('employer_home');
        }
    }
}
