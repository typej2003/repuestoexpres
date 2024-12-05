<?php

namespace App\Http\Livewire\Admin\Profile;

use App\Http\Livewire\Admin\AdminComponent;

class BillingDetails extends AdminComponent
{

    public $state = [];

    public $user_id;

    public function mount($user_id)
    {
        $this->user_id = $user_id;
    }

    public function updateBillingDetails()
    {
        dd('updateBillingDetails');
    }

    public function render()
    {
        return view('livewire.admin.profile.billing-details');
    }
}
