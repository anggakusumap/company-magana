<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static Builder|static latest(string $column = 'created_at')
 * @method static Builder|static orderByDesc(string $column)
 * @method static Builder|static orderBy(string $column, string $direction = 'asc')
 */
class CompanyKeypoint extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'company_about_id',
        'keypoint',
    ];
}
