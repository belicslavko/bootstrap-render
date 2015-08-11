<?php
/**
 * Created by PhpStorm.
 * User: slavko
 * Date: 11.8.15.
 * Time: 12.10
 */

namespace BelicSlavko\BootstrapRender;


use App\Http\Controllers\Controller;

class BootstrapRenderControllers extends Controller {

	public function editPostHeader($title, $slug){

		return view( 'BootstrapRender::editPostHeader' )->with( $data = array('title' => $title, 'slug' => $slug) );

	}

	public function editErrorMsg($error){

		return view( 'BootstrapRender::editErrorMsg' )->with( $data = array('error' => $error) );

	}

	public function editUpdateMsg($update){

		return view( 'BootstrapRender::editUpdateMsg' )->with( $data = array('update' => $update) );

	}

	public function textInput($label, $name, $value, $class=false){

		return view( 'BootstrapRender::textInput' )->with( $data = array('label' => $label, 'name' => $name, 'value' => $value, 'class' => $class) );

	}

	public function textArea($label, $name, $value, $id){

		return view( 'BootstrapRender::textArea' )->with( $data = array('label' => $label, 'name' => $name, 'value' => $value, 'id' => $id) );

	}

	public function selectCat($label, $name, $value=false, $category_select){

		return view( 'BootstrapRender::selectCat' )->with( $data = array('label' => $label,'name' => $name, 'category_select' => $category_select, 'value' => $value) );

	}

}