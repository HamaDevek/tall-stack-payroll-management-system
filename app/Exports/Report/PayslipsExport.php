<?php

namespace App\Exports\Report;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PayslipsExport implements FromView
{
    public function __construct($data) {
        $this->data = $data;
    }
    
    public function view(): View
    {
        // dd($this->collection);   
        return view('reports.payslips', ['collection' => $this->data]);
    }
}
