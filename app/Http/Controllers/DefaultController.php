<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function index()
    {
        $adverts = [
            [
                'title' => 'Charming 3-Bedroom Cottage',
                'price' => 250000,
                'address' => '123 Maple Street, Springfield',
                'bathrooms' => 2,
                'bedrooms' => 3,
                'square_size' => 1500,
            ],
            [
                'title' => 'Modern 4-Bedroom Family Home',
                'price' => 350000,
                'address' => '456 Oak Avenue, Springfield',
                'bathrooms' => 3,
                'bedrooms' => 4,
                'square_size' => 2000,
            ],
            [
                'title' => 'Luxurious 5-Bedroom Villa',
                'price' => 750000,
                'address' => '789 Pine Road, Springfield',
                'bathrooms' => 4,
                'bedrooms' => 5,
                'square_size' => 3500,
            ],
            [
                'title' => 'Cozy 2-Bedroom Apartment',
                'price' => 180000,
                'address' => '101 Birch Lane, Springfield',
                'bathrooms' => 1,
                'bedrooms' => 2,
                'square_size' => 900,
            ],
            [
                'title' => 'Spacious 3-Bedroom Townhouse',
                'price' => 280000,
                'address' => '202 Cedar Street, Springfield',
                'bathrooms' => 2,
                'bedrooms' => 3,
                'square_size' => 1600,
            ],
            [
                'title' => 'Elegant 4-Bedroom Estate',
                'price' => 500000,
                'address' => '303 Elm Road, Springfield',
                'bathrooms' => 3,
                'bedrooms' => 4,
                'square_size' => 2800,
            ],
            [
                'title' => 'Charming 3-Bedroom Ranch',
                'price' => 220000,
                'address' => '404 Maple Avenue, Springfield',
                'bathrooms' => 2,
                'bedrooms' => 3,
                'square_size' => 1400,
            ],
            [
                'title' => 'Modern 2-Bedroom Loft',
                'price' => 210000,
                'address' => '505 Oak Street, Springfield',
                'bathrooms' => 2,
                'bedrooms' => 2,
                'square_size' => 1100,
            ],
            [
                'title' => 'Grand 5-Bedroom Mansion',
                'price' => 900000,
                'address' => '606 Pine Avenue, Springfield',
                'bathrooms' => 5,
                'bedrooms' => 5,
                'square_size' => 4000,
            ],
            [
                'title' => 'Cute 1-Bedroom Studio',
                'price' => 120000,
                'address' => '707 Birch Street, Springfield',
                'bathrooms' => 1,
                'bedrooms' => 1,
                'square_size' => 600,
            ],
        ];

        return view('layouts.homepage.main', ['adverts' => $adverts]);
    }
}
