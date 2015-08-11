<?php

namespace App;

use Html;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * Convert the model to its string representation.
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }

    public function link() {
        return Html::mailto($this->email, $this);
    }

    public function accounts() {
        return $this->belongsToMany('App\Account')
            ->withTrashed()
            ->withPivot('owner')
            ->withTimestamps()
            ->orderBy('owner', 'desc')
            ->orderBy('name');
    }

    public function trashedAccounts() {
        return $this->belongsToMany('App\Account')
            ->onlyTrashed()
            ->withPivot('owner')
            ->withTimestamps()
            ->orderBy('owner', 'desc')
            ->orderBy('name');
    }

    public function nontrashedAccounts() {
        return $this->accounts()
            ->withPivot('owner')
            ->withTimestamps()
            ->orderBy('owner', 'desc')
            ->orderBy('name');
    }

    public function envelopes() {
        return Envelope::whereIn('account_id', function ($query) {
            $query->select('account_id')
                ->from('account_user')
                ->where('user_id', $this->id);
        })->withTrashed()
        ->orderBy('name');
    }
}
