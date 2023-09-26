<?php
/**
 * This file is part of the ua-normalizer package.
 *
 * Copyright (c) 2015-2023, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace UaNormalizer\Normalizer;

use function preg_replace;

/**
 * User Agent Normalizer - removes leading and trailing spaces
 */
final class Spaces implements NormalizerInterface
{
    /** @throws void */
    public function normalize(string $userAgent): string | null
    {
        return preg_replace('/\s+/', ' ', $userAgent);
    }
}