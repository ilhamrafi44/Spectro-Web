<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\UserResume;
use App\Helper\ImageManager;
use Illuminate\Http\Request;
use App\Models\EmployerProfile;
use App\Models\CandidateProfile;
use App\DataTables\UsersDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserControler extends Controller
{
    use ImageManager;


    public function __construct()
    {
        $this->middleware('admin');
    }

    public function update(Request $request)
    {
        $users = User::findOrFail($request->id);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'can_create_job' => $request->can_create_job
        ];

        if (isset($request->password)) {
            $data['password'] = Hash::make($request->password);
        }

        $users->update($data);

        if ($users) {
            return redirect()->back()->with('message', 'Berhasil upXdate User');
        }

        return redirect()->back()->with('error', 'Gagal update User');
    }

    public function index(Request $request)
    {
        $query = User::query();

        $queryParams = $request->query();

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        if ($request->filled('role')) {
            $query->where('role', $request->input('role'));
        }

        $orderBy = 'created_at';
        $direction = 'asc'; // Default direction

        if ($request->filled('direction') && in_array($request->input('direction'), ['asc', 'desc'])) {
            $direction = $request->input('direction');
        }

        $query->orderBy($orderBy, $direction);

        $perPage = 10;

        if ($request->has('per_page')) {
            $perPage = $request->input('per_page');
        }

        $results = $query->paginate($perPage)->appends($queryParams);

        return view('admin.users.index', [
            "page_name" => "User Lists",
            "rute_export" => "user.export",
            "data" => $results,
        ]);
    }

    public function delete($id)
    {
        $delete = User::findOrFail($id)->delete();
        if (!$delete) {
            return redirect()->back()->with('message', 'Berhasil hapus user');
        }
        return redirect()->back()->with('error', 'Gagal hapus user');
    }

    public function add()
    {
        $page_name = 'Create User';
        return view('admin.users.add', compact('page_name'));
    }

    public function destroy(string $id)
    {
        $Industry = User::where('id', $id)->delete();
        if ($Industry) {
            return redirect()->back()->with('message', 'Data berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'Data gagal dihapus');
        }
    }

    public function store(Request $request)
    {
        $ldate = date('Y_m_d');
        $ltime = date('H_i_s');
        $data_candidate = $request->name;
        $nama_candidate = $data_candidate[0];

        if ($request->file('image')) {
            $foto_profile = $request->file('image');
            $nama_profile = "Profile_" . $nama_candidate . "_Time_" . $ldate . "_" . $ltime . "." . $foto_profile->extension();
            $path = "public/file/images/profile";
            $foto_profile->storeAs($path, $nama_profile);
        }
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->nomor_telepon = $request->nomor_telepon;
        $user->email_verified_at = date('Y-m-d h:i:s');
        $user->password = Hash::make($request->password);
        $user->file_profile_id = $nama_profile;
        $user->save();

        if ($request->role == 1) {
            CandidateProfile::create([
                'user_id' => $user->id,
                'jenis_kelamin' => $request->jenis_kelamin
            ]);
            UserResume::create([
                'user_id' => $user->id,
            ]);
        } else {
            EmployerProfile::create([
                'user_id' => $user->id,
            ]);
        }

        if ($user) {
            return redirect()->route('admin.list.user')->with('message', 'User Berhasil Ditambah');
        }
        return redirect()->route('admin.list.user')->with('error', 'User Berhasil Ditambah');
    }
}
