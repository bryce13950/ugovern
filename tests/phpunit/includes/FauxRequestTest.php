<?php

class FauxRequestTest extends MediaWikiTestCase {
	/**
	 * @covers FauxRequest::setHeader
	 * @covers FauxRequest::getHeader
	 */
	public function testGetSetHeader() {
		$value = 'text/plain, text/html';

		$request = new FauxRequest();
		$request->setHeader( 'Accept', $value );

		$this->assertEquals( $request->getHeader( 'Nonexistent' ), false );
		$this->assertEquals( $request->getHeader( 'Accept' ), $value );
		$this->assertEquals( $request->getHeader( 'ACCEPT' ), $value );
		$this->assertEquals( $request->getHeader( 'accept' ), $value );
		$this->assertEquals(
			$request->getHeader( 'Accept', WebRequest::GETHEADER_LIST ),
			array( 'text/plain', 'text/html' )
		);
	}
}
