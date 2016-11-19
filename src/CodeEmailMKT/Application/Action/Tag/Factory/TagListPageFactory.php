<?php

namespace CodeEmailMKT\Application\Action\Tag\Factory;

use Interop\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;
use CodeEmailMKT\Domain\Persistence\CustomerRepositoryInterface;
use CodeEmailMKT\Application\Action\Customer\CustomerListPageAction;


class TagListPageFactory
{
    public function __invoke(ContainerInterface $container) :CustomerListPageAction
    {
        $template = $container->get(TemplateRendererInterface::class);
        $repository = $container->get(CustomerRepositoryInterface::class);
        return new TagListPageAction($repository,$template);
    }
}
