<?php

namespace App\Repositories;

use App\Interfaces\CollectionInterface;
use App\Interfaces\DataWinterface;
use App\Interfaces\DataYinterface;
use App\Models\Collection;
use Illuminate\Support\Facades\Storage;

class DataWRepository implements DataWinterface
{

    /**
     * Get All Shop Collection function
     *
     * @param [type] $projectId
     * @return void
     */
    public function getDataW($dataParameters)
    {

        $fileData = json_decode(Storage::disk('public')->get('DataW.json'), true);

        $dataW=collect($fileData);


        $dataX=collect($fileData);

        if(isset($dataParameters['currency'])){
          $dataX = $dataX->where('currency',$dataParameters['currency']);
        }
       

          return $dataW;

    }

}
