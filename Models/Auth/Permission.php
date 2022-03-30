<?php

namespace App\Models\Auth;

use Spatie\Permission\Models\Permission as SpatiePermission;

class Permission extends SpatiePermission
{
    //  The attributes that are mass assignable
    protected $fillable = [ 'name','descriptions','category','guard_name'];

    //  Modify name
    protected function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['category'] = $this->addValueToCategoryColumn($value);
    }

    //  Relationship
    public function role()
    {
        return $this->belongsToMany(Role::class,'role_has_permissions');
    }

    // Get Name. ID and Category of permissions and sort by name and group by category
    public function getNameGroupByCategory()
    {
        return $this->select('name','id','category')->get()->sortBy('name')->groupBy('category');
    }

    //  automatic add value to permission category
    private function addValueToCategoryColumn($value)
    {
        return ucwords(str_replace("-"," ",substr($value,0,strpos($value,"_"))));
    }

}
