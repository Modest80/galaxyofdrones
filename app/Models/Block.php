<?php

namespace Koodilab\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Block.
 *
 * @property int                             $id
 * @property int                             $blocked_id
 * @property int                             $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Koodilab\Models\User           $blocked
 * @property \Koodilab\Models\User           $user
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\Koodilab\Models\Block newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Koodilab\Models\Block newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Koodilab\Models\Block query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Koodilab\Models\Block whereBlockedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Koodilab\Models\Block whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Koodilab\Models\Block whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Koodilab\Models\Block whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Koodilab\Models\Block whereUserId($value)
 * @mixin \Eloquent
 */
class Block extends Model
{
    use Relations\BelongsToUser;

    /**
     * {@inheritdoc}
     */
    protected $guarded = [
        'id', 'created_at', 'updated_at',
    ];

    /**
     * Get the blocked.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function blocked()
    {
        return $this->belongsTo(User::class, 'blocked_id');
    }
}
