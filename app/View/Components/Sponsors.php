<?php

namespace App\View\Components;

use App\Models\Sponsor;
use Illuminate\View\Component;

class Sponsors extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $sponsors = Sponsor::limit(5)->get();

        return view('components.sponsors', [
            'sponsors' => $sponsors,
        ]);
    }
}
