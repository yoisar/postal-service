<?php
namespace App\Http\Controllers;

use App\Models\ZipCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ZipCodeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request            
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\ZipCode $zipCode            
     * @return \Illuminate\Http\Response
     */
    public function show(ZipCode $zipCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\ZipCode $zipCode            
     * @return \Illuminate\Http\Response
     */
    public function edit(ZipCode $zipCode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request            
     * @param \App\Models\ZipCode $zipCode            
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ZipCode $zipCode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\ZipCode $zipCode            
     * @return \Illuminate\Http\Response
     */
    public function destroy(ZipCode $zipCode)
    {
        //
    }

    /**
     * Returns city information according zip code json format
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getZipCode($zip_code)
    {
        $zip_code_data = $this->getZipCodeData($zip_code);
        
        return Response::json($zip_code_data);
    }

    /**
     * Return array of city informatioon based on zip code
     *
     * @param integer $zip_code            
     * @return array
     */
    private function getZipCodeData($zip_code)
    {
        try {
            $zipCodesList = ZipCode::where('d_codigo', $zip_code)->get();
            if ($zipCodesList) {
                $settlements = array();
                //
                $locality = '';
                // federal entiy info
                $federal_entity_key = 0;
                $federal_entity_code = 0;
                $federal_entity_name = '';
                // municipality info
                $municipality_key = 0;
                $municipality_name = '';
                //
                $head_filled = false;
                //loop zip code list
                foreach ($zipCodesList as $code) {
                    //
                    if (! $head_filled) {
                        $locality = strtoupper($code['d_ciudad']);
                        //
                        $federal_entity_key = (int) $code['c_estado'];
                        $federal_entity_name = strtoupper($code['d_estado']);
                        $federal_entity_code = ! $code['c_cp'] ? null : $code['c_cp'];
                        //
                        $municipality_key = (int) $code['c_mnpio'];
                        $municipality_name = strtoupper($code['d_mnpio']);
                        $head_filled = true;
                    }
                    //
                    $settlement_key = (int) $code['id_asenta_cpcons'];
                    $settlement_name = strtoupper($code['d_asenta']);
                    $settlement_zone_type = strtoupper($code['d_zona']);
                    $settlement_type_name = $code['d_tipo_asenta'];
                    //
                    $settlements[] = array(
                        "key" => $settlement_key,
                        "name" => $settlement_name,
                        "zone_type" => $settlement_zone_type,
                        "settlement_type" => array(
                            "name" => $settlement_type_name
                        )
                    );
                }
                //
                $federal_entity = array(
                    "key" => $federal_entity_key,
                    "name" => $federal_entity_name,
                    "code" => $federal_entity_code
                );
                //
                $municipality = array(
                    "key" => $municipality_key,
                    "name" => $municipality_name
                );
                //
                $results = array(
                    "zip_code" => $zip_code,
                    "locality" => $locality,
                    "federal_entity" => $federal_entity,
                    "settlements" => $settlements,
                    "municipality" => $municipality
                );
            } else {
                $results = $this->errorResponse();
            }
        } catch (\Exception $e) {
            $results = $this->errorResponse($e->getMessage());
        }
        return $results;
    }

    /**
     * Return an error repsonse array
     *
     * @param string $error_msg            
     * @return array
     */
    private function errorResponse($error_msg = 'Not found')
    {
        return array(
            'error' => true,
            'error-msg' => $error_msg,
            404
        );
    }
}
