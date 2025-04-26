<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingContent extends Model
{
    use HasFactory;

    protected $table = 'pricing_contents';

    protected $fillable = ['section', 'title', 'content', 'image'];
}