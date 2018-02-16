<?php declare(strict_types=1);

namespace Shopware\Api\Entity\Search;

use Shopware\Api\Entity\EntityCollection;
use Shopware\Context\Struct\TranslationContext;

class EntitySearchResult
{
    /**
     * @var int
     */
    protected $total;

    /**
     * @var EntityCollection
     */
    protected $entities;

    /**
     * @var AggregationResult
     */
    protected $aggregations;

    /**
     * @var Criteria
     */
    protected $criteria;

    /**
     * @var TranslationContext
     */
    protected $context;

    public function __construct(
        int $total,
        EntityCollection $entities,
        AggregationResult $aggregations,
        Criteria $criteria,
        TranslationContext $context
    ) {
        $this->total = $total;
        $this->entities = $entities;
        $this->aggregations = $aggregations;
        $this->criteria = $criteria;
        $this->context = $context;
    }
}