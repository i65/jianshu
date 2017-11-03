<?php

namespace App;


class AdminRole extends Model
{
    //
    protected $table = 'admin_roles';

    //当前角色的所有权限
    public function permisssions(){
        return $this->belongsToMany(\App\AdminPermission::class, 'admin_permission_role', 'role_id', 'permission_id')->withPivot(['permission_id', 'role_id']);
    }

    //给角色赋予权限
    public function grantPermission($permission){
        return $this->permisssions()->save($permission);
    }

    //取消角色赋予的权限
    public function deletePermission($permission){
        return $this->permisssions()->detach($permission);
    }

    //判断角色是否有权限
    public function hasPermission($permission){
        return $this->permission->contains($permission);
    }
}
