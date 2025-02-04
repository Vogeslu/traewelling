<?php

namespace App\Notifications;

use App\Exceptions\ShouldDeleteNotificationException;
use App\Models\Status;
use Illuminate\Bus\Queueable;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Notifications\Notification;

class MastodonNotSent extends Notification
{
    use Queueable;

    public $error;
    public $status;

    public function __construct($error, Status $status) {
        $this->error  = $error;
        $this->status = $status;
    }

    public function via(): array {
        return ['database'];
    }

    public function toArray(): array {
        return [
            'error'     => $this->error,
            'status_id' => $this->status->id,
        ];
    }

    /**
     * @throws ShouldDeleteNotificationException
     */
    public static function detail($notification) {
        $data = $notification->data;

        try {
            $status = Status::findOrFail($data['status_id']);
        } catch (ModelNotFoundException) {
            throw new ShouldDeleteNotificationException();
        }
        $notification->detail         = new \stdClass();
        $notification->detail->status = $status;
        return $notification->type;
    }

    public static function render($notification): ?string {
        try {
            $detail = self::detail($notification);
        } catch (ShouldDeleteNotificationException $e) {
            $notification->delete();
            return null;
        }
        $data = $notification->data;


        return view("includes.notification", [
            'color'  => "warning",
            'icon'   => "fas fa-exclamation-triangle",
            'lead'   => __('notifications.socialNotShared.lead', ['platform' => "Mastodon"]),
            "link"   => route('statuses.get', ['id' => $detail->status->id]),
            'notice' => __('notifications.socialNotShared.mastodon.' . $data['error']),

            'date_for_humans' => $notification->created_at->diffForHumans(),
            'read'            => $notification->read_at != null,
            'notificationId'  => $notification->id
        ])->render();
    }
}
