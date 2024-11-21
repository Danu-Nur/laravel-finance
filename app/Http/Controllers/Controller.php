<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $title = 'Default Title';

    /**
     * Share title with all views.
     */
    public function __construct()
    {
        view()->share('pageTitle', $this->title);
    }

    /**
     * Set the title dynamically.
     */
    protected function setTitle($title)
    {
        $this->title = $title;
        view()->share('pageTitle', $this->title);
    }
}
