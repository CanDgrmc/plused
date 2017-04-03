<?php

namespace App\Http\Controllers;
use App\Okullar;
use App\Sehirler;
use App\Ulkeler;
use App\Basvuru;
//use App\Mail\Contact;

use phpDocumentor\Reflection\Types\Resource;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Mail;
use \PHPMailerAutoload;
use \PHPMailer;



class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      $ogtitle="Plus Ed Ltd.";
        return view('main')->with('ogtitle',$ogtitle);


    }
   

    public function basvurugonder(Request $data){
        $db=array(
           'adsoyad' => $data->adsoyad,
           'dgmtarih' => $data->dgmtarih,
           'dgmyer' => $data->dgmyer,
           'milliyet' => $data->milliyet,
           'tcno' => $data->tcno,
           'milliyet2' => $data->milliyet2,
           'pasaport' => $data->pasaport,
           'pasyer' => $data->pasyer,
           'pasmakam' => $data->pasmakam,
           'pastarih' => $data->pastarih,
           'pasbitis' => $data->pasbitis,
           'pasilk' => $data->pasilk,
           'adres' => $data->adres,
           'ikametsure' => $data->ikametsure,
           'evtel' => $data->evtel,
           'ceptel' => $data->ceptel,
           'annetel' => $data->annetel,
           'babatel' => $data->babatel,
           'mail' => $data->mail,
           'badsoyad' => $data->badsoyad,
           'bdgmtarih' => $data->bdgmtarih,
           'bdgmyer' => $data->bdgmyer,
           'aadsoyad' => $data->aadsoyad,
           'akizlik' => $data->akizlik,
           'adgmyer' => $data->adgmyer,
           'adgmtarih' => $data->adgmtarih,
           'amilliyet' => $data->amilliyet,
           'bmilliyet' => $data->bmilliyet,
           'okul' => $data->okul,
           'sube_sinif' => $data->sube_sinif,
           'okuladres' => $data->okuladres,
           'okultel' => $data->okultel,
           'okulmail' => $data->okulmail,
           'abd' => $data->abd,
           'abdtarih' => $data->abdtarih,
           'yurtdisi' => $data->yurtdisi,
           'ulkeler' => $data->ulkeler,
           'yurtdisitarih' => $data->yurtdisitarih
        );
        $res=Basvuru::insert($db);
            if($res){
                return redirect()->to('/');
            }else{return 'hata';}
    }



    public function create()
    {
        //
    }
    public function ulkeleregore(Request $req){
      if (isset($req)){
        $listulke=Ulkeler::where('Id',$req->id)->first();
        $Ulkeler=Ulkeler::get();
        $Sehirler=Sehirler::where('country_id',$req->id)->get();
        $Okullar=Okullar::get();
        if(isset($listulke)){
        return view('ulkesehir')->with('Sehirler',$Sehirler)->with('Ulkeler',$Ulkeler)->with('Okullar',$Okullar)->with('tekulke',$listulke);
        }
        else {
          return 'sayfa bulunamadı';
        }
    }
    else{
      return redirect()-to('/okullar');
    }
    }

    public function dil_okullari()
    {
        $Ulkeler=Ulkeler::get();
        $Sehirler=Sehirler::where('country_id',1)->get();
        $Okullar=Okullar::get();
        if(isset($Sehirler)){
          return view('countries')->with('Ulkeler',$Ulkeler)->with('Sehirler',$Sehirler)->with('Okullar',$Okullar);
        }
        else {return 'sayfa bulunamadı';}

    }
    public function iletisim(){
        return view('iletisim');
    }
     public function sendmail(Request $data)
    {
        $dt['isim'] = $data->input('name');
        $dt['subject'] = $data->input('subject');

        $dt['msg'] = $data->input('message');
        $dt['email'] = $data->input('email');
        $msg='<h4><i style="color:#b32525">Konu: </i>'.$dt['subject'].'</h4><br><br><p><strong style="color:#b32525">Mesaj : </strong>'.$dt['msg'].'</p><br><br>Bu Mail: '.$dt['isim'].'  ('.$dt['email'].')  tarafından gönderilmiştir';

     



        $phpmailer = new PHPMailer;
        $phpmailer->isSMTP();
        $phpmailer->Host = 'mail.plused.com.tr';
        $phpmailer->SMTPAuth = true;
        $phpmailer->Username = 'contacts@plused.com.tr';
        $phpmailer->Password = 'Fatih1453';
        
        $phpmailer->From = 'contacts@plused.com.tr';
        $phpmailer->FromName = 'İletişim Formu';
        //$phpmailer->AddReplyTo($_POST['mail'], $_POST['name']);
        $phpmailer->addAddress('info@plused.com.tr', 'İletişim Formu /Plused.com.tr'); // duzenlenecek
        $phpmailer->AddReplyTo($dt['email'], 'Contacts');
        $phpmailer->isHTML(true);
        $phpmailer->Subject = $dt['subject'];
        $phpmailer->Body    = $msg;
        $phpmailer->CharSet = 'UTF-8';
         
        if(!$phpmailer->send()) {
           return $phpmailer->ErrorInfo; 
           
        } 
         
        return true;



    }
    public function hakkimizda(){
        return view('hakkimizda');
    }
    public function tracktest(){
        return view('tracktest');
    }
    public function toeic(){
        $title="TOEIC Test Center";
        return view('toeictestcenter')->with('title',$title);
    }
    public function toeicSSS(){
      $title="TOEIC Sık Sorulan Sorular";
      return view('toeicSSS')->with('title',$title);
    }
    public function toeictarihler(){
      $title="TOEIC Sınav Tarihleri";
      return view('toeictarihler')->with('title',$title);
    }
    public function orneksinavlar(){
      $title="TOEIC Ornek Sınavlar";
      return view('orneksinavlar')->with('title',$title);
    }

    public function educitykayit(Request $req){
      $data=array(
        "ogrenci_ad_soyad" => $req->ogrenci_ad_soyad;
        "ogrenci_no" => $req->ogrenci_no;
        "ogrenci_mail" => $req->ogrenci_mail;
        "veli_ad_soyad" => $req->veli_ad_soyad;
        "veli_mail" => $req->veli_mail;
        "tel" => $req->tel;
        "okul" => $req->okul;
        "sehir" => $req->sehir;
        );
    }
    public function lrn(){
      $title="LRN GLOBAL";
      return view('lrntestcenter')->with('title',$title);
    }
    public function lrniesol(){
      $title="LRN Certificate in ESOL International (CEF)";
      return view('lrnIESOL')->with('title',$title);
    }
    public function lrncommunication(){
      $title="LRN  Certificate in ESOL International  (Communication - Speaking and Listening)";
      return view('lrncommunication')->with('title',$title);
    }
    public function lrnCAB(){
      $title="Composite Assessment B1 (CAB)";
      return view('lrnCAB')->with('title',$title);
    }
    public function lrnIELCA(){
      $title="International English Language Competency Assessment (IELCA)";
      return view('lrnIELCA')->with('title',$title);
    }
    public function lrnBELT(){
      $title="Business English Language Test (BELT)";
      return view('lrnBELT')->with('title',$title);
    }
    public function lrnELTAA(){
      $title="LRN Level 2 Award in Teaching English to Speakers of Other Languages (ELTAA)";
      return view('lrnELTAA')->with('title',$title);
    }
    public function lrnELTAB(){
      $title="LRN Level 3 Award in Teaching English to Speakers of Other Languages (ELTAB)";
      return view('lrnELTAB')->with('title',$title);
    }
    public function lrnELTAC(){
      $title="LRN Level 5 Award in Teaching English to Speakers of Other Languages (ELTAC)";
      return view('lrnELTAC')->with('title',$title);
    }
    public function lrnETAB(){
      $title="LRN Level 3 Award in Education and Training (ETAB)";
      return view('lrnETAB')->with('title',$title);
    }
    public function lrngeneral3(){
      $title="LRN Level 3 Certificate in Education and Training";
      return view('lrngeneral3')->with('title',$title);
    }
    public function lrnpreu3(){
      $title="LRN Level 3 Diploma In Pre U Foundation Studies";
      return view('lrnpreu3')->with('title',$title);
    }
    public function lrnbssn3(){
      $title="LRN Level 3 Certificate In Business Management";

      return view('lrnbssn3')->with('title',$title);
    }
    public function lrnbssn7(){
      $title="LRN Level 7 Certificate In Business Management";
      return view('lrnbssn7')->with('title',$title);
    }
    public function lrnbentr5(){
      $title="LRN Level 5 Diploma in Business and Enterprise";
      return view('lrnbentr5')->with('title',$title);
    }
    public function lrnbentr5ex(){
      $title="LRN Level 5 Extended Diploma in Business and Enterprise";
      return view('lrnbentr5ex')->with('title',$title);
    }
    public function lrnisl3(){
      $title="LRN Level 3 Certificate in Islamic Finance";
      return view('lrnisl3')->with('title',$title);
    }
    public function lrnisl4(){
      $title="LRN Level 4 Certificate in Islamic Finance";
      return view('lrnisl4')->with('title',$title);
    }
    public function lrnisl5(){
      $title="LRN Level 5 Certificate in Islamic Finance";
      return view('lrnisl5')->with('title',$title);
    }
    public function lrncomdev3(){
      $title="LRN Level 3 Award in European Community Development";
      return view('lrncomdev')->with('title',$title);
    }
    public function awschool(){
      $title='Yapım Aşamasındadır';
      return view('yapimasamasi')->with('title',$title);
    }
    public function yurtdisi_egitim(){
        return view('yurtdisi_egitim');
    }
    public function onlinebasvuru(){
        return view('onlinebasvuru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showlogin()
    {
        return view('login');

    }
    public function okuldetay(Request $id){

        $Ulkeler=Ulkeler::get();
        $Sehirler=Sehirler::get();
       
        $okul=Okullar::where('permalink','=',$id->id)->first();
        $title=$okul->School_Name;
        $ogtitle=$okul->School_Name;
        if(isset($okul)){
        return view('okuldetay')->with('Ulkeler',$Ulkeler)->with('Sehirler',$Sehirler)->with('okul',$okul)->with('title',$title);
      }
      else {
        return $okul;
      }
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
    public function store(){

    }
}
