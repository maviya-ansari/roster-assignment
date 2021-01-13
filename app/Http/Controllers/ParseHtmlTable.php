<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\flight_model;
use App\Http\flight_date;

class ParseHtmlTable extends Controller
{
    public function load()
    {
    	return view('getHtml');
    }
    public function convert(Request $r)
    {
    	// echo ($r->input('html'));
		$flight_date = new flight_date();
		$dom = new \DOMDocument();  
		$dom->loadHTML($r->input('html'));  
		$dom->preserveWhiteSpace = false;   
		$tables = $dom->getElementsByTagName('table');   
		$rows = $tables->item(0)->getElementsByTagName('tr');
		$cols = $rows->item(0)->getElementsByTagName('th');   
		$row_headers = NULL;
		foreach ($cols as $node) { 
		    $row_headers[] = $node->nodeValue;
		}   

		$table = array();
		$rows = $tables->item(0)->getElementsByTagName('tr');   
		$row_count = 0;
		    $checkMonth = 0; 
		    $stop = 1;
		    $monthnames = array('jan','feb', 'mar', 'apr', 'may','jun','jul','aug','sep', 'oct', 'nov','dec');
		foreach ($rows as $row)   
		{   
		   // get each column by tag name  
		    if($stop>0){
		    $cols = $row->getElementsByTagName('td'); 
		    $row = array();
		    $i=0;
		    foreach ($cols as $node) {  
		        # code...
		        // print $node->nodeValue."\n";   
		        if($row_headers==NULL)
		            $row[] = $node->nodeValue;
		        else
		            $row[$row_headers[$i]] = $node->nodeValue;
		        $i++;
		    }  
		    $monthnames = array('jan','feb', 'mar', 'apr', 'may','jun','jul','aug','sep', 'oct', 'nov','dec');
		    $aDataTableDetailHTML = [];
		    for($j=0;$j<count($row);$j++){
		        // if($row[$j]!=null){
		            preg_match("/([a-zA-Z]+)(\\d+)([a-zA-Z]+)/", $row[$j], $matches);

		            if(count($matches)>2){
		                $row_count=count($row);
		                if(in_array(strtolower($matches[1]),$monthnames))
		                    $checkMonth = 1;
		                    $aDataTableDetailHTML[] = $matches[0];
		            }
		            else if($checkMonth>0)
		                    $aDataTableDetailHTML[] = $row[$j];
		        // }
		                if(strtolower($row[$j])=="duty")
		                    $stop=0;
		    }

		    // echo json_encode($aDataTableDetailHTML);
		    $table[] = $aDataTableDetailHTML;
		}
		}   
		$ridx = 0;
		$cidx = 0;

		$out = array();
		$i=0;
		// echo ($i)." =>)) ".json_encode($row_count,JSON_FORCE_OBJECT)."<br><br>"; 
		foreach($table as  $row){
		// echo ($i)." =>)) ".json_encode($row,JSON_FORCE_OBJECT)."<br><br>"; 
		    foreach($row as  $val){
		        $out[$ridx][$cidx] = $val;
		// echo ($i)." =>)) ".json_encode($val,JSON_FORCE_OBJECT)."<br><br>";
		// echo ($i)." =>)) ".json_encode($out,JSON_FORCE_OBJECT)."<br><br>";
		        $ridx++;
		        if($ridx >= $row_count){
		            $cidx++;
		            $ridx = 0;
		        }
		    }
		// echo ($i++)." =>)) ".json_encode($out,JSON_FORCE_OBJECT)."<br><br>";
		}
		$i=0;
		$finalJSON = array();
		foreach ($out as $key) {
		    $month;
		    $data=array();
		    $matches=[];
		    preg_match("/([a-zA-Z]+)(\\d+)([a-zA-Z]+)/", $key[0], $matches);
		    if(count($matches)>2){
		        if(in_array(strtolower($matches[1]),$monthnames)){
					$flight_date->flight_date = $matches[2].' '.$matches[3];
					$month = $matches[1];
					// $flight_date->flight_day = $matches[3];
					// array_push($finalJSON,$matches[1], $matches[2].' '.$matches[3]);
		            // array_push($data,array("month"=>$matches[1],"date"=>$matches[2],"day"=>$matches[3]));
		        }
		    }
			for($i=0;$i<count($key)-7;$i=$i+7){
				if(is_numeric($key[$i+1])){
					$flight_model = new flight_model();
					$flight_model->flight_number = $key[$i+1];
					$flight_model->report_time = $key[$i+2];
					$flight_model->depart_time = $key[$i+3];
					$flight_model->depert_airport = $key[$i+4];
					$flight_model->arrival_time = $key[$i+6];
					$flight_model->arrival_airport = $key[$i+5];
				    array_push($finalJSON, array("month"=>$month,"date"=>$flight_date->flight_date,"flight data"=>$flight_model));
				}
				else if(is_numeric($key[$i])&&$i!=0){
					$flight_model = new flight_model();
					$flight_model->flight_number = $key[$i];
					$flight_model->report_time = $key[$i+1];
					$flight_model->depart_time = $key[$i+2];
					$flight_model->depert_airport = $key[$i+3];
					$flight_model->arrival_time = $key[$i+5];
					$flight_model->arrival_airport = $key[$i+4];
					$i=$i-2;
				    array_push($finalJSON, array("month"=>$month,"date"=>$flight_date->flight_date,"flight data"=>$flight_model));
				}
				else if($key[$i+1]=='D/O' || $key[$i+1]=='d/o'){
				    array_push($finalJSON, array("month"=>$month,"date"=>$flight_date->flight_date,"flight data"=>"Day Off"));
				}
				else if($i==0){
				    array_push($finalJSON, array("month"=>$month,"date"=>$flight_date->flight_date,"other event"=>array("event"=>$key[$i+1],"start time"=>$key[$i+2],"end time"=>$key[$i+3])));
				}
			    // array_push($data->$matches[1]->$flight_date->flight_date,$flight_model);
			// echo ($i++)." =>)) ".json_encode($key,JSON_FORCE_OBJECT)."<br><br>";
			}

		}

		echo json_encode($finalJSON,JSON_FORCE_OBJECT)."<br><br>";

// foreach ($finalJSON as $key) {
// echo json_encode($key,JSON_FORCE_OBJECT)."<br><br>";
// }
    }
}
