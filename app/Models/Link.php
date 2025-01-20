<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Link extends Model
{
    /** @use HasFactory<\Database\Factories\LinkFactory> */
    use HasFactory;

    protected $fillable = [
        'sort',
        'link',
        'name',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Move the link up or down.
     */
    private function move(int $to): void
    {
        $order = $this->sort;
        $newOrder = $order + $to;

        $user = $this->user;

        $swapWith = $user->links()->where('sort', '=', $newOrder)->first();

        $this->fill([
            'sort' => $newOrder,
        ])->save();

        $swapWith->fill([
            'sort' => $order,
        ])->save();
    }

    public function moveUp()
    {
        $this->move(-1);
    }

    public function moveDown()
    {
        $this->move(+1);
    }
}
