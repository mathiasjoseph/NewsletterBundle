<?php

namespace Miky\Bundle\NewsletterBundle\Entity;

/**
 * NewsletterSubscriber
 */
class NewsletterSubscriber
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
