<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserPasswordRequest;
use App\Models\Order;
use App\Models\User;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends CrudController
{

    public function avatarUpload(Request $request)
    {
        \DB::transaction(function () use ($request) {
            $oldAvatarUser = \Auth::user()->avatar;
            $path = $request->file('avatar')->store('avatar', 'public');
            User::find(\Auth::user()->id)->update(['avatar' => $path]);
            Storage::disk('public')->delete($oldAvatarUser);
            \DB::commit();
        });
        \DB::rollBack();

        return redirect()->back();
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function profile(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        $user = Auth::user();
        return view('black-shop.account-profile', ['user' => $user]);
    }

    /**
     * @param Request $request
     */
    public function userProfileStore(Request $request)
    {
        \Auth::user()->update($request->input());
        return redirect()->back()->with(['success' => 'Запись успешно обновлена.']);
    }

    public function addressShow()
    {
        $userInfo = Auth::user();

        return view('black-shop.account-addresses', [
            'userInfo' => $userInfo
        ]);
    }

    public function accountEditAddress()
    {
        $userAddress = Auth::user();

        return view('black-shop.account-edit-address', [
            'userAddress' => $userAddress,
        ]);
    }

    public function accountAddressDestroy()
    {
        $user = Auth::user();
        $user->region = null;
        $user->street = null;
        $user->street_number = null;
        $user->city = null;
        $user->phone = null;
        $user->save();

        return redirect()->back();
    }

    public function accountPasswordEdit()
    {
        return view('black-shop.account-password');
    }

    public function addressStore(Request $request)
    {
        \Auth::user()->update($request->only(['region', 'city', 'street', 'street_number', 'phone']));

        return redirect()->back();
    }

    public function accountPasswordReset(UserPasswordRequest $request)
    {
        $isCurrentPasswordMatch = Hash::check($request->password, \Auth::user()->password);
        if (! $isCurrentPasswordMatch) {
            return redirect()->back()->withErrors(['error' => 'Старый пароль не являеться верным.']);
        }
        \Auth::user()->update([
            'password' => Hash::make($request->password_new),
        ]);
        return redirect()->back()->with(['success' => 'Пароль обновлен.']);
    }

    public function accountDashboard()
    {
        $userAvatar = \Auth::user();
        return view('black-shop.account-dashboard', [
            'userAvatar' => $userAvatar,
        ]);
    }
}
