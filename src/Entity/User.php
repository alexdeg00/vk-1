<?php
/**
 * SocialConnect project
 * @author: Patsura Dmitry @ovr <talk@dmtry.me>
 */

namespace SocialConnect\Vk\Entity;

/**
 * @link http://vk.com/dev/fields
 *
 * Class User
 * @package SocialConnect\Vk\Entity
 */
class User extends \SocialConnect\Common\Entity\User
{
    /**
     * @var bool
     */
    public $deactivated = false;

    /**
     * @var bool
     */
    public $hidden = false;

    /**
     * @var boolean
     */
    protected $online;

    /**
     * @return mixed
     * @throws \SocialConnect\Vk\Exception\Unsupported
     */
    public function isOnline()
    {
        if (is_null($this->online)) {
            throw new \SocialConnect\Vk\Exception\Unsupported('Cant fetch $online field by client');
        }

        return $this->online;
    }

    /**
     * @param $value
     */
    public function setOnline($value)
    {
        $this->online = $value;
    }
}
