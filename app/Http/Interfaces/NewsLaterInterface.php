<?php

namespace App\Http\Interfaces;


interface NewsLaterInterface{

public function AllnewsLater();

public function deletenewsLater($request);

public function deleteAll($request);

    /** FRONTEND SECTION */

public function subscriber($request);



}
