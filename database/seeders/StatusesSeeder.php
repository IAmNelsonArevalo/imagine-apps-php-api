<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::create([
            'name' => 'Active',
            'model' => 'All',
            'color_status' => '#00C853',
            'translation_status' => 'Activo'
        ]);

        Status::create([
            'name' => 'Inactive',
            'model' => 'All',
            'color_status' => '#D50000',
            'translation_status' => 'Inactivo'
        ]);

        Status::create([
            'name' => 'Created',
            'model' => 'Order',
            'color_status' => '#3D5AFE',
            'translation_status' => 'Creado'
        ]);

        Status::create([
            'name' => 'Canceled',
            'model' => 'Order',
            'color_status' => '#C62828',
            'translation_status' => 'Cancelado'
        ]);

        Status::create([
            'name' => 'Confirmed',
            'model' => 'Order',
            'color_status' => '#4A148C',
            'translation_status' => 'Confimado'
        ]);

        Status::create([
            'name' => 'On Way',
            'model' => 'Order',
            'color_status' => '#F57F17',
            'translation_status' => 'En Camino'
        ]);

        Status::create([
            'name' => 'Delivered',
            'model' => 'Order',
            'color_status' => '#76FF03',
            'translation_status' => 'Entregado'
        ]);
    }
}
