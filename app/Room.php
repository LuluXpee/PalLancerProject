<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
protected $fillable = ['Room_Type', 'Room_Number', 'Image', 'Description', 'Amenities', 'Price_PerNight', 'Status'];



}