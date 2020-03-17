<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function viewPE9()
    {
        $client = resolve('nomination.client');
    	$response = $client->request('GET','elections/electionStatus/APPROVE');
    	$statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
        $obj = json_decode($body);
        return view('pe9')->with('Fdata',$obj);
        
    }

    public function viewPE10()
    {
        $client = resolve('nomination.client');
    	$response = $client->request('GET','elections/electionStatus/APPROVE');
    	$statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
        $obj = json_decode($body);
        return view('pe10')->with('Fdata',$obj);
        
    }

    public function viewPE10X1()
    {
        $client = resolve('nomination.client');
    	$response = $client->request('GET','elections/electionStatus/APPROVE');
    	$statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
        $obj = json_decode($body);
        return view('pe10x1')->with('Fdata',$obj);
        
    }

    public function viewPE11()
    {
        $client = resolve('nomination.client');
    	$response = $client->request('GET','elections/electionStatus/APPROVE');
    	$statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
        $obj = json_decode($body);
        return view('pe11')->with('Fdata',$obj);
        
    }


    public function viewPE30()
    {
        $client = resolve('nomination.client');
    	$response = $client->request('GET','elections/electionStatus/APPROVE');
    	$statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
        $obj = json_decode($body);
        return view('pe30x1x2')->with('Fdata',$obj);
    }
    // -----------------------------------------------------------------------------------------------------
    
    public function getDistrict(Request $request){
        $client = resolve('nomination.client');
        $response = $client->request('GET','elections/'.$request->id.'/divisions');
    	$statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
        $data = json_decode($body);
        return response()->json($data);
      }

      public function getBallot(Request $request){
        $client = resolve('nomination.client');
        $response = $client->request('GET','divisions/'.$request->id.'/divisionData');
        $teams = $client->request('GET','teams');
        $teamBody = $teams->getBody()->getContents();
        $teamData = json_decode($teamBody,true);
    	$statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
        $data = json_decode($body,true);
        for ($i = 0; $i < count($data[0]['parties']); $i++) {
            for ($j = 0; $j < count($teamData); $j++) {
                    if($data[0]['parties'][$i]['id'] == $teamData[$j]['team_id']) {
                        $data[0]['parties'][$i]['team_name']=$teamData[$j]['team_name'];
                        $data[0]['parties'][$i]['symbol']=$teamData[$j]['team_symbol'];
                    break;
                    }
            }
        }
        return response()->json($data);
      }
}
