<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhatWeTakeContent extends Model
{
    use HasFactory;

    protected $table = 'what_we_take_contents';

    protected $fillable = ['section', 'title', 'content', 'image'];
}