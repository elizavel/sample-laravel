<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisaninweb\SoapWrapper\SoapWrapper;
use App\Soap\Request\GetConversionAmount;
use App\Soap\Response\GetConversionAmountResponse;
use SoapClient;

class MultisysController extends Controller
{
	
	/**
   * @var SoapWrapper
   */
	protected $soapWrapper;

   /**
   * SoapController constructor.
   *
   * @param SoapWrapper $soapWrapper
   */
	public function __construct(SoapWrapper $soapWrapper)
	{
		$this->soapWrapper = $soapWrapper;
	}
  
  
    function index(){
		return view('multisys.services');
	}
	
	function billers(){
		
		$this->soapWrapper->add('GetBillers', function ($service) {
			  $service
				
				->trace(true)
				->classmap([]);
			});

			// Without classmap
			$response = $this->soapWrapper->call('GetBillers.GetBillers', [
			  'tpaId' => '1111', 
			]);

			$billers = explode("|",$response->GetBillersResult);
			
			$svcode = array();
			$name = array();
			
			for($x =0; $x < count($billers) ; $x++){
				$biller = explode("~",$billers[$x]);
				array_push($svcode,$biller[0]);
				array_push($name,$biller[1]);
				
			}
			//echo json_encode ($svcode);
			//echo json_encode ($name);
			
			
		
		return view('multisys.billers',['svcode'=>$svcode,'name'=>$name]);
	}
	
	function rules($merchantId){
		 
		
		$wsdl="";
	
	
		$content = array(
				'tpaId'=>'1111',
				'merchantId'=>$merchantId
		);
	
		 $options= array(
				'trace'=>1,
				'exception'=>1,
				'allow_self_signed'=>0,
				'verify_peer'=>1,
				'cache_wsdl'=>WSDL_CACHE_NONE
		);
	
		$client = new SoapClient($wsdl, $options);
		$result = $client->GetBillerRules($content);
		$trace = $client->__getLastRequest();
		$head = $client->__getLastRequestHeaders();
			
		$res = array(
				'pdata' => $content,
				'rdata' => $result,
				'trace' => $trace,
		);
		 
		$rules = simplexml_load_string($result->GetBillerRulesResult);
		
		$biller_rules = array (
		
				'Name'=>$rules->Name,
				'Metadata'=>$rules->Metadata,
				'Exactpayment'=>$rules->Exactpayment,
				'Overpayment'=>$rules->Overpayment,
				'Underpayment'=>$rules->Underpayment,
				'ServiceFee'=>$rules->ServiceFee,
				'AccountNoLength'=>$rules->AccountNoLength
		
		);
		 
		
		return view('multisys.rules',['rules'=>$biller_rules]);
		
		
		
		
		
		
		
		 
	}
	
   
  
  
	 
  
	
}
