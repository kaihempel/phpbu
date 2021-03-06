<?php
namespace phpbu\App;

/**
 * Configuration
 *
 * @package    phpbu
 * @subpackage App
 * @author     Sebastian Feldmann <sebastian@phpbu.de>
 * @copyright  Sebastian Feldmann <sebastian@phpbu.de>
 * @license    http://www.opensource.org/licenses/BSD-3-Clause  The BSD 3-Clause License
 * @link       http://phpbu.de/
 * @since      Class available since Release 1.0.0
 */
class Configuration
{
    /**
     * Path and filename
     *
     * @var string
     */
    private $pathname;

    /**
     * Path to bootstrap file.
     *
     * @var string
     */
    private $bootstrap;

    /**
     * Verbose output
     *
     * @var boolean
     */
    private $verbose = false;

    /**
     * Use colors in output.
     *
     * @var boolean
     */
    private $colors = false;

    /**
     * Output debug information
     *
     * @var boolean
     */
    private $debug = false;

    /**
     * List of include paths
     *
     * @var array
     */
    private $includePaths = array();

    /**
     * List of ini settings
     *
     * @var array
     */
    private $iniSettings = array();

    /**
     * List of logger configurations
     *
     * @var array
     */
    private $loggers = array();

    /**
     * List of backup configurations
     *
     * @var array
     */
    private $backups = array();

    /**
     * Constructor
     *
     * @param string $file
     */
    public function __construct($file)
    {
        $this->pathname = $file;
    }

    /**
     * Pathname getter.
     *
     * @return string
     */
    public function getPathname()
    {
        return $this->pathname;
    }

    /**
     * Path getter.
     *
     * @return string
     */
    public function getPath()
    {
        return dirname($this->pathname);
    }

    /**
     * Filename getter.
     *
     * @return string
     */
    public function getFilename()
    {
        return basename($this->pathname);
    }

    /**
     * Bootstrap setter
     *
     * @param $file
     */
    public function setBootstrap($file)
    {
        $this->bootstrap = $file;
    }

    /**
     * Bootstrap getter.
     *
     * @return string
     */
    public function getBootstrap()
    {
        return $this->bootstrap;
    }

    /**
     * Verbose setter.
     *
     * @param boolean $bool
     */
    public function setVerbose($bool)
    {
        $this->verbose = $bool;
    }

    /**
     * Verbose getter.
     *
     * @return boolean
     */
    public function getVerbose()
    {
        return $this->verbose;
    }

    /**
     * Colors setter.
     *
     * @param boolean $bool
     */
    public function setColors($bool)
    {
        $this->colors = $bool;
    }

    /**
     * Colors getter.
     *
     * @return boolean
     */
    public function getColors()
    {
        return $this->colors;
    }

    /**
     * Debug setter.
     *
     * @param boolean $bool
     */
    public function setDebug($bool)
    {
        $this->debug = $bool;
    }

    /**
     * Debug getter.
     *
     * @return boolean
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * Add an include_path.
     *
     * @param string $path
     */
    public function addIncludePath($path)
    {
        $this->includePaths[] = $path;
    }

    /**
     * Get the list of include path.
     *
     * @return array
     */
    public function getIncludePaths()
    {
        return $this->includePaths;
    }

    /**
     * Add a ini settings.
     *
     * @param string $name
     * @param string $value
     */
    public function addIniSetting($name, $value)
    {
        $this->iniSettings[$name] = $value;
    }

    /**
     * Get the list of ini settings.
     *
     * @return array
     */
    public function getIniSettings()
    {
        return $this->iniSettings;
    }

    /**
     * Add logger config.
     *
     * @param \phpbu\App\Configuration\Logger $logger
     */
    public function addLogger(Configuration\Logger $logger)
    {
        $this->loggers[] = $logger;
    }

    /**
     * Get the list of logger configurations.
     *
     * @return array
     */
    public function getLoggers()
    {
        return $this->loggers;
    }

    /**
     * Add a Backup configuration.
     *
     * @param \phpbu\App\Configuration\Backup $backup
     */
    public function addBackup(Configuration\Backup $backup)
    {
        $this->backups[] = $backup;
    }

    /**
     * Get the list of backup configuration.
     *
     * @return array
     */
    public function getBackups()
    {
        return $this->backups;
    }
}
