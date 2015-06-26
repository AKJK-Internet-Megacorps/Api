<?php

namespace tgbot\Api\Types;

/**
 * Class UserProfilePhotos
 * This object represent a user's profile pictures.
 *
 * @package tgbot\Api\Types
 */
class UserProfilePhotos
{
    /**
     * Total number of profile pictures the target user has
     *
     * @var Integer
     */
    protected $totalCount;

    /**
     * Requested profile pictures (in up to 4 sizes each).
     * Array of Array of \tgbot\Api\Types\PhotoSize
     *
     * @var array
     */
    protected $photos;
}