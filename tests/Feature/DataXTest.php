<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DataXTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_api_data_all_x()
    {
        $params = ["page" => "1","limit"=>10];
        $response = $this->call('GET', 'api/gateway/data-x/list', $params);
        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_api_data_filter_currency_x()
    {

        $params = ["page" => "1","limit"=>10,'currency'=>'EGP'];
        $response = $this->call('GET', 'api/gateway/data-x/list', $params);
        $response->assertStatus(200);
    }

   
}
