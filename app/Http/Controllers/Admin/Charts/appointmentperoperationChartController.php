<?php

namespace App\Http\Controllers\Admin\Charts;

use App\User;
use Backpack\CRUD\app\Http\Controllers\ChartController;
use App\Models\Appointment;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class appointmentperoperationChartController extends ChartController
{
    public function setup()
    {
        $this->chart = new Chart();

        // MANDATORY. Set the labels for the dataset points
        $labels = [];
        // for ($days_backwards = 30; $days_backwards >= 0; $days_backwards--) {
        //     if ($days_backwards == 1) {
        //     }
        //     $labels[] = $days_backwards.' days ago';
        // }

        foreach (Appointment::with('operation_type') as $app){
            $labels[] = $app->operation_type;
        }
        $this->chart->labels($labels);

        // RECOMMENDED. Set URL that the ChartJS library should call, to get its data using AJAX.
        $this->chart->load(backpack_url('charts/categories'));

        // OPTIONAL
        $this->chart->minimalist(false);
        $this->chart->displayLegend(true);
    }

    /**
     * Respond to AJAX calls with all the chart data points.
     *
     * @return json
     */
    public function data()
    {
        // for ($days_backwards = 30; $days_backwards >= 0; $days_backwards--) {
        //     // Could also be an array_push if using an array rather than a collection.
        //     $users[] = User::whereDate('created_at', today()->subDays($days_backwards))
        //                     ->count();
        //     $articles[] = Article::whereDate('created_at', today()->subDays($days_backwards))
        //                     ->count();
        //     $categories[] = Category::whereDate('created_at', today()->subDays($days_backwards))
        //                     ->count();
        //     $tags[] = Tag::whereDate('created_at', today()->subDays($days_backwards))
        //                     ->count();
        // }

        foreach (Appointment::with('operation_type') as $app){
            $app::count();
        }



        $this->chart->dataset('Users', 'line', $app)
            ->color('rgb(66, 186, 150)')
            ->backgroundColor('rgba(66, 186, 150, 0.4)');

    }
}