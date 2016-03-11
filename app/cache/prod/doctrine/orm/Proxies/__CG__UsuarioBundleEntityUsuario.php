<?php

namespace Proxies\__CG__\UsuarioBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Usuario extends \UsuarioBundle\Entity\Usuario implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'UsuarioBundle\\Entity\\Usuario' . "\0" . 'id', '' . "\0" . 'UsuarioBundle\\Entity\\Usuario' . "\0" . 'rut', '' . "\0" . 'UsuarioBundle\\Entity\\Usuario' . "\0" . 'dv', '' . "\0" . 'UsuarioBundle\\Entity\\Usuario' . "\0" . 'nombres', '' . "\0" . 'UsuarioBundle\\Entity\\Usuario' . "\0" . 'apPat', '' . "\0" . 'UsuarioBundle\\Entity\\Usuario' . "\0" . 'apMat', '' . "\0" . 'UsuarioBundle\\Entity\\Usuario' . "\0" . 'password', '' . "\0" . 'UsuarioBundle\\Entity\\Usuario' . "\0" . 'email', '' . "\0" . 'UsuarioBundle\\Entity\\Usuario' . "\0" . 'imagen', '' . "\0" . 'UsuarioBundle\\Entity\\Usuario' . "\0" . 'imagenTipo', '' . "\0" . 'UsuarioBundle\\Entity\\Usuario' . "\0" . 'path', '' . "\0" . 'UsuarioBundle\\Entity\\Usuario' . "\0" . 'isActive', '' . "\0" . 'UsuarioBundle\\Entity\\Usuario' . "\0" . 'createdAt', '' . "\0" . 'UsuarioBundle\\Entity\\Usuario' . "\0" . 'updatedAt');
        }

        return array('__isInitialized__', '' . "\0" . 'UsuarioBundle\\Entity\\Usuario' . "\0" . 'id', '' . "\0" . 'UsuarioBundle\\Entity\\Usuario' . "\0" . 'rut', '' . "\0" . 'UsuarioBundle\\Entity\\Usuario' . "\0" . 'dv', '' . "\0" . 'UsuarioBundle\\Entity\\Usuario' . "\0" . 'nombres', '' . "\0" . 'UsuarioBundle\\Entity\\Usuario' . "\0" . 'apPat', '' . "\0" . 'UsuarioBundle\\Entity\\Usuario' . "\0" . 'apMat', '' . "\0" . 'UsuarioBundle\\Entity\\Usuario' . "\0" . 'password', '' . "\0" . 'UsuarioBundle\\Entity\\Usuario' . "\0" . 'email', '' . "\0" . 'UsuarioBundle\\Entity\\Usuario' . "\0" . 'imagen', '' . "\0" . 'UsuarioBundle\\Entity\\Usuario' . "\0" . 'imagenTipo', '' . "\0" . 'UsuarioBundle\\Entity\\Usuario' . "\0" . 'path', '' . "\0" . 'UsuarioBundle\\Entity\\Usuario' . "\0" . 'isActive', '' . "\0" . 'UsuarioBundle\\Entity\\Usuario' . "\0" . 'createdAt', '' . "\0" . 'UsuarioBundle\\Entity\\Usuario' . "\0" . 'updatedAt');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Usuario $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setRut($rut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRut', array($rut));

        return parent::setRut($rut);
    }

    /**
     * {@inheritDoc}
     */
    public function getRut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRut', array());

        return parent::getRut();
    }

    /**
     * {@inheritDoc}
     */
    public function setDv($dv)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDv', array($dv));

        return parent::setDv($dv);
    }

    /**
     * {@inheritDoc}
     */
    public function getDv()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDv', array());

        return parent::getDv();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombres($nombres)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombres', array($nombres));

        return parent::setNombres($nombres);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombres()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombres', array());

        return parent::getNombres();
    }

    /**
     * {@inheritDoc}
     */
    public function setApPat($apPat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApPat', array($apPat));

        return parent::setApPat($apPat);
    }

    /**
     * {@inheritDoc}
     */
    public function getApPat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApPat', array());

        return parent::getApPat();
    }

    /**
     * {@inheritDoc}
     */
    public function setApMat($apMat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApMat', array($apMat));

        return parent::setApMat($apMat);
    }

    /**
     * {@inheritDoc}
     */
    public function getApMat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApMat', array());

        return parent::getApMat();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', array($password));

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', array());

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setImagen($imagen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImagen', array($imagen));

        return parent::setImagen($imagen);
    }

    /**
     * {@inheritDoc}
     */
    public function getImagen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImagen', array());

        return parent::getImagen();
    }

    /**
     * {@inheritDoc}
     */
    public function setImagenTipo($imagenTipo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImagenTipo', array($imagenTipo));

        return parent::setImagenTipo($imagenTipo);
    }

    /**
     * {@inheritDoc}
     */
    public function getImagenTipo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImagenTipo', array());

        return parent::getImagenTipo();
    }

    /**
     * {@inheritDoc}
     */
    public function setPath($path)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPath', array($path));

        return parent::setPath($path);
    }

    /**
     * {@inheritDoc}
     */
    public function getPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPath', array());

        return parent::getPath();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsActive($isActive)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsActive', array($isActive));

        return parent::setIsActive($isActive);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsActive', array());

        return parent::getIsActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', array($createdAt));

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', array());

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', array($updatedAt));

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', array());

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAtValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAtValue', array());

        return parent::setCreatedAtValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAtValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAtValue', array());

        return parent::setUpdatedAtValue();
    }

}