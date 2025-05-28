<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Add the fillable property to specify which attributes can be mass-assigned
    protected $fillable = ['name', 'status'];
}
