<?php

namespace sonrac\Auth\Tests\Seeds;

use sonrac\SimpleSeed\RollBackSeedWithCheckExists;

/**
 * Class ScopesTableSeeder
 */
class ScopesTableSeeder extends RollBackSeedWithCheckExists
{
    /**
     * @inheritDoc
     */
    protected function getTable(): string
    {
        return 'scopes';
    }

    /**
     * @inheritDoc
     */
    protected function getData(): array
    {
        return [
            [
                'scope' => 'default',
                'title' => 'Default scope',
                'description' => 'Default scope',
                'created_at' => time(),
            ],
            [
                'scope' => 'client',
                'title' => 'Default scope',
                'description' => 'Client scope',
                'created_at' => time(),
            ]
        ];
    }

    /**
     * @inheritDoc
     */
    protected function getWhereForRow($data): array
    {
        return ['scope' => $data['scope']];
    }

    /**
     * @inheritDoc
     */
    protected function checkDeleted($data): array
    {
        return $this->getWhereForRow($data);
    }
}