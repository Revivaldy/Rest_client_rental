<?php 

use GuzzleHttp\Client;

class Harian_model extends CI_model {

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/Rental_mobil/api/',
        ]);
    }

    public function getAllHarian()
    {
        $response = $this->_client->request('GET', 'harian', [
            'query' => [
                'X-API-KEY' => 'api1234'
            ]            
        ]);
        
        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'];
    }

    public function getHarianById($id)
    {  
        $response = $this->_client->request('GET', 'harian', [
            'query' => [
                'X-API-KEY' => 'api1234',
                'id' => $id
            ]
        ]);

        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'][0];
    }

    public function tambahDataHarian()
    {
        $data = [
            "Mobil" => $this->input->post('Mobil', true),
            "Paket_10_Hari" => $this->input->post('Paket_10_Hari', true),
            "Paket_20_Hari" => $this->input->post('Paket_20_Hari', true),
            "Paket_30_Hari" => $this->input->post('Paket_30_Hari', true),
            "X-API-KEY" => 'api1234'
        ];

        $response = $this->_client->request('POST', 'harian', [
            'form_params' => $data
        ]);
        
        $result = json_decode($response->getbody()->getContents(), true);

        return $result;
    }

    public function hapusDataHarian($id)
    {
        $response = $this->_client->request('DELETE', 'harian', [
            'form_params' => [
                'id' => $id,
                'X-API-KEY' => 'api1234'
            ]
        ]);

        $result = json_decode($response->getbody()->getContents(), true);

        return $result;
    }



    public function ubahDataHarian()
    {
        $data = [
            'id' =>$this->input->post('id', true),
            'Mobil' =>$this->input->post('Mobil', true),
            'Paket_10_Hari' =>$this->input->post('Paket_10_Hari', true),
            'Paket_20_Hari' =>$this->input->post('Paket_20_Hari', true),
            'Paket_30_Hari' =>$this->input->post('Paket_30_Hari', true),
            'X-API-KEY' => 'api1234'
        ];

        $response = $this->_client->request('PUT', 'harian', [
            'form_params' => $data]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result; 
        }
    

    public function cariDataHarian()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('Mobil', $keyword);       
        $this->db->or_like('Paket_10_Hari', $keyword);
        $this->db->or_like('Paket_20_Hari', $keyword);
        $this->db->or_like('Paket_30_Hari', $keyword);
        return $this->db->get('harian')->result_array();
    }
}