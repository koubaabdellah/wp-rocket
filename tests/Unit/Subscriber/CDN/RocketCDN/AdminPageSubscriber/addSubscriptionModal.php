<?php

namespace WP_Rocket\Tests\Unit\Subscriber\CDN\RocketCDN;

use Brain\Monkey\Functions;
use WPMedia\PHPUnit\Unit\TestCase;
use WP_Rocket\Admin\Options_Data;
use WP_Rocket\Admin\Settings\Beacon;
use WP_Rocket\CDN\RocketCDN\APIClient;
use WP_Rocket\Subscriber\CDN\RocketCDN\AdminPageSubscriber;

/**
 * @covers \WP_Rocket\Subscriber\CDN\RocketCDN\AdminPageSubscriber::add_subscription_modal
 * @group  RocketCDN
 */
class Test_AddSubscriptionModal extends TestCase {
	protected static $mockCommonWpFunctionsInSetUp = true;
	private $page;

	public function setUp() {
		parent::setUp();

		Functions\stubs(
			[
				'home_url'      => 'http://example.org',
				'rest_url'      => 'http://example.org/wp-json/',
			]
		);

		$this->page = new AdminPageSubscriber(
			$this->createMock( APIClient::class ),
			$this->createMock( Options_Data::class ),
			$this->createMock( Beacon::class ),
			'views/settings/rocketcdn'
		);
	}

	private function getActualHtml() {
		ob_start();
		$this->page->add_subscription_modal();

		return $this->format_the_html( ob_get_clean() );
	}

	public function testShouldDisplayNothingWhenNotLiveSite() {
		Functions\when( 'rocket_is_live_site' )->justReturn( false );

		$this->assertNull( $this->page->add_subscription_modal() );
	}

	public function testShouldDisplayModalWithProductionURL() {
		Functions\when( 'rocket_is_live_site' )->justReturn( true );
		Functions\when( 'add_query_arg' )->justReturn( 'https://wp-rocket.me/cdn/iframe?website=http://example.org&callback=http://example.org/wp-json/wp-rocket/v1/rocketcdn/');
		Functions\expect( 'rocket_get_constant' )
			->ordered()
			->once()
			->with( 'WP_ROCKET_DEBUG', false )
			->andReturn( false )
			->andAlsoExpectIt()
			->once()
			->with( 'WP_ROCKET_WEB_MAIN' )
			->andReturn( 'https://wp-rocket.me' );

		$expected = <<<HTML
<div class="wpr-rocketcdn-modal" id="wpr-rocketcdn-modal" aria-hidden="true">
	<div class="wpr-rocketcdn-modal__overlay" tabindex="-1">
		<div class="wpr-rocketcdn-modal__container" role="dialog" aria-modal="true" aria-labelledby="wpr-rocketcdn-modal-title">
			<div id="wpr-rocketcdn-modal-content">
				<iframe id="rocketcdn-iframe" src="https://wp-rocket.me/cdn/iframe?website=http://example.org&callback=http://example.org/wp-json/wp-rocket/v1/rocketcdn/" width="674" height="425"></iframe>
			</div>
		</div>
	</div>
</div>
HTML;

		$this->assertSame( $this->format_the_html( $expected ), $this->getActualHtml() );
	}

	public function testShouldDisplayModalWithDevURL() {
		Functions\when( 'rocket_is_live_site' )->justReturn( true );
		Functions\when( 'add_query_arg' )->justReturn( 'https://dave.wp-rocket.me/cdn/iframe?website=http://example.org&callback=http://example.org/wp-json/wp-rocket/v1/rocketcdn/' );
		Functions\expect( 'rocket_get_constant' )
			->once()
			->with( 'WP_ROCKET_DEBUG', false )
			->andReturn( true );

		$expected = <<<HTML
<div class="wpr-rocketcdn-modal" id="wpr-rocketcdn-modal" aria-hidden="true">
	<div class="wpr-rocketcdn-modal__overlay" tabindex="-1">
		<div class="wpr-rocketcdn-modal__container" role="dialog" aria-modal="true" aria-labelledby="wpr-rocketcdn-modal-title">
			<div id="wpr-rocketcdn-modal-content">
				<iframe id="rocketcdn-iframe" src="https://dave.wp-rocket.me/cdn/iframe?website=http://example.org&callback=http://example.org/wp-json/wp-rocket/v1/rocketcdn/" width="674" height="425"></iframe>
			</div>
		</div>
	</div>
</div>
HTML;

		$this->assertSame( $this->format_the_html( $expected ), $this->getActualHtml() );
	}
}
