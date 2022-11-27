<?php

namespace App\Repositories;

use App\Interfaces\CollectionInterface;
use App\Interfaces\DataYinterface;
use App\Models\Collection;
use Illuminate\Support\Facades\Storage;

class DataYRepository implements DataYinterface
{

    /**
     * Get All Shop Collection function
     *
     * @param [type] $projectId
     * @return void
     */
    public function getDataY($dataParameters)
    {

        $fileData = json_decode(Storage::disk('public')->get('DataY.json'), true);

        $q=collect($fileData);

        switch(isset($dataParameters['status']) ? $dataParameters['status'] : null){
            case "paid":
            $dataY=$q->where('status',100);
              break;
            case "reject":
           $dataY= $q->where('status',200);
              break;
        case "pending":
            $dataY=$q->where('status',300);
              break;
            default:
              $dataY=$q;
          }

          return $dataY;

    }

}
