<?php

namespace App\Http\Controllers;

use App\Application\Contracts\IReportApplication;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\ReportResource;
use App\Http\Requests\StoreUpdateReportRequest;

class ReportController extends Controller
{

    private IReportApplication $reportApplication; 

    public function __construct(IReportApplication $reportApplication) {
        $this->reportApplication = $reportApplication;
    }

    public function index() {
        return $this->reportApplication->fetchAll();
    }

    // public function show(string $id) {

    //     $report = $this->repository->findOrFail($id);

    //     return new ReportResource($report);
        
    // }
    
    // public function store(StoreUpdateReportRequest $request) {

    //     $data = $request->validated();

    //     $report = $this->repository->create($data);
    
    //     return new ReportResource($report);

    // }

    // public function update(StoreUpdateReportRequest $request, string $id) {

    //     $report = $this->repository->findOrFail($id);

    //     $data = $request->validated();

    //     $report->update($data);

    //     return new ReportResource($report);
        
    // }

    // public function destroy(string $id) {
        
    //     $this->repository->findOrFail($id)->delete();
        
    //     return response()->json([], Response::HTTP_NO_CONTENT);
    // }

}
