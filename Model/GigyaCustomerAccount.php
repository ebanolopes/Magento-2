<?php
/**
 * Copyright © 2016 X2i.
 */

namespace Gigya\GigyaIM\Model;

use Gigya\GigyaIM\Api\Data\GigyaCustomerAccountInterface;

/**
 * GigyaCustomerAccount
 *
 * @inheritdoc
 *
 * @author      vincentlemaire <info@x2i.fr>
 *
 */
class GigyaCustomerAccount implements GigyaCustomerAccountInterface
{
    /** @var  string */
    private $uid;

    /** @var  string */
    private $loginEmail;

    /**
     * @inheritdoc
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
    }

    /**
     * @inheritdoc
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @inheritdoc
     */
    function getLoginEmail()
    {
        return $this->loginEmail;
    }

    /**
     * @inheritdoc
     */
    function setLoginEmail($email)
    {
        $this->loginEmail = $email;
    }
}