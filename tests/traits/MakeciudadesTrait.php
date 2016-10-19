<?php

use Faker\Factory as Faker;
use App\Models\ciudades;
use App\Repositories\ciudadesRepository;

trait MakeciudadesTrait
{
    /**
     * Create fake instance of ciudades and save it in database
     *
     * @param array $ciudadesFields
     * @return ciudades
     */
    public function makeciudades($ciudadesFields = [])
    {
        /** @var ciudadesRepository $ciudadesRepo */
        $ciudadesRepo = App::make(ciudadesRepository::class);
        $theme = $this->fakeciudadesData($ciudadesFields);
        return $ciudadesRepo->create($theme);
    }

    /**
     * Get fake instance of ciudades
     *
     * @param array $ciudadesFields
     * @return ciudades
     */
    public function fakeciudades($ciudadesFields = [])
    {
        return new ciudades($this->fakeciudadesData($ciudadesFields));
    }

    /**
     * Get fake data of ciudades
     *
     * @param array $postFields
     * @return array
     */
    public function fakeciudadesData($ciudadesFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'ciudad' => $fake->word,
            'depto_id' => $fake->randomDigitNotNull,
            'created_at' => $fake->dateTime('now'),
            'updated_at' => $fake->datetime('now')
        ], $ciudadesFields);
    }
}
