<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Contact
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $email
 * @property string $phone_number
 * @property string $first_name
 * @property string $last_name
 * @property string $school_name
 * @property string $school_address
 * @property int $number_of_students_option
 * @property int $school_sector_option
 * @property int $service_type_option
 * @property string $optional_message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereNumberOfStudentsOption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereOptionalMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereSchoolAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereSchoolName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereSchoolSectorOption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereServiceTypeOption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereUpdatedAt($value)
 */
class Contact extends Model
{
    protected $fillable = ['email',
        'phone_number',
        'first_name',
        'last_name',
        'school_name',
        'school_address',
        'number_of_students_option',
        'school_sector_option',
        'service_type_option',
        'optional_message'];
}
