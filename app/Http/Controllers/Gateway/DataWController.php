<?php

namespace App\Http\Controllers\Gateway;

use App\Http\Controllers\Controller;
use App\Http\Requests\DataWFormRequest;
use App\Http\Resources\DataWResource;
use App\Interfaces\DataWinterface;
use Illuminate\Http\Request;

class DataWController extends Controller
{
    /**
     * private variable
     *
     * @var DataWinterface
     */
    private DataWinterface $DataWRepository;

    /**
     * __construct function
     *
     * @param DataWinterface $DataYRepository
     */
    public function __construct(DataWinterface $DataWRepository)
    {
        $this->DataWRepository = $DataWRepository;
    }
    /**
     * Function To List All Data From Y File function
     *
     * @param DataYFormRequest $request
     * @return void
     */
    public function getDataW(DataWFormRequest $request)
    {
        $dataParameters=$request->validated();
        return $this->paginateCollection(DataWResource::collection($this->DataWRepository->getDataW($dataParameters)), $request->limit, 'data_w');
    
    }
    
}
