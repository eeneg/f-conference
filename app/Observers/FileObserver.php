<?php

namespace App\Observers;

use App\Models\File;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class FileObserver
{
    /**
     * Handle the File "created" event.
     */
    public function created(File $file): void
    {
        $recipient = Auth::user();
        Notification::make()
            ->title('Saved successfully')
            ->body('The file has been saved successfully.')
            ->sendToDatabase($recipient);
    }

    /**
     * Handle the File "updated" event.
     */
    public function updated(File $file): void
    {
        $recipient = Auth::user();
        Notification::make()
            ->title('Updated successfully')
            ->body('The file has been updated successfully.')
            ->sendToDatabase($recipient);
    }

    /**
     * Handle the File "deleted" event.
     */
    public function deleted(File $file): void
    {
        $recipient = Auth::user();
        Notification::make()
            ->title('Deleted successfully')
            ->body('The file has been deleted successfully.')
            ->sendToDatabase($recipient);
    }

    /**
     * Handle the File "restored" event.
     */
    public function restored(File $file): void
    {
        //
    }

    /**
     * Handle the File "force deleted" event.
     */
    public function forceDeleted(File $file): void
    {
        //
    }
}
