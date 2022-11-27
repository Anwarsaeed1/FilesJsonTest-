<?php

namespace App\Repositories;

use App\Interfaces\CollectionInterface;
use App\Interfaces\DataXinterface;
use App\Interfaces\DataYinterface;
use App\Models\Collection;
use Illuminate\Support\Facades\Storage;

class DataXRepository implements DataXinterface
{

    /**
     * Get All Shop Collection function
     *
     * @param [type] $projectId
     * @return void
     */
    public function getDataX($dataParameters)
    {

        $fileData = json_decode(Storage::disk('file_json')->get('DataX.json'), true);

        $dataX=collect($fileData);


        if(isset($dataParameters['currency'])){
          $dataX = $dataX->where('currency',$dataParameters['currency']);
        }

          return $dataX;

    }

}
