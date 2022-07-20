<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class TaskFilter extends QueryFilter
{
    /**
     * @param string $status
     */
    public function author_id(string $author_id)
    {
        $this->builder->where('author_id', strtolower($author_id));
    }

    // /**
    //  * @param string $title
    //  */
    // public function title(string $title)
    // {
    //     $words = array_filter(explode(' ', $title));

    //     $this->builder->where(function (Builder $query) use ($words) {
    //         foreach ($words as $word) {
    //             $query->where('post_title', 'like', "%$word%");
    //         }
    //     });
    // }
}