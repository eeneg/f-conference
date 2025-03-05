<?php

namespace App\Observers;

use App\Models\User;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        $recipient = Auth::user();
        Notification::make()
            ->title('Saved successfully')
            ->body('The user has been saved successfully.')
            ->sendToDatabase($recipient);
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        $recipient = Auth::user();
        Notification::make()
            ->title('Updated successfully')
            ->body('The user has been updated successfully.')
            ->sendToDatabase($recipient);
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        $recipient = Auth::user();
        Notification::make()
            ->title('Deleted successfully')
            ->body('The user has been delete successfully.')
            ->sendToDatabase($recipient);
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}
