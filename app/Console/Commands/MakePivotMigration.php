<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Illuminate\Filesystem\Filesystem;

class MakePivotMigration extends Command
{
    /**
     * Execute the console command.
     *
     * # Use default naming (creates role_user table)
     * php artisan make:pivot User Role
     *
     * # Specify a custom table name
     * php artisan make:pivot User Role user_role_assignments
     */
    protected $signature = 'make:pivot {firstModel} {secondModel} {tableName?}';
    protected $description = 'Create a pivot table migration for two models';

    public function handle(Filesystem $files)
    {
        $first = $this->argument('firstModel');
        $second = $this->argument('secondModel');
        $tableName = $this->argument('tableName');

        // Convert model names to table names (singular snake_case)
        $firstTable = Str::snake(Str::singular($first));
        $secondTable = Str::snake(Str::singular($second));

        if ($tableName) {
            $pivotTable = $tableName;
        } else {
            $tables = [$firstTable, $secondTable];
            sort($tables);
            $pivotTable = $tables[0] . '_' . $tables[1];
        }

        $migrationName = 'create_' . $pivotTable . '_table';
        $timestamp = date('Y_m_d_His');
        $fileName = $timestamp . '_' . $migrationName . '.php';
        $path = database_path('migrations/' . $fileName);

        // Generate the migration content
        $content = $this->generateMigrationContent($pivotTable, $firstTable, $secondTable);

        // Write the file
        $files->put($path, $content);

        $this->info("Migration [{$fileName}] created successfully.");
    }

    protected function generateMigrationContent($pivotTable, $firstTable, $secondTable)
    {
        return <<<PHP
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('{$pivotTable}', function (Blueprint \$table) {
            \$table->id();
            \$table->foreignId('{$firstTable}_id')->constrained()->cascadeOnDelete();
            \$table->foreignId('{$secondTable}_id')->constrained()->cascadeOnDelete();
            \$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('{$pivotTable}');
    }
};

PHP;
    }
}
