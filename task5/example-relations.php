<?php
namespace  App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends  Model
{
    protected $table = 'companies';
    protected $fillable = ['id', '...'];
    public function hasMany(): Illuminate\Database\Eloquent\Relations\HasMany
    {
        return  $this->hasMany(Job::class);
        //return  $this->hasMany(Job::class, 'company_id', 'id');
    }
}

class Job extends Model
{
    protected $table = 'jobs';
    protected $fillable = ['id', 'company_id', '...'];

    public function belongsTo(): Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return  $this->belongsTo(Company::class);
        //return  $this->belongsTo(Company::class, 'company_id', 'id');
    }
}

// ..

foreach (Company::first()->jobs as $job) {
    echo $job->id;
}

echo Job::first()->company->id;