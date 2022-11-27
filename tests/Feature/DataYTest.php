<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class DataYTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_api_data_all_y()
    {
        $params = ["page" => "1","limit"=>10];
        $response = $this->call('GET', 'api/gateway/data-y/list', $params);
        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_api_data_filter_currency_y()
    {

        $params = ["page" => "1","limit"=>10,'currency'=>'EGP'];
        $response = $this->call('GET', 'api/gateway/data-y/list', $params);
        $response->assertStatus(200);
    }

     /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_api_data_filter_status_y_paid()
    {
        $params = ["page" => "1","limit"=>10,'status'=>'paid'];
        $response = $this->call('GET', 'api/gateway/data-y/list', $params);
        $response->assertStatus(200);
    }

    
     /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_api_data_filter_status_y_pending()
    {
        $params = ["page" => "1","limit"=>10,'status'=>'pending'];
        $response = $this->call('GET', 'api/gateway/data-y/list', $params);
        $response->assertStatus(200);
    }

     /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_api_data_filter_status_y_reject()
    {
        $params = ["page" => "1","limit"=>10,'status'=>'reject'];
        $response = $this->call('GET', 'api/gateway/data-y/list', $params);
        $response->assertStatus(200);
    }


      /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_api_data_filter_status_y_worng()
    {
        $params = ["page" => "1","limit"=>10,'status'=>'sss'];
        $response = $this->call('GET', 'api/gateway/data-y/list', $params);
        $response->assertStatus(422);
    }

        /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_api_data_filter_y()
    {
        $params = ["page" => "1","limit"=>10,'status'=>'paid','currency'=>'EGP'];
        $response = $this->call('GET', 'api/gateway/data-y/list', $params);
        $response->assertStatus(200);
    }
}
