<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

/**
 * Parent for any controller
 */
abstract class AbstractController extends BaseController
{
    use DispatchesJobs, ValidatesRequests;
}
