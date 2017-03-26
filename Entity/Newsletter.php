<?php

namespace Miky\Bundle\NewsletterBundle\Entity;

/**
 * Newsletter
 */
class Newsletter
{
    /**
     * @var int
     */
    private $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
