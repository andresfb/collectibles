<?php

namespace App\Console\Commands;

use App\Factories\TypeCommandFactory;
use App\Models\Type;
use Exception;
use Illuminate\Console\Command;
use function Laravel\Prompts\select;

class CollectibleCreateCommand extends Command
{
    protected $signature = 'collectible:create';

    protected $description = 'Create a new collectible.';

    public function handle(): int
    {
        try {
            $this->warn("\nCreate a new Collectible...\n");

            $types = Type::getListArray();
            $type = select(
                label:  'What type?',
                options: $types,
                default: 1,
            );

            $library = TypeCommandFactory::getCommand($type);
            $library->create($type);

            $this->newLine(2);
            $this->info("Collectible created successfully");
            $this->info("Done");

            return 0;
        } catch (Exception $e) {
            $this->newLine();
            $this->warn("Error found");
            $this->error($e->getMessage());
            $this->newLine();

            return 1;
        }
    }
}
