<?php

use App\Http\Controllers\AfterAneathController;
use App\Http\Controllers\AntAddmController;
use App\Http\Controllers\AntenAddmissionFollowUpController;
use App\Http\Controllers\AntFollowUpController;
use App\Http\Controllers\AnticoagulationChartController;
use App\Http\Controllers\AsRequiredAndPostOperativeDrugeController;
use App\Http\Controllers\BeforAneathController;
use App\Http\Controllers\ClinicalDischargeSummaryController;
use App\Http\Controllers\DeliveryAndPostnatalController;
use App\Http\Controllers\DischargeDrugsController;
use App\Http\Controllers\DoctorProgressNoteController;
use App\Http\Controllers\GynaeAdmissionController;
use App\Http\Controllers\GynaeClinicalDischargeSummaryController;
use App\Http\Controllers\GynaeClinicalExamController;
use App\Http\Controllers\GynaeCommentController;
use App\Http\Controllers\GynaeDugAndDoseController;
use App\Http\Controllers\GynaeFileController;
use App\Http\Controllers\GynaeInstructionController;
use App\Http\Controllers\GynaeInvestigationController;
use App\Http\Controllers\GynaeObservationSheetController;
use App\Http\Controllers\GynaeOperationSheetController;
use App\Http\Controllers\GynaePostOperativeFollowUpController;
use App\Http\Controllers\GynaePostOperativeInstructionController;
use App\Http\Controllers\GynaePreOpCheckListController;
use App\Http\Controllers\PatientFileController;
use App\Http\Controllers\HaematologyResultController;
use App\Http\Controllers\HouseOffInPatientFollowUpController;
use App\Http\Controllers\IcuAdmissionController;
use App\Http\Controllers\IcuFinalOutComeController;
use App\Http\Controllers\IcuFollowUpController;
use App\Http\Controllers\IcuNurseNoteController;
use App\Http\Controllers\IcuRequestController;
use App\Http\Controllers\IcuResponseController;
use App\Http\Controllers\IcuResusitionRecordController;
use App\Http\Controllers\IcuVitalSignController;
use App\Http\Controllers\InvestigationController;
use App\Http\Controllers\InvestigationRequestFormController;
use App\Http\Controllers\IVFluidController;
use App\Http\Controllers\LabourRecordController;
use App\Http\Controllers\LabourWardAddmiController;
use App\Http\Controllers\LabourWardInstController;
use App\Http\Controllers\LabRequestFormController;
use App\Http\Controllers\NeonatalAdmissionController;
use App\Http\Controllers\NeonatalDischargNoteController;
use App\Http\Controllers\NeonatalDoctorOrderController;
use App\Http\Controllers\NeonatalFeedingAndMedicationController;
use App\Http\Controllers\NeonatalFileController;
use App\Http\Controllers\NeonatalInvestigationController;
use App\Http\Controllers\NeonatalNurseNoteController;
use App\Http\Controllers\NeonatalOpservationsheetController;
use App\Http\Controllers\NeonatalProblemListController;
use App\Http\Controllers\NeonatalProgressNoteController;
use App\Http\Controllers\NeonatalRequestController;
use App\Http\Controllers\NeonatalResponseController;
use App\Http\Controllers\NeonatalUnitController;
use App\Http\Controllers\NewBornFirstDayExaminationController;
use App\Http\Controllers\NurseObservationNoteController;
use App\Http\Controllers\NurseProgressNoteController;
use App\Http\Controllers\NutritionAssessmentFormController;
use App\Http\Controllers\ObstHisoryController;
use App\Http\Controllers\OperationNotesController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RecordOfAttendanceAtTheTimeOfDeliveryController;
use App\Http\Controllers\RefreshRecordController;
use App\Http\Controllers\RegularDrugController;
use App\Http\Controllers\ReqularDrugsDosageController;
use App\Http\Controllers\StatisticFormController;
use App\Http\Controllers\TreatmentOrderSheetController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\USRequestController;
use App\Http\Controllers\USResponseController;
use App\Http\Controllers\VaginalExamFindingController;
use App\Http\Controllers\WhileAneathController;
use App\Models\AnticoagulationChart;
use App\Models\GynaeAdmission;
use App\Models\GynaeFile;
use App\Models\NeonatalFile;
use App\Models\uSRequest;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/user/login', [UserController::class, 'login']);
Route::post('/user/donat', [UserController::class, 'store']);
Route::post('/nutr/add', [NutritionAssessmentFormController::class, 'store']);

////////
// Route::group(['middleware'=>['auth:sanctum']],function(){

Route::post('/user/logout', [UserController::class, 'logout']);
Route::get('/user/f/{id}', [UserController::class, 'index']);
// Route::get('/patient',[PatientController::class,'index']);
Route::get('/patient/{unit}', [PatientController::class, 'show']);
///////
Route::get('/baby', [NeonatalFileController::class, 'index']);
Route::get('/patient', [PatientController::class, 'index']);
Route::get('/patient/f/{id}', [PatientController::class, 'find']);
Route::get('/file', [PatientFileController::class, 'index']);
Route::get('/file/unit/{unit}', [PatientFileController::class, 'unit']);
Route::get('/lab/f/{id}', [LabRequestFormController::class, 'index']);
Route::get('/us', [USRequestController::class, 'index']);
Route::get('/icu', [IcuAdmissionController::class, 'index']);
///////    
Route::post('/patient/add', [PatientController::class, 'store']);
Route::post('/antaddm/add', [AntAddmController::class, 'store']);
Route::post('/antenaddmission/add', [AntenAddmissionFollowUpController::class, 'store']);
Route::post('/antfollowup/add', [AntFollowUpController::class, 'store']);
Route::post('/antico/add', [AnticoagulationChartController::class, 'store']);
Route::post('/asrequired/add', [AsRequiredAndPostOperativeDrugeController::class, 'store']);
Route::post('/clinical/add', [ClinicalDischargeSummaryController::class, 'store']);
Route::post('/deliv/add', [DeliveryAndPostnatalController::class, 'store']);
Route::post('/disgdrug/add', [DischargeDrugsController::class, 'store']);
Route::post('/dprog/add', [DoctorProgressNoteController::class, 'store']);
Route::post('/hresult/add', [HaematologyResultController::class, 'store']);
Route::post('/hopfu/add', [HouseOffInPatientFollowUpController::class, 'store']);
Route::post('/invest/add', [InvestigationController::class, 'store']);
Route::post('/irf/add', [InvestigationRequestFormController::class, 'store']);
Route::post('/ivf/add', [IVFluidController::class, 'store']);
Route::post('/lr/add', [LabourRecordController::class, 'store']);
Route::post('/lwa/add', [LabourWardAddmiController::class, 'store']);
Route::post('/lwi/add', [LabourWardInstController::class, 'store']);
Route::post('/lab/add', [LabRequestFormController::class, 'store']);
Route::post('/newborn/add', [NewBornFirstDayExaminationController::class, 'store']);
Route::post('/nurseobserv/add', [NurseObservationNoteController::class, 'store']);
Route::post('/nurseprog/add', [NurseProgressNoteController::class, 'store']);
// Route::post('/nutr/add',[NutritionAssessmentFormController::class,'store']);
Route::post('/obs/add', [ObstHisoryController::class, 'store']);
Route::post('/operation/add', [OperationNotesController::class, 'store']);
Route::post('/recordatt/add', [RecordOfAttendanceAtTheTimeOfDeliveryController::class, 'store']);
Route::post('/regulardrug/add', [RegularDrugController::class, 'store']);
Route::post('/regulardrugdos/add', [ReqularDrugsDosageController::class, 'store']);
Route::post('/statistic/add', [StatisticFormController::class, 'store']);
Route::post('/treat/add', [TreatmentOrderSheetController::class, 'store']);
Route::post('/usrequest/add', [USRequestController::class, 'store']);
Route::post('/usresponse/add', [USResponseController::class, 'store']);
Route::post('/file/add', [PatientFileController::class, 'store']);
Route::post('/vagin/add', [VaginalExamFindingController::class, 'store']);
/////////
Route::get('/file/{unit}', [PatientFileController::class, 'unit']);
Route::get('/file/f/{file_id}', [PatientFileController::class, 'file_id']);
Route::post('/lab/update/{id}', [LabRequestFormController::class, 'update']);
Route::get('/file/patientid/{patientid}', [PatientFileController::class, 'patientid']);
Route::post('/antaddm/patientid/{patientid}', [AntAddmController::class, 'patientid']);
Route::post('/antenaddmission/patientid/{patientid}', [AntenAddmissionFollowUpController::class, 'patientid']);
Route::post('/antfollowup/patientid/{patientid}', [AntFollowUpController::class, 'patientid']);
Route::post('/antico/patientid/{patientid}', [AnticoagulationChart::class, 'patientid']);
Route::post('/asrequired/patientid/{patientid}', [AsRequiredAndPostOperativeDrugeController::class, 'patientid']);
Route::post('/clinical/patientid/{patientid}', [ClinicalDischargeSummaryController::class, 'patientid']);
Route::post('/deliv/patientid/{patientid}', [DeliveryAndPostnatalController::class, 'patientid']);
Route::post('/disgdrug/patientid/{patientid}', [DischargeDrugsController::class, 'patientid']);
Route::post('/dprog/patientid/{patientid}', [DoctorProgressNoteController::class, 'patientid']);
Route::post('/hresult/patientid/{patientid}', [HaematologyResultController::class, 'patientid']);
Route::post('/hopfu/patientid/{patientid}', [HouseOffInPatientFollowUpController::class, 'patientid']);
Route::post('/invest/patientid/{patientid}', [InvestigationController::class, 'patientid']);
Route::post('/irf/patientid/{patientid}', [InvestigationRequestFormController::class, 'patientid']);
Route::post('/ivf/patientid/{patientid}', [IVFluidController::class, 'patientid']);
Route::post('/lr/patientid/{patientid}', [LabourRecordController::class, 'patientid']);
Route::post('/lwa/patientid/{patientid}', [LabourWardAddmiController::class, 'patientid']);
Route::post('/lwi/patientid/{patientid}', [LabourWardInstController::class, 'patientid']);
Route::post('/newborn/patientid/{patientid}', [NewBornFirstDayExaminationController::class, 'patientid']);
Route::post('/nurseobserv/patientid/{patientid}', [NurseObservationNoteController::class, 'patientid']);
Route::post('/nurseprog/patientid/{patientid}', [NurseProgressNoteController::class, 'patientid']);
Route::post('/nutr/patientid/{patientid}', [NutritionAssessmentFormController::class, 'patientid']);
Route::post('/obs/patientid/{patientid}', [ObstHisoryController::class, 'patientid']);
Route::post('/operation/patientid/{patientid}', [OperationNotesController::class, 'patientid']);
Route::post('/recordatt/patientid/{patientid}', [RecordOfAttendanceAtTheTimeOfDeliveryController::class, 'patientid']);
Route::post('/regulardrug/patientid/{patientid}', [RegularDrugController::class, 'patientid']);
Route::post('/regulardrugdos/patientid/{patientid}', [ReqularDrugsDosageController::class, 'patientid']);
Route::post('/statistic/patientid/{patientid}', [StatisticFormController::class, 'patientid']);
Route::post('/treat/patientid/{patientid}', [TreatmentOrderSheetController::class, 'patientid']);
Route::post('/usrequest/patientid/{patientid}', [USRequestController::class, 'patientid']);
Route::post('/usresponse/patientid/{patientid}', [USResponseController::class, 'patientid']);
//
Route::get('/antaddm/fileid/{fileid}', [AntAddmController::class, 'fileid']);
Route::get('/antenaddmission/fileid/{fileid}', [AntenAddmissionFollowUpController::class, 'fileid']);
Route::get('/antfollowup/fileid/{fileid}', [AntFollowUpController::class, 'fileid']);
Route::get('/antico/fileid/{fileid}', [AnticoagulationChartController::class, 'fileid']);
Route::get('/asrequired/fileid/{fileid}', [AsRequiredAndPostOperativeDrugeController::class, 'fileid']);
Route::get('/clinical/fileid/{fileid}', [ClinicalDischargeSummaryController::class, 'fileid']);
Route::get('/deliv/f/{fileid}', [DeliveryAndPostnatalController::class, 'fileid']);
Route::get('/disgdrug/fileid/{fileid}', [DischargeDrugsController::class, 'fileid']);
Route::get('/dprog/fileid/{fileid}', [DoctorProgressNoteController::class, 'fileid']);
Route::get('/hresult/fileid/{fileid}', [HaematologyResultController::class, 'fileid']);
Route::get('/hopfu/fileid/{fileid}', [HouseOffInPatientFollowUpController::class, 'fileid']);
Route::get('/invest/fileid/{fileid}', [InvestigationController::class, 'fileid']);
Route::get('/irf/fileid/{fileid}', [InvestigationRequestFormController::class, 'fileid']);
Route::get('/ivf/fileid/{fileid}', [IVFluidController::class, 'fileid']);
Route::get('/lr/fileid/{fileid}', [LabourRecordController::class, 'fileid']);
Route::get('/lwa/fileid/{fileid}', [LabourWardAddmiController::class, 'fileid']);
Route::get('/lwi/fileid/{fileid}', [LabourWardInstController::class, 'fileid']);
Route::post('/lab/fileid/{fileid}', [LabRequestFormController::class, 'fileid']);
Route::get('/newborn/fileid/{fileid}', [NewBornFirstDayExaminationController::class, 'fileid']);
Route::get('/nurseobserv/fileid/{fileid}', [NurseObservationNoteController::class, 'fileid']);
Route::get('/nurseprog/fileid/{fileid}', [NurseProgressNoteController::class, 'fileid']);
Route::get('/nutr/fileid/{fileid}', [NutritionAssessmentFormController::class, 'fileid']);
Route::post('/obs/fileid/{fileid}', [ObstHisoryController::class, 'fileid']);
Route::get('/operation/f/{fileid}', [OperationNotesController::class, 'fileid']);
Route::get('/recordatt/fileid/{fileid}', [RecordOfAttendanceAtTheTimeOfDeliveryController::class, 'file_id']);
Route::get('/regulardrug/fileid/{fileid}', [RegularDrugController::class, 'fileid']);
Route::get('/regulardrugdos/fileid/{fileid}', [ReqularDrugsDosageController::class, 'fileid']);
Route::get('/statistic/fileid/{fileid}', [StatisticFormController::class, 'fileid']);
Route::get('/treat/fileid/{fileid}', [TreatmentOrderSheetController::class, 'fileid']);
Route::get('/usrequest/f/{fileid}', [USRequestController::class, 'fileid']);
Route::get('/usresponse/f/{fileid}', [USResponseController::class, 'fileid']);
Route::get('/usresponse/request_id', [USResponseController::class, 'requestid']);
// Route::get('/vagin/{fileid}', [VaginalExamFindingController, 'fileid']);
//new routess
Route::post('/gyn/add', [GynaeFileController::class, 'store']);
Route::post('/gynadm/add', [GynaeAdmissionController::class, 'store']);
Route::post('/gynanae/add', [GynaeAnaesthesiaListController::class, 'store']);
Route::post('/gynanaerecord/add', [GynaeAnaesthesiaRecordController::class, 'store']);
Route::post('/gynclinicdis/add', [GynaeClinicalDischargeSummaryController::class, 'store']);
Route::post('/gynclincexam/add', [GynaeClinicalExamController::class, 'store']);
Route::post('/gyncomment/add', [GynaeCommentController::class, 'store']);
Route::post('/gyndrug/add', [GynaeDugAndDoseController::class, 'store']);
Route::post('/gynfile/add', [GynaeFileController::class, 'store']);
Route::post('/gyninstr/add', [GynaeInstructionController::class, 'store']);
Route::post('/gyninv/add', [GynaeInvestigationController::class, 'store']);
Route::post('/gynobse/add', [GynaeObservationSheetController::class, 'store']);
Route::post('/gynoper/add', [GynaeOperationSheetController::class, 'store']);
Route::post('/gynpost/add', [GynaePostOperativeFollowUpController::class, 'store']);
Route::post('/gynpostinst/add', [GynaePostOperativeInstructionController::class, 'store']);
Route::post('/gynpre/add', [GynaePreOpCheckListController::class, 'store']);
Route::post('/icuad/add/{id}', [IcuAdmissionController::class, 'store']);
Route::post('/icufinal/add', [IcuFinalOutComeController::class, 'store']);
Route::post('/icufollow/add', [IcuFollowUpController::class, 'store']);
Route::post('/icunurse/add', [IcuNurseNoteController::class, 'store']);
Route::post('/icureq/add', [IcuRequestController::class, 'store']);
Route::post('/icuresp/add', [IcuResponseController::class, 'store']);
Route::post('/icurescu/add', [IcuResusitionRecordController::class, 'store']);
Route::post('/icuvital/add', [IcuVitalSignController::class, 'store']);
Route::post('/neo/add', [NeonatalAdmissionController::class, 'store']);
Route::post('/neodis/add', [NeonatalDischargNoteController::class, 'store']);
Route::post('/neodoctor/add', [NeonatalDoctorOrderController::class, 'store']);
Route::post('/neofeed/add', [NeonatalFeedingAndMedicationController::class, 'store']);
Route::post('/neofile/add', [NeonatalFileController::class, 'store']);
Route::post('/neoinv/add', [NeonatalInvestigationController::class, 'store']);
Route::post('/neonurse/add', [NeonatalNurseNoteController::class, 'store']);
Route::post('/neoops/add', [NeonatalOpservationsheetController::class, 'store']);
Route::post('/neoprob/add', [NeonatalProblemListController::class, 'store']);
Route::post('/neoprog/add', [NeonatalProgressNoteController::class, 'store']);
Route::post('/neorequ/add', [NeonatalRequestController::class, 'store']);
Route::post('/neoresp/add', [NeonatalResponseController::class, 'store']);
Route::post('/neounit/add', [NeonatalUnitController::class, 'store']);
Route::get('/neounit', [NeonatalUnitController::class, 'index']);

///

Route::get('/gyn/{patientid}', [GynaeFileController::class, 'patientid']);
Route::post('/gynadm/{patientid}', [GynaeAdmissionController::class, 'patientid']);
Route::post('/gynanae/{patientid}', [GynaeAnaesthesiaListController::class, 'patientid']);
Route::post('/gynanaerecord/{patientid}', [GynaeAnaesthesiaRecordController::class, 'patientid']);
Route::post('/gynclinicdis/{patientid}', [GynaeClinicalDischargeSummaryController::class, 'patientid']);
Route::post('/gynclincexam/{patientid}', [GynaeClinicalExamController::class, 'patientid']);
Route::post('/gyncomment/{patientid}', [GynaeCommentController::class, 'patientid']);
Route::post('/gyndrug/{patientid}', [GynaeDugAndDoseController::class, 'patientid']);
Route::post('/gynfile/{patientid}', [GynaeFileController::class, 'patientid']);
Route::post('/gyninstr/{patientid}', [GynaeInstructionController::class, 'patientid']);
Route::post('/gyninv/{patientid}', [GynaeInvestigationController::class, 'patientid']);
Route::post('/gynobse/{patientid}', [GynaeObservationSheetController::class, 'patientid']);
Route::post('/gynoper/{patientid}', [GynaeOperationSheetController::class, 'patientid']);
Route::post('/gynpost/{patientid}', [GynaePostOperativeFollowUpController::class, 'patientid']);
Route::post('/gynpostinst/{patientid}', [GynaePostOperativeInstructionController::class, 'patientid']);
Route::post('/gynpre/{patientid}', [GynaePreOpCheckListController::class, 'patientid']);
Route::post('/icu/{patientid}', [IcuAdmissionController::class, 'patientid']);
Route::post('/icufinal/{patientid}', [IcuFinalOutComeController::class, 'patientid']);
Route::post('/icufollow/{patientid}', [IcuFollowUpController::class, 'patientid']);
Route::post('/icureq/{patientid}', [IcuRequestController::class, 'patientid']);
Route::post('/icuresp/{patientid}', [IcuResponseController::class, 'patientid']);
Route::post('/neo/{patientid}', [NeonatalAdmissionController::class, 'patientid']);
Route::post('/neodis/{patientid}', [NeonatalDischargNoteController::class, 'patientid']);
Route::post('/neodoctor/{patientid}', [NeonatalDoctorOrderController::class, 'patientid']);
Route::post('/neofeed/{patientid}', [NeonatalFeedingAndMedicationController::class, 'patientid']);
Route::post('/neofile/{patientid}', [NeonatalFileController::class, 'patientid']);
Route::post('/neoinv/{patientid}', [NeonatalInvestigationController::class, 'patientid']);
Route::post('/neonurse/{patientid}', [NeonatalNurseNoteController::class, 'patientid']);
Route::post('/neoops/{patientid}', [NeonatalOpservationsheetController::class, 'patientid']);
Route::post('/neoprob/{patientid}', [NeonatalProblemListController::class, 'patientid']);
Route::post('/neoprog/{patientid}', [NeonatalProgressNoteController::class, 'patientid']);
Route::post('/neorequ/{patientid}', [NeonatalRequestController::class, 'patientid']);
Route::post('/neoresp/{patientid}', [NeonatalResponseController::class, 'patientid']);
Route::post('/neounit/{patientid}', [NeonatalUnitController::class, 'patientid']);
///
Route::get('/gyn/{unit}', [PatientFileController::class, 'unit']);
Route::get('/gyn/fileid/{fileid}', [GynaeAdmissionController::class, 'fileid']);
Route::get('/gynanae/{fileid}', [GynaeAnaesthesiaListController::class, 'fileid']);
Route::get('/gynanaerecord/fileid/{fileid}', [GynaeAnaesthesiaRecordController::class, 'fileid']);
Route::get('/gynclinicdis/fileid/{fileid}', [GynaeClinicalDischargeSummaryController::class, 'fileid']);
Route::get('/gynclincexam/fileid/{fileid}', [GynaeClinicalExamController::class, 'fileid']);
Route::get('/gyncomment/fileid/{fileid}', [GynaeCommentController::class, 'fileid']);
Route::get('/gyndrug/fileid/{fileid}', [GynaeDugAndDoseController::class, 'fileid']);
Route::get('/gynfile/fileid/{fileid}', [GynaeFileController::class, 'fileid']);
Route::get('/gyninstr/fileid/{fileid}', [GynaeInstructionController::class, 'fileid']);
Route::get('/gyninv/fileid/{fileid}', [GynaeInvestigationController::class, 'fileid']);
Route::post('/gynobse/{fileid}', [GynaeObservationSheetController::class, 'fileid']);
Route::get('/gynoper/{fileid}', [GynaeOperationSheetController::class, 'fileid']);
Route::get('/gynpost/fileid/{fileid}', [GynaePostOperativeFollowUpController::class, 'fileid']);
Route::get('/gynpostinst/fileid/{fileid}', [GynaePostOperativeInstructionController::class, 'fileid']);
Route::get('/gynpre/fileid/{fileid}', [GynaePreOpCheckListController::class, 'fileid']);
Route::get('/icu/{fileid}', [IcuAdmissionController::class, 'fileid']);
Route::get('/icufinal/{fileid}', [IcuFinalOutComeController::class, 'fileid']);
Route::get('/icufollow/f/{fileid}', [IcuFollowUpController::class, 'fileid']);
Route::get('/icunurse/f/{fileid}', [IcuNurseNoteController::class, 'fileid']);
Route::get('/icureq/f/{fileid}', [IcuRequestController::class, 'fileid']);
// Route::get('/icuresp/fileid/{fileid}', [IcuResponseController::class, 'fileid']);
Route::get('/icurescu/f/{fileid}', [IcuResusitionRecordController::class, 'fileid']);
Route::get('/icuvital/f/{fileid}', [IcuVitalSignController::class, 'fileid']);
Route::get('/neo/f/{fileid}', [NeonatalAdmissionController::class, 'fileid']);
Route::get('/neodis/f/{fileid}', [NeonatalDischargNoteController::class, 'fileid']);
Route::get('/neodoctor/f/{fileid}', [NeonatalDoctorOrderController::class, 'fileid']);
Route::get('/neofeed/f/{fileid}', [NeonatalFeedingAndMedicationController::class, 'fileid']);
Route::get('/neofile/f/{fileid}', [NeonatalFileController::class, 'fileid']);
Route::get('/neoinv/f/{fileid}', [NeonatalInvestigationController::class, 'fileid']);
Route::get('/neonurse/f/{fileid}', [NeonatalNurseNoteController::class, 'fileid']);
Route::get('/neoops/f/{fileid}', [NeonatalOpservationsheetController::class, 'fileid']);
Route::get('/neoprob/f/{fileid}', [NeonatalProblemListController::class, 'fileid']);
Route::get('/neoprog/f/{fileid}', [NeonatalProgressNoteController::class, 'fileid']);
Route::get('/neounit/f/{fileid}', [NeonatalUnitController::class, 'fileid']);

Route::post('/neorequ/{fileid}', [NeonatalRequestController::class, 'fileid']);
Route::post('/neoresp/{fileid}', [NeonatalResponseController::class, 'fileid']);
Route::post('/neounit/{fileid}', [NeonatalUnitController::class, 'fileid']);
//requests
Route::get('/icur/{status}', [IcuRequestController::class, 'status']);
Route::get('/usr/{status}', [USRequestController::class, 'status']);
Route::get('/neor/{status}', [NeonatalRequestController::class, 'status']);
//response
Route::get('/icurf/{findbyrequest}', [IcuResponseController::class, 'findbyrequest']);
Route::get('/usrf/{findbyrequest}', [USResponseController::class, 'findbyrequest']);
Route::get('/neorf/{findbyrequest}', [NeonatalResponseController::class, 'findbyrequest']);

Route::get('/beforana/f/{fileid}', [BeforAneathController::class, 'fileid']);
Route::get('/whileana/f/{fileid}', [WhileAneathController::class, 'fileid']);
Route::get('/afterana/f/{fileid}', [AfterAneathController::class, 'fileid']);
Route::get('/refresh/f/{fileid}', [RefreshRecordController::class, 'fileid']);

Route::post('/beforana/add', [BeforAneathController::class, 'store']);
Route::post('/whileana/add', [WhileAneathController::class, 'store']);
Route::post('/afterana/add', [AfterAneathController::class, 'store']);
Route::post('/refresh/add', [RefreshRecordController::class, 'store']);

// });


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
