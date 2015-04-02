<?php
namespace phpbu\App\Event\App;

/**
 * End test
 *
 * @package    phpbu
 * @subpackage tests
 * @author     Sebastian Feldmann <sebastian@phpbu.de>
 * @copyright  Sebastian Feldmann <sebastian@phpbu.de>
 * @license    http://www.opensource.org/licenses/BSD-3-Clause  The BSD 3-Clause License
 * @link       http://www.phpbu.de/
 * @since      Class available since Release 2.0.0
 */
class EndTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests End::getResult
     */
    public function testGetResult()
    {
        $r = $this->getMockBuilder('\\phpbu\\App\\Result')
                  ->disableOriginalConstructor()
                  ->getMock();

        $end = new End($r);

        $this->assertEquals($r, $end->getResult());
    }
}