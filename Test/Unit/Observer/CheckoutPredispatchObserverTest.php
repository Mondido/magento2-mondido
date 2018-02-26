<?php
/**
 * Mondido
 *
 * PHP version 5.6
 *
 * @category Mondido
 * @package  Mondido_Mondido
 * @author   Andreas Karlsson <andreas@kodbruket.se>
 * @license  MIT License https://opensource.org/licenses/MIT
 * @link     https://www.mondido.com
 */

namespace Mondido\Mondido\Test\Unit\Observer;

use Mondido\Mondido\Test\Unit\MondidoObjectManager as ObjectManager;

/**
 * CheckoutPredispatchObserverTest
 *
 * @todo Needs rewrite!
 *
 * @category Mondido
 * @package  Mondido_Mondido
 * @author   Andreas Karlsson <andreas@kodbruket.se>
 * @license  MIT License https://opensource.org/licenses/MIT
 * @link     https://www.mondido.com
 */
class CheckoutPredispatchObserverTest extends \PHPUnit\Framework\TestCase
{
    protected $object;

    /**
     * @var \Magento\Framework\TestFramework\Unit\Helper\ObjectManager
     */
    protected $objectManager;

    /**
     * Set up
     *
     * @return void
     */
    protected function setUp()
    {
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
        /*
        $this->objectManager = new ObjectManager($this);
        $this->object = $this->objectManager->getObject(
            'Mondido\Mondido\Observer\CheckoutPredispatchObserver'
        );
        */
    }

    /**
     * Test execute
     *
     * @return void
     */
    public function testExecute()
    {
        // $this->assertEquals(get_class($this->object), 'Mondido\Mondido\Observer\CheckoutPredispatchObserver');
    }

    /**
     * Tear down
     *
     * @return void
     */
    protected function tearDown()
    {
        $this->object = null;
        $this->objectManager = null;
    }
}
