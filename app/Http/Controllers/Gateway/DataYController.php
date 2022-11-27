<?php

namespace App\Http\Controllers\Gateway;

use App\Http\Controllers\Controller;
use App\Http\Requests\DataYFormRequest;
use App\Http\Resources\DataYResource;
use App\Interfaces\DataYinterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataYController extends Controller
{
    /**
     * private variable
     *
     * @var DataYinterface
     */
    private DataYinterface $DataYRepository;

    /**
     * __construct function
     *
     * @param DataYinterface $DataYRepository
     */
    public function __construct(DataYinterface $DataYRepository)
    {
        $this->DataYRepository = $DataYRepository;
    }
    /**
     * Function To List All Data From Y File function
     *
     * @param DataYFormRequest $request
     * @return void
     */
    public function getDataY(DataYFormRequest $request)
    {
        $dataParameters=$request->validated();
        return $this->paginateCollection(DataYResource::collection($this->DataYRepository->getDataY($dataParameters)), $request->limit, 'data_y');
    
    }
    
}
