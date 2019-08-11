<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\Events\ModelCreated;
use Notification;
use App\Notifications\ContactCreate;

class Contact extends Model
{
    use IngoingTrait;
    use Notifiable;

    /**
     * The event map for the model.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'created' => ModelCreated::class,
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'type', 'address', 'message'];

    public static function boot() {
        parent::boot();
	self::created(function($model) {
            Notification::send($model, new ContactCreate($model->user));
	});
    }

}
