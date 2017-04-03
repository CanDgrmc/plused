<?php

namespace App\Http\Controllers;
use App\Okullar;
use App\Sehirler;
use App\Ulkeler;

use PHPMailer;


use phpDocumentor\Reflection\Types\Resource;
use Illuminate\Http\Request;

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

        return view('main');


    }
    public function sendmail(Request $data)
    {
        $isim = $data->input('name');
        $mail = $data->input('email');
        $subject = $data->input('subject');
        $msg = $data->input('message');

        $m = new PHPMailer();
        $m->isSMTP();
        $m->SMTPAuth = true;
        $m->Username = 'info@plused.com.tr';
        $m->Password = 'Fatih1453';

        $m->setFrom($mail, 'Contact');


        $m->Subject = $subject;
        $m->Body = $msg;
        $m->AltBody = 'Gönderen: ' . $isim;

        $m->send();
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
    public function dil_okullari()
    {
        $Ulkeler=Ulkeler::get();
        $Sehirler=Sehirler::where('country_id',1)->get();
        $Okullar=Okullar::get();
        return view('countries')->with('Ulkeler',$Ulkeler)->with('Sehirler',$Sehirler)->with('Okullar',$Okullar);

    }
    public function iletisim(){
        return view('iletisim');
    }
    public function hakkimizda(){
        return view('hakkimizda');
    }
    public function tracktest(){
        return view('tracktest');
    }
    public function yurtdisi_egitim(){
        return view('yurtdisi_egitim');
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
}
