<?php

namespace App;

/**
 * @property mixed id
 * @property mixed name
 * @property mixed nsfw
 * @property mixed description
 */
class Genre extends KModel
{
    // Table name
    const TABLE_NAME = 'genres';
    protected $table = self::TABLE_NAME;

    /**
     * Returns the Anime with the genre
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    function animes() {
        return $this->belongsToMany(Anime::class, AnimeGenre::TABLE_NAME, 'genre_id', 'anime_id');
    }
}