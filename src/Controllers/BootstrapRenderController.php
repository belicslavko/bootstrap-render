<?php

namespace BelicSlavko\BootstrapRender;


use App\Http\Controllers\Controller;

class BootstrapRenderControllers extends Controller {

	/**
	 * @param $title
	 * @param $slug
	 *
	 * @return $this
	 */
	public function editPostHeader( $title, $slug ) {

		return view( 'BootstrapRender::editPostHeader' )->with( $data = array( 'title' => $title, 'slug' => $slug ) );

	}

	/**
	 * @param $error
	 *
	 * @return $this
	 */
	public function editErrorMsg( $error ) {

		return view( 'BootstrapRender::editErrorMsg' )->with( $data = array( 'error' => $error ) );

	}

	/**
	 * @param $update
	 *
	 * @return $this
	 */
	public function editUpdateMsg( $update ) {

		return view( 'BootstrapRender::editUpdateMsg' )->with( $data = array( 'update' => $update ) );

	}

	/**
	 * @param $error
	 *
	 * @return $this
	 */
	public function uploadError($error){

		return view( 'BootstrapRender::uploadErrorMsg' )->with( $data = array( 'error' => $error ) );

	}

	/**
	 * @param $label
	 * @param $name
	 * @param $value
	 * @param bool|false $class
	 *
	 * @return $this
	 */
	public function textInput( $label, $name, $value, $class = false ) {

		return view( 'BootstrapRender::textInput' )->with( $data = array( 'label' => $label, 'name' => $name, 'value' => $value, 'class' => $class ) );

	}

	/**
	 * @param $label
	 * @param $name
	 * @param $value
	 * @param bool|false $class
	 *
	 * @return $this
	 */
	public function emailInput( $label, $name, $value, $class = false ) {

		return view( 'BootstrapRender::emailInput' )->with( $data = array( 'label' => $label, 'name' => $name, 'value' => $value, 'class' => $class ) );

	}

	/**
	 * @param $label
	 * @param $name
	 * @param $value
	 * @param bool|false $class
	 *
	 * @return $this
	 */
	public function passwordInput( $label, $name, $class = false ) {

		return view( 'BootstrapRender::passwordInput' )->with( $data = array( 'label' => $label, 'name' => $name, 'class' => $class ) );

	}

	/**
	 * @param $label
	 * @param $name
	 * @param $value
	 * @param $id
	 *
	 * @return $this
	 */
	public function textArea( $label, $name, $value, $id ) {

		return view( 'BootstrapRender::textArea' )->with( $data = array( 'label' => $label, 'name' => $name, 'value' => $value, 'id' => $id ) );

	}

	/**
	 * @param $label
	 * @param $name
	 * @param $category_select
	 * @param bool|false $value
	 *
	 * @return $this
	 */
	public function selectCat( $label, $name, $category_select, $value = false ) {

		return view( 'BootstrapRender::selectCat' )->with( $data = array( 'label' => $label, 'name' => $name, 'category_select' => $category_select, 'value' => $value ) );

	}

	/**
	 * @param $label
	 * @param $name
	 * @param $category_select
	 * @param bool|false $value
	 *
	 * @return $this
	 */
	public function selectParentCat( $label, $name, $category_select, $value = false ) {

		return view( 'BootstrapRender::selectParentCat' )->with( $data = array( 'label' => $label, 'name' => $name, 'category_select' => $category_select, 'value' => $value ) );

	}

	/**
	 * @param $label
	 * @param $name
	 * @param $select
	 * @param bool|false $value
	 *
	 * @return $this
	 */
	public function select( $label, $name, $select, $value = false ) {

		return view( 'BootstrapRender::select' )->with( $data = array( 'label' => $label, 'name' => $name, 'select' => $select, 'value' => $value ) );

	}

	/**
	 * @param $label
	 * @param $name
	 * @param bool|false $value
	 *
	 * @return $this
	 */
	public function active( $label, $name, $value = false ) {

		return view( 'BootstrapRender::active' )->with( $data = array( 'label' => $label, 'name' => $name, 'value' => $value ) );

	}

	/**
	 * @param $label
	 * @param $name
	 * @param bool|false $value
	 *
	 * @return $this
	 */
	public function dateInput( $label, $name, $value = false ) {

		return view( 'BootstrapRender::dateInput' )->with( $data = array( 'label' => $label, 'name' => $name, 'value' => $value ) );

	}

	/**
	 * @param $name
	 * @param $class
	 *
	 * @return $this
	 */
	public function updateButton( $name, $class ) {

		return view( 'BootstrapRender::updateButton' )->with( $data = array( 'name' => $name, 'class' => $class ) );

	}

	/**
	 * @param $name
	 * @param $class
	 *
	 * @return $this
	 */
	public function saveButton( $name, $class ) {

		return view( 'BootstrapRender::saveButton' )->with( $data = array( 'name' => $name, 'class' => $class ) );

	}

	/**
	 * @param $images
	 *
	 * @return $this
	 */
	public function uploadImage( $images ) {

		return view( 'BootstrapRender::uploadImage' )->with( $data = array( 'images' => $images ) );

	}

	/**
	 * @param $label
	 * @param $lng
	 * @param $value
	 * @param $slug
	 * @param $type
	 *
	 * @return $this
	 */
	public function duplicateOn( $label, $lng, $value, $slug, $type ) {

		return view( 'BootstrapRender::duplicateOn' )->with( $data = array( 'label' => $label, 'lng' => $lng, 'value' => $value, 'slug' => $slug, 'type' => $type ) );

	}

	/**
	 * @param $label
	 * @param $lng
	 * @param $value
	 * @param $type
	 * @param $title_name
	 *
	 * @return $this
	 */
	public function versionOn( $label, $lng, $value, $type, $title_name ) {

		return view( 'BootstrapRender::versionOn' )->with( $data = array( 'label' => $label, 'lng' => $lng, 'value' => $value, 'type' => $type, 'title_name' => $title_name ) );

	}

	/**
	 * @param $label
	 * @param $name
	 * @param bool|false $value
	 *
	 * @return $this
	 */
	public function fileInput( $label, $name, $type = false, $value = false, $id = false ){

		return view( 'BootstrapRender::fileInput' )->with( $data = array( 'label' => $label, 'name' => $name, 'value' => $value, 'type' => $type, 'id' => $id ) );

	}

}