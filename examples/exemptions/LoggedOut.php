<?php namespace App\Exemptions;

use Auth;

use MisterPhilip\MaintenanceMode\Exemptions\MaintenanceModeExemption;

/**
 * Class LoggedOut
 *
 * Allow guests to continue to browse, but not authenticated users
 */
class LoggedOut extends MaintenanceModeExemption
{
    /**
     * Execute the exemption check
     *
     * @return bool
     */
    public function isExempt()
    {
        // Return true (exempt) if the user is a guest
        return Auth::guest();
    }
}