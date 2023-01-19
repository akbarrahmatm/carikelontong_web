<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Maps extends BaseController
{
    public function index()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://uas.api.akbarrahmatm.my.id/toko/list",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $data = [
                'title' => 'Home',
                'data' => json_decode($response, true)
            ];
            return view('maps/index', $data);
        }

    }
    public function detail($id)
    {
        $idToko = $id;
        $endPoint = "https://uas.api.akbarrahmatm.my.id/toko/detail/$idToko";

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => $endPoint,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $val = json_decode($response, true);
            $data = [
                'title' => 'Detail Toko',
                'data' => $val['data'][0]
            ];

            return view('maps/detail', $data);
        }
    }
    public function arah($id)
    {
        $idToko = $id;
        $endPoint = "https://uas.api.akbarrahmatm.my.id/toko/detail/$idToko";

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => $endPoint,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $val = json_decode($response, true);
            $data = [
                'title' => 'Arah (Direction)',
                'data' => $val['data'][0]
            ];

            return view('maps/arah', $data);
        }
    }
}
