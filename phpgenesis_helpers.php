<?php
/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Right Reserved.
 */

if (!function_exists('phpgenesis_vendor_dir')) {
    function phpgenesis_vendor_dir(?string $path = null): string
    {
        if ($path == null) {
            return __DIR__ . '/../';
        }

        return __DIR__ . '/../' . $path;
    }
}

if (!function_exists('phpgenesis_common_src')) {
    function phpgenesis_common_src(?string $path = null): string
    {
        if ($path == null) {
            return __DIR__ . '/src';
        }

        return __DIR__ . '/src/' . $path;
    }
}
