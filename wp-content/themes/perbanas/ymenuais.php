<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class Ymenu extends AIS_Model {

	function __construct() {
		parent::AIS_Model();
	}



	function generateMenuAis($id = 'menu') {
		$menus = $this->findAllThreaded();

		if ( $menus && count( $menus ) > 0 ) {
			$list_menus = "<ul id=\"$id\">";

			foreach ( $menus as $menu ) {
				// if current top menu has children
				if ( $this->__hasChild( $menu['children'] ) ) {
					// 1st li or top parent
					$list_menus .= "<li class='rootnav'><a href='#' id='m" . $menu['id'] . "' class='menuais' title='" . $menu['name'] . "'>" . $menu['name'] . "</a>";
					$this->__generateChildMenu( $menu['children'], $list_menus,0 );
				} else {
					$list_menus .= "<li><a href='" . $menu['path'] ."' title='" . $menu['name'] . "' >" . $menu['name'] . "</a>";
				}

				$list_menus .= "</li>";
			}

			return $list_menus . "</ul>";
		}
	}

	function __generateChildMenu( &$menus, &$list_menus,$level ) {
		$CIPATH = $this->config->item('base_url')."/index.php";
		$AISPATH = $this->config->item('base_url_ais');
		$list_menus .= "<ul>";
		foreach ( $menus as $menu ) {

			// if child has children, iterate its childs!!
			if ( $this->__hasChild( $menu['children'] ) ) {

				// first output its child parent
				$list_menus .= "<li class='subnav$level haschild close'><a href='#' title='" . $menu['name'] . "'>" .
						$menu['name'] . "</a>";
				// generate again
				$this->__generateChildMenu( $menu['children'], $list_menus,$level+1);

			} else {
				if($menu['class']=='menu-ais'){
					$href = $CIPATH . $menu['path'];
				}else{
					$href = $AISPATH . $menu['path'];
				}
				$list_menus .= "<li class='subnav$level nohaschild'><a href='" . $href . "' title='" . $menu['name'] . "' class='" . $menu['class'] . "' >" .
						$menu['name'] . "</a>";
			}
			$list_menus .= "</li>";
		}

		$list_menus .= "</ul>";
	}


	function __hasChild( $child ) {
		if ( $child && count($child) > 0 ) {
			return true;
		}
		return false;
	}


	function findAllThreaded(){

		$rsmenus= $this->db->query("select * from site_menus where active=1 order by weight DESC,id")->result_array();

		return $this->__doThread($rsmenus,0);
	}

	function __doThread($data, $root) {
		$out = array();
		$sizeOf = sizeof($data);

		for ($ii = 0; $ii < $sizeOf; $ii++) {
			if (($data[$ii]['parent_id'] == $root) || (($root === null) && ($data[$ii]['parent_id'] == '0'))) {
				$tmp = $data[$ii];

				if (isset($data[$ii]['id'])) {
					$tmp['children'] = $this->__doThread($data, $data[$ii]['id']);
				} else {
					$tmp['children'] = null;
				}

				$out[] = $tmp;
			}
		}

		return $out;
	}

} //END FILE