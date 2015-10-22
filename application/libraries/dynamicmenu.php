<?php
/**
* 
*/
class dynamicmenu
{
	private $ci;
	private $classMenu = 'class="menu"';
	private $classDropdown = 'class="dropdown"';
	private $classSubMenu = 'class="sub-menu"';

	function __construct(){
		$this->ci = & get_instance();
	}

	function buildmenu($type){
		$menu = array();
		$query = $this->ci->db->query("select * from menus where disabled = 0");
		$htmlmenu = '';
		switch ($type) {
			case 0:
				$htmlmenu .= '<nav><ul '.$this->classMenu.'>';
				break;
			
			default:
				$htmlmenu .= '<nav><ul '.$this->classMenu.'>';
				break;
		}
		$countParent = 0;
		foreach ($query->result() as $row) {
			$id = $row->id;
			$title = $row->title;
			$linktype = $row->linktype;
			$pageid = $row->pageid;
			$modulename = $row->modulename;
			$url = $row->url;
			$uri = $row->uri;
			$groupid = $row->groupid;
			$position = $row->position;
			$target = $row->target;
			$parentid = $row->parentid;
			$isparent = $row->isparent;
			$showmenu = $row->showmenu;
			{
				if($showmenu && $parentid == 0){
					$countParent ++;
					if($isparent){
						$htmlmenu .= '<li '.$this->classDropdown. '>'.anchor($url,$title,'target ="'.$target.'"');
					}
					else{
						$htmlmenu .= '<li>'.anchor($url,$title,'target ="'.$target.'"');	
					}
				}
			}

			$htmlmenu .= $this->getChild($id);
			if($countParent > 4){
				$htmlmenu .= '<li '.$this->classDropdown. '>'.anchor('/xem-them/',"Xem thêm",'target ="'.$target.'"');
				break;

			}
		}
		$htmlmenu .= '</li>';
		$htmlmenu .= '</ul>';
		$htmlmenu .= '</nav>';

		$this->updateMenuIscall(0);
		return $htmlmenu;
	}

	function getChild($id){
		$hasSubcats = false;
		$htmlmenu ='';
		$htmlmenu .="\n".'<ul>'."\n";
		$query = $this->ci->db->query("select * from menus where parentid = $id and iscall = 0");
		foreach ($query->result() as $row) {
			$id = $row->id;
			$title = $row->title;
			$linktype = $row->linktype;
			$pageid = $row->pageid;
			$modulename = $row->modulename;
			$url = $row->url;
			$uri = $row->uri;
			$groupid = $row->groupid;
			$position = $row->position;
			$target = $row->target;
			$parentid = $row->parentid;
			$isparent = $row->isparent;
			$showmenu = $row->showmenu;

			$hasSubcats = true;

			if($isparent == true){
				$htmlmenu .= "\t\t".'<li>'.anchor($url,$title,'target = "'.$target.'"');
			}
			else{
				$htmlmenu .= "\t\t".'<li>'.anchor($url,$title,'target = "'.$target.'"');
				$this->updateMenuIscall(1,$id);
			}

			

			$htmlmenu .= $this->getChild($id);
		}
		$htmlmenu.='</li>'."\n";
		$htmlmenu.="\t\t".'</ul>';

		return ($hasSubcats) ? $htmlmenu : false;
	}

	function updateMenuIscall($check,$id=0){

		$data=array('iscall'=>$check);
		if($check) {$this->ci->db->where('id',$id);}
		$this->ci->db->update('menus',$data);
	}
}

?>