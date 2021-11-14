<?php

namespace App\Http\Controllers;

use App\Http\Requests\BeneficiaryStoreRequest;
use App\Http\Requests\BeneficiaryUpdateRequest;
use App\Http\Resources\BeneficiaryResource;
use App\Models\Beneficiary;
use App\Services\BeneficaryService;
use Illuminate\Http\Request;

class BeneficiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = BeneficaryService::all();
        return BeneficiaryResource::collection($q);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BeneficiaryStoreRequest $request)
    {
        $validated = $request->validated();

        $beneficiary = BeneficaryService::store($validated);

        return new BeneficiaryResource($beneficiary);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Beneficiary  $beneficiary
     * @return \Illuminate\Http\Response
     */
    public function show(Beneficiary $beneficiary)
    {
        return new BeneficiaryResource($beneficiary); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Beneficiary  $beneficiary
     * @return \Illuminate\Http\Response
     */
    public function update(BeneficiaryUpdateRequest $request, Beneficiary $beneficiary)
    {
        $validated = $request->validated();

        $beneficiary = BeneficaryService::update($validated, $beneficiary);

        return new BeneficiaryResource($beneficiary);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Beneficiary  $beneficiary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beneficiary $beneficiary)
    {
        $beneficiary->delete();

        return response(["message" => "Se elimino beneficiario con exito."], 200);
    }
}
