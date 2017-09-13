<?php

namespace App\Providers;

use Modules\Users\Models\Permission;
use Modules\Users\Models\Role;
use Modules\Users\Models\User;
use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $sections = [
	     User::class => 'App\Http\Sections\Users',
	     Role::class => 'App\Http\Sections\Role',
	     Permission::class => 'App\Http\Sections\Permission',
    ];

    /**
     * Register sections.
     *
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
    	//

        parent::boot($admin);
    }
}
