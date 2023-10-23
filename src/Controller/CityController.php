<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Model\WeatherModel;


class CityController extends AbstractController
{
    /**
     * @Route("/city-Weather/{id}", name="app_city_Weather", methods={"GET"})
     */
    public function show($id): Response
    {
        $cityWeather = WeatherModel::getWeatherByCityIndex($id);
        dump($cityWeather);

        return $this->render('city/city.html.twig', [
            'cityWeather' => $cityWeather,
        ]);
    }
}
