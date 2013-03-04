<?php

namespace Desarrolla2\Bundle\BlogBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * LinkRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class LinkRepository extends EntityRepository {

    /**
     * 
     * @param type $limit
     * @return array
     */
    public function get() {
        $query = $this->getQueryForGet();
        return $query->getResult();
    }

    /**
     * 
     * @return \Doctrine\ORM\Query
     */
    public function getQueryForGet() {
        $em = $this->getEntityManager();
        $query = $em->createQuery(
                ' SELECT l FROM BlogBundle:Link l ' .
                ' WHERE l.isPublished = 1 ' .
                ' ORDER BY l.createdAt DESC '
                )
        ;
        return $query;
    }
    
        /**
     * 
     * @param type $limit
     * @return array
     */
    public function getOrdered() {
        $query = $this->getQueryForGetOrdered();
        return $query->getResult();
    }

    /**
     * 
     * @return \Doctrine\ORM\Query
     */
    public function getQueryForGetOrdered() {
        $em = $this->getEntityManager();
        $query = $em->createQuery(
                ' SELECT l FROM BlogBundle:Link l ' .
                ' WHERE l.isPublished = 1 ' .
                ' ORDER BY l.name ASC '
                )
        ;
        return $query;
    }

}
