<?php

namespace App;

use Auth;
use Html;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Message;
use Mail;

/**
 * Link an email address of a non existing user to an existing account
 * @property string $email
 */
class Invitation extends Model
{
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['email'];

    /**
     * The "booting" method of the model.
     * @return void
     */
    protected static function boot()
    {
        self::created(__CLASS__.'@inviteFutureUser');
    }

    /**
     * [inviteFutureUser description]
     * @param  self $invitation Invitation
     * @return void
     */
    public static function inviteFutureUser($invitation) {
        if (Auth::check()) {
            Mail::send(
                'emails.inviteFutureUser',
                ['invitation' => $invitation],
                function(Message $m) use ($invitation) {
                    $m->to($invitation->email);
                    $m->subject(trans('invitation.inviteFutureUser.emailSubject', ['user' => Auth::user()]));
                }
            );
        }
    }

    /**
     * Convert the model to its string representation.
     * @return string
     */
    public function __toString()
    {
        return $this->email;
    }

    /**
     * Get a link to the email
     * @return string HTML anchor
     */
    public function link() {
        return Html::mailto($this->email, $this).' ('.trans('invitation.helper').')';
    }

    /**
     * Query account related to invitation
     * @return \Illuminate\Database\Eloquent\Builder Query
     */
    public function account() {
        return $this->belongsTo('App\Account')
            ->withTrashed();
    }
}
