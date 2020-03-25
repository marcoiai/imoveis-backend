<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use App\Crawlers\ZapImoveis;
use App\Crawlers\VivaImoveis;
use App\Crawlers\ChavesNaMao;

class CrawllerController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function crawl()
    {
        $results = [];

        $zap = new ChavesNaMao();
        $results[] = $zap->get();

        $zap = new VivaImoveis();
        $results[] = $zap->get();

        $zap = new ZapImoveis();
        $results[] = $zap->get();

        return response()->json($results)->header('Access-Control-Allow-Origin', '*');
    }
}
