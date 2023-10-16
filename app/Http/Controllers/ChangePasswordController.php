<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ChangePasswordController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.changePassword');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validator($request->all())->validate();

        auth()->user()->update(
            [
                
                'age' => $request->input('age'),
                'dateOfbrith' => $request->input('dateOfbrith'),
                'relation' => $request->input('relation'),
        ]);

        return redirect()->back()->withStatus(' تم  التحديث بنجاح ');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'age' => 'required',
            'dateOfbrith' => 'required',
            'relation' => 'required',
        ]);
    }
}
