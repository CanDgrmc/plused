<?php

namespace App\Http\Controllers;

use App\Ulkeler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Admin;
use App\Sehirler;
use App\Okullar;
use Validator;

class AdminController extends Controller
{

    public function __construct()
    {

    }

    public function check(Request $data){
        $ctrl=Validator::make($data->all(),array(
            'username' => 'required',
            'password' => 'required'
        ));
        if($ctrl->fails()){
            return 'Eksik Bilgi';
        }
        else {
            $username = $data->input('username');
            $password = $data->input('password');
            $sess = array('username' => $username, 'loggedin' => true);
            $data->session()->put($sess);

            $db = Admin::where('username', $username)->first();
            if (!empty($db) && Hash::check($password, $db->password)) {

                $sess = array('username' => $username, 'loggedin' => true);
                $data->session()->put($sess);
                return redirect('panel');
            } else {
                return 'adsa';
            }
        }
    }
    public function panel(){

        if(session()->has('loggedin')){
            $sess=session()->all();

                return view('adminpanel');

        }
        else {
            return redirect()->to('/');
        }
    }

    //panel görüntüleme
    public function ulkegoster(){
        if(session()->has('loggedin')) {
            $ulkeler = Ulkeler::get();
            return view('ulkegoster')->with('ulkeler', $ulkeler);
        }
        else {
            return redirect()->to('/');
        }
    }
    public function sehirgoster(){
        if(session()->has('loggedin')) {
            $ulkeler = Ulkeler::get();
            $sehirler = Sehirler::get();
            return view('sehirgoster')->with('sehirler', $sehirler)->with('ulkeler', $ulkeler);
        }else {
            return redirect()->to('/');
        }
    }
    public function okulgoster(){
        if(session()->has('loggedin')) {
            $okullar = Okullar::orderBy('Id')->get();
            $sehirler = Sehirler::get();
            return view('okulgoster')->with('okullar', $okullar)->with('sehirler', $sehirler);
        }else {
            return redirect()->to('/');
        }
    }


    //panel görüntüleme bitiş

    // panel ekleme
    public function ulkeekle(){
        if(session()->has('loggedin')) {
            return view('addulke');
        }else {
            return redirect()->to('/');
        }
    }
    function addulke(Request $data){
        if(session()->has('loggedin')) {
            $arr['Name'] = $data->ulkeadi;
            if (Ulkeler::insert($arr)) {
                return 'eklendi';

            }
        }else {
            return redirect()->to('/');
        }

    }
    public function sehirekle(){
        if(session()->has('loggedin')) {
            $ulkeler = Ulkeler::get();
            return view('addsehir')->with('ulkeler', $ulkeler);
        }else {
            return redirect()->to('/');
        }
    }
    function addsehir(Request $data){
        if(session()->has('loggedin')) {
            $arr['city'] = $data->input('sehiradi');
            $arr['country_id'] = $data->input('ulke');
            if (Sehirler::insert($arr)) {
                return 'eklendi';
            }
        }else {
            return redirect()->to('/');
        }
    }


    public function okulekle(){
        if(session()->has('loggedin')) {
            $sehirler = Sehirler::get();
            return view('addokul')->with('sehirler', $sehirler);
        }else {
            return redirect()->to('/');
        }
    }
    function addokul(Request $data){
        if(session()->has('loggedin')) {
            $arr['School_Name'] = $data->input('okuladi');
            $arr['cities'] = $data->input('sehir');
            if (Okullar::insert($arr)) {
                return 'eklendi';
            }
        }else {
            return redirect()->to('/');
        }
    }

    //panel ekleme bitiş



    public function logout()
    {
        if (session()->has('loggedin')) {
            session()->flush();
            $sess = session()->all();
            return redirect()->to('/');
        }else {
            return redirect()->to('/');
        }
    }

}
