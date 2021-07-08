<?php

declare(strict_types=1);

namespace AbstractFactory\Service;

use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Contract\RecordRepositoryInterface;
use AbstractFactory\Entity\Record;

class Service
{

    private $recordRepository;

    public function __construct(RepositoryFactoryInterface $repositoryFactory)
    {
        $this->recordRepository = $repositoryFactory->createRecordRepository();
    }

    public function Recording(): void {
        $record = new Record();
        $this->recordRepository->DBRecord($record);
    }

    public function QueryBuiler(): void {
        $record = new Record();
        $this->recordRepository->DBQueryBuiler($record);
    }

}