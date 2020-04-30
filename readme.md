# Proyecto base WikiPaises
Les dejo este repo para que puedan descargar el proyecto base para el ejemplo de WikiPaises que hicimos en la clase de repaso. El mismo a diferencia de un proyecto totalmente base de Laravel contiene las vistas necesarias para realizar la ejercitación.

## ¿Que fuimos haciendo?

1. Creamos la base de datos (desde Workbench)
2. Hicimos migrations de Continents

    ```php
    Schema::create('continents', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->timestamps();
    });
    ```

3. Hicimos migration de Countries

    ```php
    Schema::create('countries', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->bigInteger('population');
                $table->bigInteger('surface');
                **$table->unsignedBigInteger('continent_id')->default(1);**
                $table->string('flag');
                $table->timestamps();

                **$table->foreign('continent_id')->references('id')->on('continents');**
    });
    ```

4. Hicimos seed de Continents (ContinentsSeeder.php)

    ```php
    public function run()
        {
            DB::table('continents')->insert([
            	'name'=> 'America'
            ]);
            DB::table('continents')->insert([
            	'name'=> 'Europa'
            ]);
            DB::table('continents')->insert([
            	'name'=> 'Asia'
            ]);
            DB::table('continents')->insert([
            	'name'=> 'África'
            ]);
            DB::table('continents')->insert([
            	'name'=> 'Oceania'
            ]);

    }
    ```

5. Hicimos seed de Countries

    ```php
    public function run()
        {
            DB::table('countries')->insert([
                "name" => "Colombia",
                "population" => 1000000,
                "surface" => 1000000,
                "flag" => "default.png"
            ]);
            DB::table('countries')->insert([
                "name" => "Argentina",
                "population" => 1000000,
                "surface" => 1000000,
                "flag" => "default.png"
            ]);
            DB::table('countries')->insert([
                "name" => "Brasil",
                "population" => 1000000,
                "surface" => 1000000,
                "flag" => "default.png"
            ]);
            DB::table('countries')->insert([
                "name" => "Uruguay",
                "population" => 1000000,
                "surface" => 1000000,
                "flag" => "default.png"
            ]);
            DB::table('countries')->insert([
                "name" => "Venezuela",
                "population" => 1000000,
                "surface" => 1000000,
                "flag" => "default.png"
            ]);
        }
    ```

6. Corrimos la migracion `php artisan migrate`
7. Corrimos los seeders `php artisan db:seed`
8. Creamos los modelos para Continent y Country
9. Empezamos con rutas / controladores