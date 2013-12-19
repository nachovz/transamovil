<?php
/**
 * User: JGAB
 * Timestamp: 19/12/13 04:00 PM
 */

class LocationController extends BaseController {

    public function states(){

        $countryId=Input::get('country_id');

        if(null!=$countryId){

            $states=Estado::where('pais_id',$countryId)->get();

            if (Request::ajax()) {
                $result = new stdClass;
                $result->status = "success";

                foreach($states as $stateElement){
                    $temporal=new stdClass();

                    $temporal->name=$stateElement->nombre;
                    $temporal->id=$stateElement->id;

                    $result->states[]=$temporal;
                }

                return Response::json($result, 200);

            }else{
                return $states;
            }
        }
        $result = new stdClass;
        $result->status = "error";
        $result->status_code= "validation_error";

        return Response::json($result, 404);

    }

    public function cities(){

        $stateId=Input::get('state_id');

        if(null!=$stateId){

            $cities=Ciudad::where('estado_id',$stateId)->get();

            if (Request::ajax()) {
                $result = new stdClass;
                $result->status = "success";

                foreach($cities as $cityElement){
                    $temporal=new stdClass();

                    $temporal->name=$cityElement->nombre;
                    $temporal->id=$cityElement->id;

                    $result->cities[]=$temporal;
                }

                return Response::json($result, 200);

            }else{
                return $cities;
            }
        }
        $result = new stdClass;
        $result->status = "error";
        $result->status_code= "validation_error";

        return Response::json($result, 404);
    }

    public function townships(){

        $stateId=Input::get('state_id');

        if(null!=$stateId){

            $townships=Municipio::where('estado_id',$stateId)->get();

            if (Request::ajax()) {
                $result = new stdClass;
                $result->status = "success";

                foreach($townships as $townshipElement){
                    $temporal=new stdClass();

                    $temporal->name=$townshipElement->nombre;
                    $temporal->id=$townshipElement->id;

                    $result->townships[]=$temporal;
                }

                return Response::json($result, 200);

            }else{
                return $townships;
            }
        }
        $result = new stdClass;
        $result->status = "error";
        $result->status_code= "validation_error";

        return Response::json($result, 404);
    }


} 