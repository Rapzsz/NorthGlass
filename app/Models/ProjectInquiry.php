<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProjectInquiry extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'service_id',
        'budget',
        'message',
        'status',
    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}