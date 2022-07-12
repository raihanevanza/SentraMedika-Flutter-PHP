<?php

namespace App\Controllers;

class User extends BaseController
{
    public function layananjam()
    {
        $data = [
            'title' => 'Layanan 24 Jam'
        ];


        return view('user/layananjam', $data);
    }

    public function rawatinap()
    {
        $data = [
            'title' => 'Rawat Inap'
        ];


        return view('user/rawatinap', $data);
    }

    public function mcu()
    {
        $data = [
            'title' => 'MCU'
        ];


        return view('user/mcu', $data);
    }

    public function layananunggulan()
    {
        $data = [
            'title' => 'Layanan Unggulan'
        ];


        return view('user/layananunggulan', $data);
    }

    public function layananlainnya()
    {
        $data = [
            'title' => 'Layanan Lainnya'
        ];


        return view('user/layananlainnya', $data);
    }

    public function rawatjalan()
    {
        $data = [
            'title' => 'Rawat Jalan'
        ];


        return view('user/rawatjalan', $data);
    }

    public function aboutus()
    {
        $data = [
            'title' => 'Tentang Kami'
        ];


        return view('user/aboutus', $data);
    }
}
