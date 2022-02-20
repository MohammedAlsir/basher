<?php

namespace Database\Seeders;

use App\Models\Specialist;
use Illuminate\Database\Seeder;

class SeederSpecialists extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $specialists  = new Specialist();
        $specialists->specalty_name = 'باطنية';
        $specialists->des = '';
        $specialists->save();

        $specialists  = new Specialist();
        $specialists->specalty_name = 'عظام';
        $specialists->des = '';
        $specialists->save();

        $specialists  = new Specialist();
        $specialists->specalty_name = 'أعصاب';
        $specialists->des = '';
        $specialists->save();

        $specialists  = new Specialist();
        $specialists->specalty_name = 'عمومي';
        $specialists->des = '';
        $specialists->save();

        $specialists  = new Specialist();
        $specialists->specalty_name = 'أسنان';
        $specialists->des = '';
        $specialists->save();

        $specialists  = new Specialist();
        $specialists->specalty_name = 'مسالك بولية ';
        $specialists->des = '';
        $specialists->save();

        $specialists  = new Specialist();
        $specialists->specalty_name = 'أنف و أذن وحنجرة ';
        $specialists->des = '';
        $specialists->save();
    }
}