<?php
/*
 * Para gestionar:
 * 1.- obtener parametos (GET, POST, ...) validados.
 * 2.- obtener metodo y validar si es: (GET, POST, AJAX, PUT, ...)
 * 3.- obtener informacion de la URL actual.
 * 4.- http headers
 * 5.- obtener informacion del cliente.
 * */
class request {
	private $metodo;
	private $seguro;
	
	private $hostInfo;    // http://ejemplo.com
	private $url;         // /admin/index.php/login?id=123
	private $scriptUrl;   // /admin/index.php
	private $baseUrl;     // /admin
	private $pathInfo;    // /login
	private $serverPort;  // 80
	
	function __construct(){
		$this->getMetodo();
        
	}

/* 1.- Obtener paramentros: --------------------------------------------------------------
 */	
	/* obtener parametros de $_GET */
	public function get($key = null, $default = null)
	{
		if(!isset($key))
			return $_GET;
		
		return array_key_exists($key, $_GET)? $_GET[$key] : $default;
	}
	/* obtener parametros de $_POST */
	public function post($key = null, $default = null)
	{
		if(!isset($key))
			return $_POST;
		
		return array_key_exists($key, $_POST)? $_POST[$key] : $default;
	}
	/* obtener parametros de $_REQUEST */
	public function request($key = null, $default = null)
	{
		if(!isset($key))
			return $_REQUEST;
		
		return array_key_exists($key, $_REQUEST)? $_REQUEST[$key] : $default;
	}
	/* obtener parametros de $_FILES */
	public function files($key = null, $default = null)
    {
    	if(!isset($key))
			return $_FILES;
		
        return array_key_exists($key, $_FILES)? $_FILES[$key]: $default;
    }

/* 2.- Obtener metodo: ------------------------------------------------------------------- 
 */
	/* obtener el metodo priorizando el paso atraves de $_POST['_method'] */
	public function getMetodo()
    {
    	if(!isset($this->metodo)){
        	if (isset($_POST['_method'])) {
        	    $this->metodo = strtoupper($_POST['_method']);
        	} elseif (isset($_SERVER['HTTP_X_HTTP_METHOD_OVERRIDE'])) {
        	    $this->metodo = strtoupper($_SERVER['HTTP_X_HTTP_METHOD_OVERRIDE']);
        	} else {
        	    $this->metodo = isset($_SERVER['REQUEST_METHOD']) ? strtoupper($_SERVER['REQUEST_METHOD']) : 'GET';
        	}
		}
		return $this->metodo;
    }

	/* Comprobar si el metodo es GET */
	public function isGet()
	{
		return $this->metodo == 'GET';
	}
	/* Comprobar si el metodo es POST */
	public function isPost()
	{
		return $this->metodo == 'POST';
	}
	/* Comprobar si el metodo es PUT */
	public function isPut()
	{
		return $this->metodo == 'PUT';
	}
	/* Comprobar si el metodo es DELETE */
	public function isDelete()
	{
		return $this->metodo == 'DELETE';
	}
	/* Comprobar si el metodo es HEAD */
	public function isHead()
	{
		return $this->metodo == 'HEAD';
	}
	/* Comprobar si el metodo es OPTIONS */
	public function isOptions()
	{
		return $this->metodo == 'OPTIONS';
	}
	/* Comprobar si el metodo es PATCH */
	public function isPatch()
	{
		return $this->metodo == 'PATCH';
	}
	 
	 /* Comprobar si el metodo es AJAX */
	public function isAjax()
	{
		return (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
	}
	/* Comprobar si es una conexion segura "https" */
	public function isSeguro()
    {
    	if(!isset($this->seguro)){
    		$this->seguro = isset($_SERVER['HTTPS']) && (strcasecmp($_SERVER['HTTPS'], 'on') === 0 || $_SERVER['HTTPS'] == 1)
 	           || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strcasecmp($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') === 0;
    	}
        return $this->seguro;
    }

/* 3.- Obtener informacion de la URL: -------------------------------------------------------  
 */

	/* Devuelve HostInfo "http://ejemplo.com" */
    public function getHostInfo()
    {
        if (!isset($this->hostInfo)) {
        	$seguro = $this->isSeguro();
            $http = $seguro? 'https' : 'http';
            if (isset($_SERVER['HTTP_HOST'])) {
                $this->hostInfo = $http . '://' . $_SERVER['HTTP_HOST'];
            } else {
                $this->hostInfo = $http . '://' . $_SERVER['SERVER_NAME'];
                if (($this->port !== 80 && !$seguro) || ($this->port !== 443 && $seguro)) {
                    $this->hostInfo .= ':' . $this->port;
                }
            }
        }
        return $this->hostInfo;
    }
	
	/* Devuelve url "/admin/index.php/path/?id=123" */
	public function getUrl()
    {
    	if(!isset($this->url)){
    		if (isset($_SERVER['HTTP_X_REWRITE_URL'])) { // IIS
        	    $requestUri = $_SERVER['HTTP_X_REWRITE_URL'];
        	} elseif (isset($_SERVER['REQUEST_URI'])) {
        	    $requestUri = $_SERVER['REQUEST_URI'];
        	    if ($requestUri !== '' && $requestUri[0] !== '/') {
        	        $requestUri = preg_replace('/^(http|https):\/\/[^\/]+/i', '', $requestUri);
        	    }
        	} elseif (isset($_SERVER['ORIG_PATH_INFO'])) { // IIS 5.0 CGI
        	    $requestUri = $_SERVER['ORIG_PATH_INFO'];
        	    if (!empty($_SERVER['QUERY_STRING'])) {
        	        $requestUri .= '?' . $_SERVER['QUERY_STRING'];
        	    }
        	} else {
        	    throw new Exception('Unable to determine the request URI.');
        	}
			
    		$this->url = $requestUri;
    	}
        return $this->url;
    }
	
    /* Devuelve toda la url "http://ejemplo.com/admin/index.php/path/?id=123" */
	public function getAbsoluteUrl()
    {
        return $this->getHostInfo() . $this->getUrl();
    }
	
	/* Devuelve toda la ruta del archivo actual */
	public function getScriptFile()
    {
        return $_SERVER['SCRIPT_FILENAME'];
    }
	
	/* Devuelve la ruta hasta el archivo actual "/admin/index.php" */
	public function getScriptUrl()
    {
        if (!isset($this->scriptUrl)) {
            $scriptFile = $this->getScriptFile();
            $scriptName = basename($scriptFile);
            if (basename($_SERVER['SCRIPT_NAME']) === $scriptName) {
                $this->scriptUrl = $_SERVER['SCRIPT_NAME'];
            } elseif (basename($_SERVER['PHP_SELF']) === $scriptName) {
                $this->scriptUrl = $_SERVER['PHP_SELF'];
            } elseif (isset($_SERVER['ORIG_SCRIPT_NAME']) && basename($_SERVER['ORIG_SCRIPT_NAME']) === $scriptName) {
                $this->scriptUrl = $_SERVER['ORIG_SCRIPT_NAME'];
            } elseif (($pos = strpos($_SERVER['PHP_SELF'], '/' . $scriptName)) !== false) {
                $this->scriptUrl = substr($_SERVER['SCRIPT_NAME'], 0, $pos) . '/' . $scriptName;
            } elseif (!empty($_SERVER['DOCUMENT_ROOT']) && strpos($scriptFile, $_SERVER['DOCUMENT_ROOT']) === 0) {
                $this->scriptUrl = str_replace('\\', '/', str_replace($_SERVER['DOCUMENT_ROOT'], '', $scriptFile));
            } else {
                throw new Exception('Unable to determine the entry script URL.');
            }
        }
        return $this->scriptUrl;
    }
	
	/* Devuelve la ruta base del archivo actual "/admin" */
	public function getBaseUrl()
    {
        if(!isset($this->baseUrl)) {
            $this->baseUrl = rtrim(dirname($this->getScriptUrl()), '\\/');
        }
        return $this->baseUrl;
    }
	
	/* Devuelve el PathInfo "path/" */
	public function getPathInfo()
    {
    	if(!isset($this->pathInfo)){
    		$pathInfo = $this->getUrl();
        	
        	// quitar query
        	if (($pos = strpos($pathInfo, '?')) !== false) {
        	    $pathInfo = substr($pathInfo, 0, $pos);
        	}
        	
        	// Multilingual form encoding
			$pathInfo = urldecode($pathInfo);
			// http://w3.org/International/questions/qa-forms-utf-8.html
        	if (!preg_match('%^(?:
            	[\x09\x0A\x0D\x20-\x7E]              # ASCII
           		| [\xC2-\xDF][\x80-\xBF]             # non-overlong 2-byte
        	    | \xE0[\xA0-\xBF][\x80-\xBF]         # excluding overlongs
        	    | [\xE1-\xEC\xEE\xEF][\x80-\xBF]{2}  # straight 3-byte
        	    | \xED[\x80-\x9F][\x80-\xBF]         # excluding surrogates
        	    | \xF0[\x90-\xBF][\x80-\xBF]{2}      # planes 1-3
        	    | [\xF1-\xF3][\x80-\xBF]{3}          # planes 4-15
        	    | \xF4[\x80-\x8F][\x80-\xBF]{2}      # plane 16
        	    )*$%xs', $pathInfo)
        	) {
        	    $pathInfo = utf8_encode($pathInfo);
        	}
			
			// quitar ruta del archivo actual
			$scriptUrl = $this->getScriptUrl();
        	$baseUrl = $this->getBaseUrl();
        	if (strpos($pathInfo, $scriptUrl) === 0) {
        	    $pathInfo = substr($pathInfo, strlen($scriptUrl));
        	} elseif ($baseUrl === '' || strpos($pathInfo, $baseUrl) === 0) {
        	    $pathInfo = substr($pathInfo, strlen($baseUrl));
        	} elseif (isset($_SERVER['PHP_SELF']) && strpos($_SERVER['PHP_SELF'], $scriptUrl) === 0) {
        	    $pathInfo = substr($_SERVER['PHP_SELF'], strlen($scriptUrl));
        	} else {
        	    throw new Exception('Unable to determine the path info of the current request.');
        	}
			
			// quitar la primera "/"
			if (substr($pathInfo, 0, 1) === '/') {
        	    $pathInfo = substr($pathInfo, 1);
        	}
        	$this->pathInfo = (string) $pathInfo;
    	}
        return $this->pathInfo;
    }
	
	/* Devuelve QueryString "id=123&nombre=pedro" */
	public function getQueryString()
    {
        return isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '';
    }
	
	/* Devuelve ServerName "ejemplo.com" */
	public function getServerName()
    {
        return $_SERVER['SERVER_NAME'];
    }

	/* Devuelve ServerPort "80" */
	public function getServerPort()
    {
    	if(!isset($this->serverPort)){
    		$this->serverPort = (int)(isset($_SERVER['SERVER_PORT'])? $_SERVER['SERVER_PORT'] : ($this->isSeguro()? 443: 80));
    	}
        return $this->serverPort;
    }

/* 4.- Obtener Http Headers: ----------------------------------------------------------------
 */
 
 
 
 /* 5.- Obtener informacion del cliente: ----------------------------------------------------
  */
  
  	/* obtener refer*/
  	public function getReferente()
    {
        return isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null;
    }
  	
  	/* obtener UserAgent si esta disponible */
	public function getUserAgent()
    {
        return isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : null;
    }
	
	/* obtener la direccion IP si esta disponible */
	public function getUserIP()
    {
        return isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : null;
    }
	
	/* obtener el host si esta disponible */
	public function getUserHost()
    {
        return isset($_SERVER['REMOTE_HOST']) ? $_SERVER['REMOTE_HOST'] : null;
    }

	/* obtener usuario del HTTP autentificacion si esta disponible */
	public function getAuthUser()
    {
        return isset($_SERVER['PHP_AUTH_USER']) ? $_SERVER['PHP_AUTH_USER'] : null;
    }
	
	/* obtener clave del HTTP autentificacion si esta disponible */
	public function getAuthPassword()
    {
        return isset($_SERVER['PHP_AUTH_PW']) ? $_SERVER['PHP_AUTH_PW'] : null;
    }
}