<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates=['deleted_at'];

    protected $fillable=[
        'fname',
        'lname',
        'email',
    ];

    public function courses():BelongsTomany
    {
        return $this -> belongsTomany(Course::class);
    }
}
