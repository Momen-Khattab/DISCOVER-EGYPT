<?php

namespace App\Http\Controllers;
use App\Models\Flight;
use App\Http\Resources\FlightResource;
use App\Models\Food;
use App\Http\Resources\FoodResource;
use App\Models\Room;
use App\Http\Resources\RoomResource;
use App\Models\Trip;
use App\Http\Resources\TripResource;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getRooms()
    {
        $rooms = Room::all();
        if($rooms->isEmpty()){
            return $this->returnError('لا توجد بيانات');
        }
        // Then map the rooms with RoomResource
        return $this->returnSuccess('تم جلب الغرف بنجاح', RoomResource::collection($rooms));
    }

    public function getFoods()
    {
        $foods = Food::all();
        if($foods->isEmpty()){
            return $this->returnError('لا توجد بيانات');
        }
        // Then map the rooms with RoomResource
        return $this->returnSuccess('تم جلب الأطعمة بنجاح', FoodResource::collection($foods));
    }

    public function getTrips()
    {
        $trips = Trip::all();
        if($trips->isEmpty()){
            return $this->returnError('لا توجد بيانات');
        }
        return $this->returnSuccess('تم جلب الرحلات بنجاح', TripResource::collection($trips));
    }

    public function getFlights()
    {
        $flights = Flight::all();
        if($flights->isEmpty()){
            return $this->returnError('لا توجد بيانات');
        }
        return $this->returnSuccess('تم جلب تذاكر الطيران بنجاح', FlightResource::collection($flights));
    }



}
