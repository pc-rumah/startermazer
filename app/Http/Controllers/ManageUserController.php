<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ManageUserController extends Controller
{
    public function index()
    {
        $user = User::with(['roles'])->paginate(8);
        return view('pages.manageUser.index', compact('user'));
    }

    public function store(ManageUserRequest $request)
    {
        try {
            $data = $request->validated();
            $data['password'] = Hash::make($request->password);

            $user = User::create($data);
            $user->assignRole($request->role);

            \Log::info("berhasil membuat user", ['created_by' => auth()->user()->name]);
            toast('Berhasil menambah data', 'success')->timerProgressBar();
            return back();
        } catch (\Throwable $th) {
            \Log::error("Gagal membuat user", [
                'error' => $th->getMessage(),
                'trace' => $th->getTraceAsString()
            ]);

            toast('Gagal menambah user', 'error')->timerProgressBar();
            return back();
        }
    }

    public function destroy(User $manageuser)
    {
        try {
            $manageuser->delete();
            \Log::info("berhasil menghapus user", ['deleted_by' => auth()->user()->name]);
            toast('berhasil menghapus data', 'success')->timerProgressBar();
            return back();
        } catch (\Throwable $th) {
            \Log::error("gagal menghapus user", ['error' => $th->getMessage()]);
            toast('gagal menghapus user', 'error')->timerProgressBar();
            return back();
        }
    }
}
