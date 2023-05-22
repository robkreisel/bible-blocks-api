<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Book
 *
 * @property int $id
 * @property string $name
 * @property string $symbol
 * @property string $testament
 * @property string $category
 * @property string $hebrew_category
 * @property string $year
 * @property string $era
 * @property string $author
 * @property int $order
 * @property int $hebrew_order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Book newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Book newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Book query()
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereEra($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereSymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereTestament($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereYear($value)
 * @mixin \Eloquent
 * @method static \Database\Factories\BookFactory factory(...$parameters)
 */
class Book extends Model
{
    use HasFactory;

    protected $guarded = [];
}
