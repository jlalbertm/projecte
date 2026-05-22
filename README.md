# projecte
Projecte intermodular 2 de Desenvolupament d'aplicacions WEB

Anem a crear un CRUD (create, read, update i delete) dins d'un projecte de laravel por poder gestionar les programacions didàctiques de L'IES Sant Vicent Ferrer d'Algemesí.

**Creació de les BBDD**

Per crear les taules fam us del migrate de laravel, per tant entarem a la consola de forma recursiva
docker exec -it laravel-myapp-1 bash

i llançarem :
```
php artisan make:migration create_ciclos_formativos
php artisan make:migration create_programaciones_didacticas
```

i procedirem a preparar quins camps deu crear en la migració

```
Schema::create('ciclos_formativos', function (Blueprint $table) {
            $table->id(); //per defecte ja és PK e autoincremental
            $table->string('nombre', 150);
            $table->string('familia_profesional', 100);
            $table->string('grado', 50);
            $table->string('modalidad', 80);
            $table->string('decreto_referencia', 250);
            $table->boolean('activo');
            $table->timestamps();
        });

Schema::create('programaciones_didacticas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo',100);
            $table->string('modulo',100);
            $table->foreignId('ciclo_formativo_id')
                ->constrained('ciclos_formativos'); //FK
            $table->string('curso_academico', 50);
            $table->string('docente',200);
            $table->integer('horas_totales');
            $table->text('objetivos');
            $table->text('contenidos');
            $table->text('metodologia');
            $table->text('criterios_evaluacion');
            $table->text('instrumentos_evaluacion');
            $table->text('recursos_materiales');
            $table->text('atencion_diversidad');
            $table->text('observaciones')->nullable(); //crec que es millor que puga ser NULL
            $table->timestamps();
        });
```
per a que es creen els camps llançarem
```
php artisan migrate
```

Ara anem a crear el model:
```
php artisan make:model CicloFormativo -cr
php artisan make:model ProgramacionDidactica -cr
```

Per instal·lar les dependecies de PHP:
```
npm install
npm install -g npm@11.15.0
```

instal·lar bootstrap
```
composer require laravel/ui
php artisan ui bootstrap 
npm install sass --save-dev   
```
