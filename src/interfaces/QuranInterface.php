<?php

namespace Quran\Interfaces;

interface QuranInterface
{
    /**
     * API url
     */
    const URL = "http://staging.quran.com:3000/api/v3/?language=en";

    /**
     * Default Options, for listing them
     */
    const OPTIONS = [
        'recitations',
        'translations',
        'languages',
        'tafsirs',
    ];

    public function get(string $path, string $query = null);

    public function search(array $options = []);

    public function cache(string $arg = null);
}
