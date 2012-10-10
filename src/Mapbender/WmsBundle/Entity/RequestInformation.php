<?php
namespace Mapbender\WmsBundle\Entity;


/**
 * RequestInformation class.
 *
 * @author Paul Schmidt <paul.schmidt@wheregroup.com>
 */
class RequestInformation {
    /**
     * ORM\Column(type="string", nullable=true)
     */
    protected $httpGet;
    /**
     * ORM\Column(type="string", nullable=true)
     */
    protected $httpPost;
    /**
     * ORM\Column(type="array", nullable=true)
     */
    protected $formats;
    
    /**
     * Creates a RequestInformation object from parameters
     * @param array $parameters
     */
    public static function create(array $parameters) {
        if(is_array($parameters)) {
            $rqi = new RequestInformation();
            if(isset($parameters["httpPost"])){
                $rqi->setHttpPost($parameters["httpPost"]);
            }
            if(isset($parameters["httpGet"])){
                $rqi->setHttpGet($parameters["httpGet"]);
            }
            if(isset($parameters["formats"])){
                $rqi->setFormats($parameters["formats"]);
            }
            if ($this->getHttpGet() || $this->getHttpPost()){
                return $rqi;
            }
        }
        return null;
    }
    
    public function __construct(){
//        $this->formats = array(); ???
    }
    
    /**
     * Gets httpGet
     * 
     * @return string
     */
    public function getHttpGet() {
        return $this->httpGet;
    }
    /**
     * Sets httpGet
     * @param string $value 
     */
    public function setHttpGet($value) {
        $this->httpGet = $value;
    }
    
    /**
     * Gets httpPost
     * 
     * @return string
     */
    public function getHttpPost() {
        return $this->httpPost;
    }
    /**
     * Sets httpPost
     * @param string $value 
     */
    public function setHttpPost($value) {
        $this->httpPost = $value;
    }
    
    /**
     * Gets formats
     * 
     * @return string
     */
    public function getFormats() {
        return $this->formats;
    }
    
    /**
     * Sets formats
     * @param string $value 
     */
    public function setFormats($value) {
        $this->formats = $value;
    }
    
    /**
     * Gets object as array
     * 
     * @return array
     */
    public function toArray() {
        return array (
            "httpGet" => $this->httpGet,
            "httpPost" => $this->httpPost,
            "formats" => $this->formats
        );
    }
    
}