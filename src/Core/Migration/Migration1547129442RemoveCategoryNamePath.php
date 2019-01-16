<?php declare(strict_types=1);

namespace Shopware\Core\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1547129442RemoveCategoryNamePath extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1547129442;
    }

    public function update(Connection $connection): void
    {
        // implement update
    }

    public function updateDestructive(Connection $connection): void
    {
        $connection->exec('
            ALTER TABLE `category_translation`
            DROP COLUMN `path_names`
        ');
    }
}
