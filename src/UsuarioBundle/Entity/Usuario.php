<?php

namespace UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File ; 
use Vich\UploaderBundle\Mapping\Annotation  as  Vich ;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity(repositoryClass="UsuarioBundle\Repository\UsuarioRepository")
 * @ORM\HasLifecycleCallbacks()
 * @Vich\Uploadable
 */
class Usuario
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="rut", type="integer", unique=true)
     */
    private $rut;

    /**
     * @var string
     *
     * @ORM\Column(name="dv", type="string", length=1)
     */
    private $dv;

    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", length=255)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="apPat", type="string", length=50)
     */
    private $apPat;

    /**
     * @var string
     *
     * @ORM\Column(name="apMat", type="string", length=50)
     */
    private $apMat;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="blob")
     */
    private $imagen;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen_tipo", type="string", length=50)
     */
    private $imagenTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="text")
     */
    private $path;
    
    
    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="usuario_file", fileNameProperty="imageName")
     * 
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $imageName;
    

    /**
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set rut
     *
     * @param integer $rut
     * @return Usuario
     */
    public function setRut($rut)
    {
        $this->rut = $rut;

        return $this;
    }

    /**
     * Get rut
     *
     * @return integer 
     */
    public function getRut()
    {
        return $this->rut;
    }

    /**
     * Set dv
     *
     * @param string $dv
     * @return Usuario
     */
    public function setDv($dv)
    {
        $this->dv = $dv;

        return $this;
    }

    /**
     * Get dv
     *
     * @return string 
     */
    public function getDv()
    {
        return $this->dv;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     * @return Usuario
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string 
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set apPat
     *
     * @param string $apPat
     * @return Usuario
     */
    public function setApPat($apPat)
    {
        $this->apPat = $apPat;

        return $this;
    }

    /**
     * Get apPat
     *
     * @return string 
     */
    public function getApPat()
    {
        return $this->apPat;
    }

    /**
     * Set apMat
     *
     * @param string $apMat
     * @return Usuario
     */
    public function setApMat($apMat)
    {
        $this->apMat = $apMat;

        return $this;
    }

    /**
     * Get apMat
     *
     * @return string 
     */
    public function getApMat()
    {
        return $this->apMat;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Usuario
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set imagenTipo
     *
     * @param string $imagenTipo
     * @return Usuario
     */
    public function setImagenTipo($imagenTipo)
    {
        $this->imagenTipo = $imagenTipo;

        return $this;
    }

    /**
     * Get imagenTipo
     *
     * @return string 
     */
    public function getImagenTipo()
    {
        return $this->imagenTipo;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Usuario
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get nombreFile
     *
     * @return string 
     */
    public function getNombreFile()
    {
        return $this->path;
    }
    
    
    /**
     * Set nombrefile
     *
     * @param string $path
     * @return Usuario
     */
    public function setNombreFile($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return Usuario
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Usuario
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Usuario
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        $this->createdAt = new \DateTime();
    }
    
    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        $this->updatedAt = new \DateTime();
    }
    
    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     * 
     * Si sube un archivo manualmente (es decir, no utilizando Symfony Form) Asegurate de llamar la instancia
     * 'UploadedFile' en este setter para desencadenar la actualización. Si este
     * parámetro de configuración del paquete 'inject_on_load' está establecida en 'true' este setter
     * debe ser capaz de aceptar una instancia de 'Archivo' como el paquete uno inyecta aquí
     * durante la hidratación de la doctrine.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Product
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * @return File
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param string $imageName
     *
     * @return Product
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageName()
    {
        return $this->imageName;
    }

}
