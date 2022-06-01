<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Contorller;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\ContactSignup;
use App\Http\Requests\ContactSignin;
use App\Models\SignUps;
use App\Models\User;
use App\Models\contactform;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Middleware\Authenticate as Middleware;


class ContactController extends Controller

{
    public function submit(ContactRequest $request) {

        $contact = new contactform();
        $contact->name = $request->input('name');
        $contact->surname = $request->input('surname');
        $contact->email = $request->input('email');
        $contact->number = $request->input('number');
        $contact->description = $request->input('description');
        $contact->drop_list = $request->input('drop_list');

        $contact->save();

        return redirect()->route('contact-form')->with('success', 'Дані було добавлено');
       // return view('contactform');
    }

    public function sub(ContactSignup $request){
        // if(Auth::check()){
        //     return redirect(route('user.mainpage'));
        // }
        // // start old code
        // $contact = new SignUps();
        // $contact->name = $request->input('name');
        // $contact->surname = $request->input('surname');
        // $contact->age = $request->input('age');
        // $contact->password = bcrypt($request->input('password'));
        // $contact->email = $request->input('email');

        // $contact->save();
        // // the end old code
        

        // Auth::login($contact);





        if(Auth::check()){
            return redirect(route('user.mainpage'));
        }
        // start old code
        $contact = new SignUps();
        $contact->name = $request->name;
        $contact->surname = $request->surname;
        $contact->age = $request->age;
        $contact->password = bcrypt($request->password);
        $contact->email = $request->email;

        $contact->save();

        // if($contact){
        //     Auth::login($contact);
        //     return redirect(route('user.sign-up'))->with('success', 'Реєстрація пройшла успішно');
        // }

        Auth::login($contact);

        if($contact){
            Auth::login($contact);
            return redirect(route('user.sign-up'))->with('success', 'Реєстрація пройшла успішно');
        }

        // return view('signup');

        // the end old code
        // if(Auth::login($contact)) {
        //     dd(1);
        // }
        // else {
        //     dd(0);
        // }


        // if(Auth::user()) {
        //     return redirect()->route('profile');
        // }

        // code of Dima
      /* $user = new SignUps();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->surname = $request->surname;
        $user->age = $request->age;
        $user->password = Hash::make($request->password);

        $user->save();
            // dd($user);
        if(Auth::login($user)) {
            dd(1);
        }
        else {
            dd(0);
        }*/
        

        //old code return redirect()->route('sign-up')->with('success', 'Реєстрація пройшла успішно');


        // shit code
        // $user = User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => bcrypt($data['password'])
        // ]);

        // if($user) {
        //     auth('web')->login($user);
        // }

        

        // the end shit code
    }  

    public function subin(ContactSignin $request){
        // NEW LAST CODE
        // if(Auth::check()){
        //     return redirect()->intended(route('user.mainpage'));    
        // }

        // $contact = $request->only(['email', 'password']);
        // Auth::attempt($contact);
        // // if(Auth::attempt($contact)) {
        // //     return redirect()->route('user.mainpage');
        // // }
        // // else {
        // //     dd('error');
        // // }

        // return redirect()->route('mainpage');

        // THE END NEW LAST CODE

        if(Auth::check()){
            return redirect()->intended(route('user.mainpage'));    
        }

        $contact = $request->only(['email', 'password']);
        
        if(Auth::attempt($contact)) {
            dd(1);    
        }
        else {
            dd(0);
        }
        return redirect()->intended(route('user.mainpage'));



        // if(Auth::check()){
        //     return redirect()->intended(route('user.mainpage'));    
        // }

        // $contact = $request->only(['email', 'password']);
        
        // if(Auth::attempt($contact)) {
        //     return redirect()->intended(route('user.mainpage'));
        // }

        // return redirect()->route('user.mainpage');

       // old code return view('sign-in');
    }
}
