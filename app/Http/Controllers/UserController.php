<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login(Request $request){

    }

    public function logout(){
        Auth::logout();
        return redirect(route('admin.login'));
    }

    public function lostpass(){
        return view('admin.auth.passwords.email');
    }

    public function passreset(Request $request){

        //fetch user with email
        $user = User::where('email', $request->input('email'))->first();

        //generate 1 time reset token
        $token = 0;
        if(!empty($user)){
            $token = $user->makeToken(360);
        }

        //set  with 1hr lifespan
        $cd = time() + (60 * 60);

        $user->countdown_pass = $cd;
        $user->reset_toke = $token;
        $user->update();

        $email = $request->input('email');
        $name = $user->setName();
        $link = route('email.resetpassword',$token);
        $message = $name. ", Please follow the bellow to rest your login credentials.";

        $mail['email'] = $email;

        //send email
//        return $mail;
        $object = [
            'email'=>$email,
            'message'=>$message,
            'link'=>$link,
            'subject'=>'Password Reset Request',
        ];

        $this->sendMail('passwordReset', $object);
        $msg = 'An email has been sent to ' . $request->input('email') .' to reset your password';
        return back()->withMessage($msg);
    }

    public function PasswordReset($token){
        $user = User::where('reset_toke', $token)->first();

        if(!empty($user)){
            //get validity
            if(time() < $user->countdown_pass){
                // send to reset page
                return view('admin.auth.passwords.reset')->with('token', $token);
            }else{
                return redirect()->route('admin.login');
            }
        }else{
            return redirect()->route('admin.login');
        }
    }

    public function passwordRectify(Request $request, $token){

        if(!empty($token)){

            $user = User::where('email', $request->input('email'))->first();
            $user_valid = User::where('reset_toke', $token)->first();

            if($user->id === $user_valid->id){
                if($request->input('password') === $request->input('password_confirmation')){
                    $user->password = $request->input('password');
                    $user->reset_toke = null;
                    $user->update();

                    return redirect()->route('password.request')->withMessage('Your password reset was successful. Try login in again!');
                }
            }
        }

        return redirect()->route('admin.login');
    }
}
