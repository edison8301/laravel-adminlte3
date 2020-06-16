<?php

namespace App\Models;

use App\Components\Html;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userRole() {
        return $this->hasOne(UserRole::class, 'id', 'id_user_role');
    }

    public function unit() {
        return $this->hasOne(Unit::class, 'id', 'id_unit');
    }

    /**
     * @param  array $params
     * @return  \Illuminate\Database\Eloquent\Builder
     */
    public static function query($params=[])
    {
        $query = parent::query();

        if(@$params['id'] != null) {
            $query->where('id', @$params['id']);
        }

        if(@$params['name'] != null) {
            $query->where('name', @$params['name']);
        }

        if(@$params['email'] != null) {
            $query->where('email', @$params['email']);
        }

        if(@$params['email_verified_at'] != null) {
            $query->where('email_verified_at', @$params['email_verified_at']);
        }

        if(@$params['username'] != null) {
            $query->where('username', @$params['username']);
        }

        if(@$params['password'] != null) {
            $query->where('password', @$params['password']);
        }

        if(@$params['remember_token'] != null) {
            $query->where('remember_token', @$params['remember_token']);
        }

        if(@$params['status_aktif'] != null) {
            $query->where('status_aktif', @$params['status_aktif']);
        }

        if(@$params['id_user_role'] != null) {
            $query->where('id_user_role', @$params['id_user_role']);
        }

        if(@$params['id_unit'] != null) {
            $query->where('id_unit', @$params['id_unit']);
        }

        if(@$params['created_at'] != null) {
            $query->where('created_at', @$params['created_at']);
        }

        if(@$params['updated_at'] != null) {
            $query->where('updated_at', @$params['updated_at']);
        }

        return $query;
    }

    /**
     * @param  array $params
     * @return  User[]|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public static function get($params=[])
    {
        $query = static::query($params);
        return $query->get();
    }

    /**
     * @param  $params
     * @return  int
     */
    public static function sum($params=[])
    {
        $query = static::query($params);

        return $query->sum(@$params['attribute']);
    }

    /**
     * @param  $params
     * @return  int
     */
    public static function count($params=[])
    {
        $query = static::query($params);
        return $query->count();
    }

    public function loadAttributes($input=[])
    {
        if(count($input)==0) {
            return false;
        }

        foreach($this->fillable as $attribute) {
            if(@$input[$attribute]!=null) {
                $this->$attribute = $input[$attribute];
            }
        }

        return true;

    }

    public function getLinkReadIcon()
    {
        return Html::a('<i class="fa fa-eye"></i>', [
            '/user/read',
            'id'=>$this->id
        ]);
    }

    public function getLinkUpdateIcon()
    {
        return Html::a('<i class="fa fa-pencil"></i>', [
            '/user/update',
            'id'=>$this->id
        ]);
    }

    public function getLinkDeleteIcon()
    {
        return Html::a('<i class="fa fa-trash"></i>', [
            '/user/delete',
            'id'=>$this->id
        ],[
            'onclick'=>'return confirm("Yakin akan menghapus data?")'
        ]);
    }

    public function getLinkReadButton()
    {
        return Html::a('<i class="fa fa-eye"></i> Lihat', [
            '/user/read',
            'id'=>$this->id
        ],[
            'class' => 'btn btn-success btn-flat'
        ]);
    }

    public function getLinkUpdateButton()
    {
        return Html::a('<i class="fa fa-pencil"></i> Ubah', [
            '/user/update',
            'id' => $this->id
        ],[
            'class' => 'btn btn-success btn-flat'
        ]);
    }

    public function getLinkDeleteButton()
    {
        return Html::a('<i class="fa fa-trash"></i> Hapus', url("user/delete/$this->id"),[
            'class' => 'btn btn-success btn-flat',
            'onclick'=>'return confirm("Yakin akan menghapus data?")'
        ]);
    }

    public function getLinkIndexButton()
    {
        return Html::a('<i class="fa fa-list"></i> Index', url('user/index'),[
            'class' => 'btn btn-success btn-flat'
        ]);
    }

    public function hasErrors()
    {
        if($this->errors!=false) {
            return $this->errors->any();
        }

        return false;
    }

    public function getErrors()
    {
        if($this->errors!=false) {
            return $this->errors->all();
        }

        return null;
    }
}
