<?php
namespace App\Models;
use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Answer extends Model
{
    use HasFactory;

    protected $guarded = [];


public function questions()
{
    return $this->belongsToMany(Question::class);
}
}
