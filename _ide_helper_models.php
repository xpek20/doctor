<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Appointment
 *
 * @property int $id
 * @property string $doctor
 * @property string $operation_type
 * @property string $date
 * @property string $room
 * @property string $assistant
 * @property string $anesthesiologist
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Doctor $doctor_rel
 * @property-read \App\Models\Operation $operation_rel
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereAnesthesiologist($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereAssistant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereDoctor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereOperationType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereRoom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereUpdatedAt($value)
 */
	class Appointment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Doctor
 *
 * @property int $id
 * @property string $onomateponimo
 * @property string $email
 * @property int $kinito
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Appointment[] $children
 * @property-read int|null $children_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereKinito($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereOnomateponimo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereUpdatedAt($value)
 */
	class Doctor extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Operation
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Appointment[] $children
 * @property-read int|null $children_count
 * @method static \Illuminate\Database\Eloquent\Builder|Operation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Operation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Operation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Operation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Operation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Operation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Operation whereUpdatedAt($value)
 */
	class Operation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Surgery
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Surgery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Surgery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Surgery query()
 */
	class Surgery extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
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
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

