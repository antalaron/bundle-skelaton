<?php

/*
 * (c) Antal Áron <antalaron@antalaron.hu>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Antalaron\Bundle\DemoBundle\Repository\Doctrine;

use Antalaron\Bundle\DemoBundle\Model\Tag;
use Doctrine\ORM\EntityRepository;

/**
 * TagRepository.
 *
 * @author Antal Áron <antalaron@antalaron.hu>
 */
class TagRepository extends EntityRepository
{
    /**
     * Find all ordered by name.
     *
     * @return Tag[]
     */
    public function findAllOrderedByName()
    {
        return $this->createQueryBuilder()
            ->orderBy('name', 'ASC')
            ->getResult();
    }
}
