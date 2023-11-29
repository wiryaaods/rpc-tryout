<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubTest extends Model
{
    use HasFactory;

    protected $table = 'sub_tests';
    
    public function tryout() {
        return $this->belongsTo(Tryout::class, 'id_tryout');
    }
    public function question() {
        return $this->hashMany(Question::class);
    }

}
