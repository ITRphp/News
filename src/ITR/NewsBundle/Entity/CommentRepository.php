<?php

namespace ITR\NewsBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CommentRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommentRepository extends EntityRepository
{
    public function findCommentsByNewsOrderedByDate($news)
    {
        $q = $this
            ->createQueryBuilder('c')
            ->where('c.news = :news')
            ->setParameter('news', $news)
            ->orderBy('c.publication_date', 'DESC')
            ->getQuery();

        try {
            $comments = $q->getResult();

        } catch (NoResultException $e) {
            $message = sprintf(
                'Unable to find  comment identified by "%s".',
                $news
            );
            throw new UsernameNotFoundException($message, 0, $e);
        }

        return $comments;
    }
}