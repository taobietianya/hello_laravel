<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    //个人页面的展示
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    //编辑个人
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    //表单提交
    public function update(UserRequest $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('users.show', $user->id)->with('success', '个人资料更新成功！');
    }

}
