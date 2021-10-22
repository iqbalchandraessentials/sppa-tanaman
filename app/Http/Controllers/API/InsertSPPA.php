<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\SPPA\AdditionalData;
use App\Models\SPPA\Consumer;
use App\Models\SPPA\Customer;
use App\Models\SPPA\InformationGarden;
use App\Models\SPPA\Location;
use App\Models\SPPA\Master;
use App\Models\SPPA\MasterRate;
use App\Models\SPPA\Phone;
use App\Models\SPPA\Product;
use App\Models\SPPA\Risk;
use App\Models\SPPA\RiskArea;
use Illuminate\Http\Request;

class InsertSPPA extends Controller
{
   public function insert (Request $request){
    try {
       
        // $request->validate([
        //     'name'=>' required',
        //     'address'=>' required',
        //     'loss_record' => 'nullable|string',
        //     's_date' => 'required|string',
        //     'e_date' => 'required|string',
        //     'rate_code' => 'required|string|exists:risks,rate_code',
        //     'tsi' => 'required|integer',
        //     'code_pos' => 'nullable|integer',
        //     'land_area' => 'nullable|integer',
        //     'hectares' => 'nullable|integer',
        //     'age' => 'nullable|integer',
        //     'distance' => 'nullable|integer',
        //     'fuel' => 'nullable|integer|in:0,1',
        //     'identity' => 'string|unique:consumers',
        //     'npwp' => 'string|unique:consumers',
        //     'customer_type' => 'integer|in:0,1',
        // ]);

        $CodeProduct = Product::where('id','1')->first();

        $trx = $CodeProduct['code_product'].'-' . mt_rand(000000, 999999);

        // Master::create([
        //     'products_id' => "1",
        //     'customers_id' => $trx,
        // ]);

        // Customer::create([
        //     'name' => $request->name,
        //     'address' => $request->address,               
        //     'tsi' => $request->tsi,
        //     'loss_record' => $request->loss_record,
        //     's_date' => $request->s_date,
        //     'e_date' => $request->e_date, 
        //     'customers_id' => $trx,
        // ]);

        // Location::create([
        //     'street' => $request->street,
        //     'city' => $request->city,
        //     'province' => $request->province,
        //     'code_pos' => $request->code_pos,
        //     'customers_id' => $trx,
        // ]);
        
        // InformationGarden::create([
        //     'type' => $request->type,
        //     'land_area' => $request->land_area,
        //     'hectares' => $request->hectares,
        //     'age' => $request->age,
        //     'spraying_record' => $request->spraying_record,
        //     'fertilization_record' => $request->fertilization_record,
        //     'distance' => $request->distance,
        //     'customers_id' => $trx,
        // ]);

        // RiskArea::create([
        //     'left' =>  $request->risk_left,
        //     'right' =>  $request->risk_right,
        //     'front' =>  $request->risk_front,
        //     'behind' =>  $request->risk_behind,
        //     'fuel' =>  $request->fuel,
        //     'customers_id' => $trx,
        // ]);

        // Consumer::create([
        //     'name' => $request->personal_name,
        //     'bhirt' => $request->bhirt,
        //     'identity' => $request->identity,
        //     'address' => $request->personal_address,
        //     'npwp'  => $request->npwp,
        //     'nationality'  => $request->nationality, 
        //     'payment_source'  => $request->payment_source, 
        //     'customer_type'  => $request->customer_type, 
        //     'customers_id' => $trx,
        // ]);

        // Phone::create([
        //     'home' => $request->home,
        //     'office' => $request->office,
        //     'hp' => $request->hp,
        //     'fax' => $request->fax,
        //     'customers_id' => $trx,
        // ]);

        // AdditionalData::create([
        //     'field_one' => $request->field_one,
        //     'field_two' => $request->field_two,
        //     'field_three' => $request->field_three,
        //     'field_four' => $request->field_four,
        //     'customers_id' => $trx,
        // ]);


         //flexas wajib Main risk
         $inputCode = $request->rate_code;
         $inputCodeDua = $request->rate_code_dua;
         $premi = [];
         $rateCodes = ["FL-01"];

         // Start date
         $date = $request->s_date;
         // End date
         $end_date = $request->e_date;
         $pertanggungan = $request->tsi;
         $awal  = date_create($date);
         $akhir = date_create($end_date);
         $diff  = date_diff( $awal, $akhir );
         $val_day = $diff->days;
         echo "hari :". $val_day;
         $flexas = MasterRate::where('rate_code','FL-01')->first();
         $percent = $pertanggungan*($flexas['rate']/100);
         $test =  (20/100)*$pertanggungan*($flexas['rate']/100);
         $total = $test+$percent;
         echo '<br> FL-01 :' . $total;   
         array_push($premi, $total);
         
         
    //      if($inputCode) {
    //          array_push($rateCodes, $inputCode);
    //          $optionalRate = MasterRate::where('rate_code',$inputCode)->first();
    //          $optionalResult = ($optionalRate['rate']/100)*$pertanggungan;
    //          $satuBulan =  (20/100)*$pertanggungan*($optionalRate['rate']/100);
    //          $hasil = $optionalResult+$satuBulan;
    //          echo '<br> '.$inputCode . ' :' . $hasil;   
    //          array_push($premi, $hasil);

    //          if ($inputCodeDua) {
    //              array_push($rateCodes, $inputCodeDua);
    //              $optionalRate = MasterRate::where('rate_code',$inputCodeDua)->first();
    //              $optionalResult = ($optionalRate['rate']/100)*$pertanggungan;
    //              $satuBulan =  (20/100)*$pertanggungan*($optionalRate['rate']/100);
    //              $hasil = $optionalResult+$satuBulan;
    //              echo '<br> '.$inputCode . ' :' . $hasil;   
    //              array_push($premi, $hasil);
    //          }
    //      }
                     
    //  foreach ($rateCodes as $index => $codeRate) {
    //      Risk::create([
    //          "rate_code"  => $codeRate,
    //          "premi"  => $premi[$index],
    //          "customers_id"  => $trx,
    //      ]);
    //  };

        return ResponseFormatter::success(
            'Your application has success Registered'
        );
    } 
    catch (\Throwable $error) {
        return ResponseFormatter::error(
            [
                'message' => 'Something went wrong',
                'error' => $error,
            ],
            'Faild please try again later',
            500
        );
    }
   }
}
