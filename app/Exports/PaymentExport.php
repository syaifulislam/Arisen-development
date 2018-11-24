<?php

namespace App\Exports;

use App\PaymentHistory;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PaymentExport implements FromView
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct($period)
    {
        $this->period = $period;
    }
    public function view(): View
    {
        if ($this->period == 'mingguan') {
            $timeStart = Carbon::now()->startOfWeek()->format('Y-m-d');
            $timeEnd = Carbon::now()->endOfWeek()->format('Y-m-d');
        }else if ($this->period == 'bulanan') {
            $timeStart = Carbon::now()->startOfMonth()->format('Y-m-d');
            $timeEnd = Carbon::now()->endOfMonth()->format('Y-m-d');
        }else if ($this->period == 'tahunan') {
            $timeStart = Carbon::now()->startOfYear()->format('Y-m-d');
            $timeEnd = Carbon::now()->endOfYear()->format('Y-m-d');
        }else {
            return view('download-xls', [
                'data' => PaymentHistory::select('users.username',
                'payment_historys.request_nominal',
                'payment_historys.status',
                'payment_types.name',
                'payment_historys.created_at')
                ->leftJoin('payment_types','payment_types.id','payment_historys.payment_type_id')
                ->leftJoin('users','users.id','payment_historys.user_id')->get()
            ]);          
        }
        return view('download-xls', [
            'data' => PaymentHistory::select('users.username',
            'payment_historys.request_nominal',
            'payment_historys.status',
            'payment_types.name',
            'payment_historys.created_at')
            ->leftJoin('payment_types','payment_types.id','payment_historys.payment_type_id')
            ->leftJoin('users','users.id','payment_historys.user_id')
            ->whereBetween('payment_historys.created_at',[$timeStart,$timeEnd])->get()
        ]);
    }
}
