<?php

namespace App\Http\Controllers\Gateway;

use App\Http\Controllers\Controller;
use App\Http\Requests\DataXFormRequest;
use App\Http\Resources\DataXResource;
use App\Interfaces\DataXinterface;
use Illuminate\Http\Request;

class DataXController extends Controller
{
    /**
     * private variable
     *
     * @var DataXinterface
     */
    private DataXinterface $DataXRepository;

    /**
     * __construct function
     *
     * @param DataXinterface $DataXRepository
     */
    public function __construct(DataXinterface $DataXRepository)
    {
        $this->DataXRepository = $DataXRepository;
    }
    /**
     * Function To List All Data From Y File function
     *
     * @param DataYFormRequest $request
     * @return void
     */
    public function getDataX(DataXFormRequest $request)
    {
        $dataParameters=$request->validated();
        return $this->paginateCollection(DataXResource::collection($this->DataXRepository->getDataX($dataParameters)), $request->limit, 'data_x');
    
    }
    
}