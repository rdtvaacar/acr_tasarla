<?php

namespace Acr\Acr_tasarla\Controllers;

use App\Handlers\Commands\my;
use DB,
    Input,
    Validator,
    Auth,
    Redirect,
    Session;
use Illuminate\Http\Request;
use Acr_fl;
use Image;
use App\Http\Controllers\Controller;


class TasarlaController extends Controller
{

    function index()
    {
        return view('Acr_tasarlav::tasarla');
    }

}
