<?php

namespace App\Http\View\Composers;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ViewComposer
{

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function getColor()
    {
        $loyalty = Auth::user()->loyalty;
        switch ($loyalty) {
            case 'Green':
                return '#006F42';
            case 'Gold':
                return '#C6A961';
        }
    }

    public function compose(View $view)
    {
        $view->with('color', $this->getColor());
    }
}
