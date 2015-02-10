<?php

class LoginController extends \BaseController {

    public function getLogin(){

        return View::make('auth.login');
    }

    public function postLogin(){
        $data = Input::only('username','password');

        $validator = Validator::make($data, User::$auth_rules);
        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }


         if (Auth::attempt($data)){
             return Redirect::intended('dashboard');
        }
        return Redirect::to('login')
            ->with('message', 'Your username/password combination was incorrect')
            ->withInput();
    }

    public function getLogout(){
        Auth::logout();
        return Redirect::route('login')->with('message', 'You have successfully logged out');
    }

    public function getChangePwd(){
        return View::make('auth.change_password');
    }

    public function postChangePwd(){
        $data = Input::only('password','new_password','confirm_password');

        $validator = Validator::make($data, User::$change_password_rules);
        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }


        $user = User::find(Auth::user()->id);



        if(Hash::check(Input::get('password'),$user->getAuthPassword()))
        {
            $user->password = Hash::make(Input::get('new_password'));

            if ($user->save())
            {
                return Redirect::to('dashboard')->with('message', 'Your password was successfully changed');

            } else {

                return Redirect::to('password')
                    ->with('message', 'Your password could not be changed');
            }
        }


        return Redirect::to('password')
            ->with('message', 'Your password could not be changed');
    }

}
