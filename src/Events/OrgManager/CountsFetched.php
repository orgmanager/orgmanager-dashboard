<?php

namespace OrgManager\Dashboard\Events\OrgManager;

use App\Events\DashboardEvent;

class CountsFetched extends DashboardEvent
{
    public $users;

    public $orgs;

    public $invites;

    public function __construct(array $counts)
    {
        foreach ($counts as $countName => $value) {
            $this->$countName = $value;
        }
    }
}
