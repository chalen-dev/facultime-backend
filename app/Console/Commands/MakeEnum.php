<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('make:enum {name : The name of the enum} {--backed= : Type of backed enum (int|string)}')]
#[Description('Creates a new enum class')]
class MakeEnum extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $backed = $this->option('backed');

        // Build the full class path
        $className = basename(str_replace('\\', '/', $name));
        $namespace = 'App\\Enums';
        $subDir = dirname(str_replace('\\', '/', $name));
        if ($subDir !== '.') {
            $namespace .= '\\' . str_replace('/', '\\', $subDir);
        }

        $path = app_path("Enums/{$subDir}/{$className}.php");
        $path = str_replace('\\', '/', $path);

        // Ensure directory exists
        if (! is_dir(dirname($path))) {
            mkdir(dirname($path), 0755, true);
        }

        // Prepare stub content
        $stub = $this->getStub($backed);

        // Replace placeholders
        $content = str_replace(
            ['{{ namespace }}', '{{ class }}'],
            [$namespace, $className],
            $stub
        );

        // Write file
        if (file_exists($path)) {
            $this->error("Enum {$name} already exists!");
            return 1;
        }

        file_put_contents($path, $content);
        $this->info("Enum created: {$path}");
    }

    protected function getStub($backed = null)
    {
        if ($backed === 'int') {
            return <<<STUB
                <?php

                namespace {{ namespace }};

                enum {{ class }}: int
                {
                    //
                }
            STUB;
            }

            if ($backed === 'string') {
                return <<<STUB
                    <?php

                    namespace {{ namespace }};

                    enum {{ class }}: string
                    {
                        //
                    }
                STUB;
            }

    return <<<STUB
        <?php

        namespace {{ namespace }};

        enum {{ class }}
        {
            //
        }
    STUB;
    }
}
