<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use APp\Models\Link;
use App\Http\Resources\LinkResource;


class LinksController extends Controller
{
    public function index(Link $link)
    {
        $links = $link->getAllCached();

        return LinkResource::collection($links);
    }
}
