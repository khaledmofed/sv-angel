<?php

namespace App\Traits;

trait Translatable
{
    public function translate(string $field, string $locale = null): ?string
    {
        $locale = $locale ?? app()->getLocale();

        if ($locale === 'en') {
            return $this->{$field};
        }

        $translations = $this->translations;
        if (is_string($translations)) {
            $translations = json_decode($translations, true) ?? [];
        }
        $translations = $translations ?? [];

        return ($translations[$locale][$field] ?? null) ?: $this->{$field};
    }
}
