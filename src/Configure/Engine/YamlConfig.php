<?php 
namespace Yaml\Configure\Engine;

use Cake\Core\Configure\ConfigEngineInterface;
use Symfony\Component\Yaml\Yaml;

class YamlConfig implements ConfigEngineInterface {

    public function __construct($path = null) {
        if (!$path) {
            $path = CONFIG;
        }
        $this->_path = $path;
    }

    public function read($key) {
        $r = Yaml::parse($this->_path . $key . '.yml');
        return $r;
    }

    public function dump($key, $data) {
        // Code to dump data to file
    }
}