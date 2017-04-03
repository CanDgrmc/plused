<?php

namespace App\Http\Controllers;

use App\Ulkeler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Admin;
use App\Sehirler;
use App\Okullar;
use Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;


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


    public function ulkesil(Request $req){
        
        $res=Ulkeler::where('Id',$req->id)->delete();
        if($res){
            return 'true';
        }
        else{
            return $res;
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

    function ulkeupdate(Request $req){
        $data['Name']=$req->ulkeadi;
         $ulke=Ulkeler::where('Id',$req->id)->update(['Name'=> $req->ulkeadi]) ;
            return $ulke;
        
    }

    function addulke(Request $data){
        if(session()->has('loggedin')) {
            $arr['Name'] = $data->ulkeadi;
            
            if (Ulkeler::insert($arr)) {
                return redirect()->to('panel/ulke_ekle');

            }else{return 'false';}
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
                return redirect()->to('panel/sehir_ekle');
            }
        }else {
            return redirect()->to('/');
        }
    }


    public function okulekle(){

        if(session()->has('loggedin')) {
            $sehirler = Sehirler::get();
            $ulkeler=Ulkeler::get();
            return view('addokul')->with('sehirler', $sehirler)->with('ulkeler',$ulkeler);
        }else {
            return redirect()->to('/');
        }
    }
    
    public function addokul(Request $data){
        if(session()->has('loggedin')) {
            
            $ctrl=Validator::make($data->all(),array(
            'photo' => 'required | mimes:jpg,jpeg,png,gif'           
        ));
            if($ctrl){
            $path=$data->file('photo')->store('/img/schools');
           
            $ad=$data->input('okuladi');
            
            $old=array('ı','ü','ö','ğ','ş','ç',' ','%','&','?','"','.','*',"'");
            $new=array('i','u','o','g','s','c','-','-','-','-','-','-','-','-');
            
            $permalink=str_replace($old, $new , $ad);
            
            $arr['School_Name'] = $data->input('okuladi');
            $arr['Detail'] = $data->input('detail');
            $arr['Web_Address'] = $data->input('webaddress');
            $arr['Tel_1'] = $data->input('tel_1');
            $arr['Tel_2'] = $data->input('tel_2');
            $arr['maps'] = $data->input('maps');
            $arr['Photo'] = $path;
            $arr['Accommodation'] = $data->input('accommodation');
            $arr['Education'] = $data->input('education');
            $arr['cities'] = $data->input('sehir');
            $arr['permalink'] = $permalink;
            
           
            if (Okullar::insert($arr)) {
                return redirect()->To('panel/okul_ekle');
            }
            else {return 'hata';}

            }
            
        }else {
            return redirect()->to('/');
        }
    }

    
    //panel ekleme bitiş

    //panel Düzenleme  
    public function editokul(Request $request){
        $sehirler=Sehirler::get();
        $okul=Okullar::where('Id',$request->id)->first();
        return view('editokul')->with('okul',$okul)->with('sehirler',$sehirler);
    }
    public function edtokul(Request $request){
            $ad=$request->input('okuladi');
            
            $old=array('ı','ü','ö','ğ','ş','ç',' ','%','&','?','"','.','*',"'");
            $new=array('i','u','o','g','s','c','-','-','-','-','-','-','-','-');
            
            $permalink=str_replace($old, $new , $ad);
            
        $arr=array(
            'School_Name' => $request->okuladi,
            'Detail' => $request->detail,
            'Web_Address' => $request->webaddress,
            'Tel_1' => $request->tel_1,
            'Tel_2' => $request->tel_2,
            'Maps' => $request->maps,
            'Accommodation' => $request->accommodation,
            'Education' => $request->education,
            'cities' => $request->sehir,
            'permalink' => $permalink,
            
            );
        $res=Okullar::where('Id',$request->id)->update($arr);
            if($res){
            return redirect()->back();
        }
        return redirect()->back()->withErrors();

    }
    public function delokul(Request $req){
        $res=Okullar::where('Id',$req->id)->delete();
        if($res){
            return redirect()->back();
        }
        return redirect()->back()->withErrors();
    }

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
