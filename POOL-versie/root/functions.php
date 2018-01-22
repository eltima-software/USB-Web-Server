<?php

function filter_status($status){
	$list = explode("\n",$status);

	$data['staged'] = array();
	$data['unstaged'] = array();
	$data['untracked'] = array();
	$data['files'] = array();
	$state = null;

	foreach($list AS $line){
		$item = trim(substr($line,1)); // remove #
		if($item == "Changes to be committed:"){
			$state = 'staged';
		}
		elseif($item == "Changes not staged for commit:"){
			$state = 'unstaged';
		}
		elseif($item == "Untracked files:"){
			$state = 'untracked';
		}
		else{
			if($state == 'staged' OR $state == "unstaged"){
				if(count($split = explode(":",$item)) == 2){
					$data[$state][] = array('type' => $split[0], 'file' => trim($split[1]));
					$data['files'][trim($split[1])] = array('state' => $state, 'type' => $split[0]);
				}
			}
			elseif($state == 'untracked'){
				if($item != 'o changes added to commit (use "git add" and/or "git commit -a")' AND $item != '(use "git add <file>..." to include in what will be committed)' AND !empty($item)){
					$data['untracked'][] = $item;
					$data['files'][$item] = array('state' => 'untracked', 'type' => false);
				}
			}
		}
	}
	return $data;
}