<?php

namespace App\Traits;

/**
 *
 */
trait UserPermissions
{
    protected $permissions = [];

    /**
     * @param $ability
     *
     * @return bool
     */
    public function hasPermissionTo( $ability ) : bool
    {
        if( empty( $this->permissions ) ) {
            $this->reloadPermissions();
        }
        return in_array( $this->permissions, $ability, true );
    }// hasPermissionTo

    /**
     *
     */
    private function reloadPermissions()
    {
        $roles = \Auth::user()->roles;
        foreach( $roles as $role ) {
            $this->permissions[] = $role->permissions;
        }
        $this->permissions = array_merge( ...$this->permissions );
    }

}// UserPermissions
