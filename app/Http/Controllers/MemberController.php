<?php

namespace App\Http\Controllers;

use app\Constants;
use App\InfoPerso;
use App\Member;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Else_;

class MemberController extends Controller
{
    public function signUp(Request $request)
    {
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $email = $request->input('email');
        $password = $request->input('password');
        $tel = $request->input('tel');
        $role = $request->input('role');
        $member = Member::where('email', $email)->first();
        if ($member){
            session()->flash('error', 'ce membre deja existe');
            return redirect('/inscription');
        }



        $member = new Member([
            'email' => $email,
            'password' => sha1($password),
            'role' => ($role == 'doc') ? 'doctorant' : 'responsable'
        ]);



        if (!$member->save()) {
            $request->session()->flash('error', 'erreur de creation de l\'utilisateur');
            return redirect('/inscription');
        }
        $pinfo = new InfoPerso([
            'nom' => $nom,
            'prenom' => $prenom,
            'tel' => $tel
        ]);
        $pinfo->member()->associate($member);
        if (!$pinfo->save()) {
            $request->session()->flash('error', 'erreur de creation de l\'utilisateur');
            return redirect('/inscription');
        }
        return redirect('/');
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $member = Member::where('email', $email)
            ->where('password', sha1($password))
            ->first();
        if ($member == null) {
            session()->flash('error', 'Email ou le mot de passe est incorrect');
            return redirect('login');
        }
        if ($member->active == 0) {
            session()->flash('error', 'Desolé votre compte n\'est pas encore activer');
            return redirect('login');
        }
        session()->put('user', $member);
        if ($member->role == 'admin') {
            return redirect('/admin');
        } else if ($member->role == 'responsable') {
            return redirect('/resp');
        } else {
            return redirect('/doct');
        }

    }

    public function profile()
    {
        if (!$this->checkLogin()) {
            return redirect('/login');
        }
        $user = session()->get('user');
        if ($user->role == 'doctorant') {
            return view('doc.profile');
        } elseif ($user->role == 'responsable') {
            return view('res.profile');
        } else {
            return view('admin.profile');
        }
    }

    public function logout()
    {
        session()->forget('user');
        return redirect('/');
    }

    public function cv($id)
    {
        $member = Member::find($id);
        if (!$member)
            return redirect('/');
        return view('user.cv', ['user' => $member]);
    }


}
