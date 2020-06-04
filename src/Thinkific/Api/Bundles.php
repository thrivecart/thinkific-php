<?php

namespace Thinkific\Api;

class Bundles extends AbstractApi {
	/**
	 * @throws ApiException
	 */
	public function getAll($opts = null) {
		throw new ApiException( [ "Not Supported" => [ "The API Call 'getAll()' is not supported by the Thinkific Api" ] ] );
	}

	/**
	 * @throws ApiException
	 */
	public function add($data) {
		throw new ApiException( [ "Not Supported" => [ "The API Call 'getAll()' is not supported by the Thinkific Api" ] ] );
	}

	/**
	 * @throws ApiException
	 */
	public function delete($id) {
		throw new ApiException( [ "Not Supported" => [ "The API Call 'getAll()' is not supported by the Thinkific Api" ] ] );
	}

	/**
	 * @throws ApiException
	 */
	public function getById($id) {
		throw new ApiException( [ "Not Supported" => [ "The API Call 'getAll()' is not supported by the Thinkific Api" ] ] );
	}

	/**
	 * @throws ApiException
	 */
	public function update($id, $data) {
		throw new ApiException( [ "Not Supported" => [ "The API Call 'getAll()' is not supported by the Thinkific Api" ] ] );
	}
}