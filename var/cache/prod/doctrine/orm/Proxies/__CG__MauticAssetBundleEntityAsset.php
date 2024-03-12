<?php

namespace Proxies\__CG__\Mautic\AssetBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Asset extends \Mautic\AssetBundle\Entity\Asset implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'id', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'title', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'description', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'storageLocation', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'path', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'remotePath', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'originalFileName', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'file', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'uploadDir', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'maxSize', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'temp', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'tempId', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'tempName', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'alias', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'language', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'publishUp', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'publishDown', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'downloadCount', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'uniqueDownloadCount', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'revision', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'category', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'extension', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'mime', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'size', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'downloadUrl', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'disallow', 'changes', 'new', 'deletedId', 'pastChanges'];
        }

        return ['__isInitialized__', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'id', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'title', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'description', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'storageLocation', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'path', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'remotePath', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'originalFileName', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'file', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'uploadDir', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'maxSize', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'temp', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'tempId', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'tempName', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'alias', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'language', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'publishUp', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'publishDown', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'downloadCount', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'uniqueDownloadCount', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'revision', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'category', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'extension', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'mime', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'size', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'downloadUrl', '' . "\0" . 'Mautic\\AssetBundle\\Entity\\Asset' . "\0" . 'disallow', 'changes', 'new', 'deletedId', 'pastChanges'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Asset $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);

        parent::__clone();
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setFile(\Symfony\Component\HttpFoundation\File\File $file = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFile', [$file]);

        return parent::setFile($file);
    }

    /**
     * {@inheritDoc}
     */
    public function getFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFile', []);

        return parent::getFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function getExtension()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExtension', []);

        return parent::getExtension();
    }

    /**
     * {@inheritDoc}
     */
    public function setExtension($extension)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExtension', [$extension]);

        return parent::setExtension($extension);
    }

    /**
     * {@inheritDoc}
     */
    public function getMime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMime', []);

        return parent::getMime();
    }

    /**
     * {@inheritDoc}
     */
    public function setMime($mime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMime', [$mime]);

        return parent::setMime($mime);
    }

    /**
     * {@inheritDoc}
     */
    public function setOriginalFileName($originalFileName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOriginalFileName', [$originalFileName]);

        return parent::setOriginalFileName($originalFileName);
    }

    /**
     * {@inheritDoc}
     */
    public function getOriginalFileName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOriginalFileName', []);

        return parent::getOriginalFileName();
    }

    /**
     * {@inheritDoc}
     */
    public function setStorageLocation($storageLocation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStorageLocation', [$storageLocation]);

        return parent::setStorageLocation($storageLocation);
    }

    /**
     * {@inheritDoc}
     */
    public function getStorageLocation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStorageLocation', []);

        return parent::getStorageLocation();
    }

    /**
     * {@inheritDoc}
     */
    public function setPath($path)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPath', [$path]);

        return parent::setPath($path);
    }

    /**
     * {@inheritDoc}
     */
    public function getPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPath', []);

        return parent::getPath();
    }

    /**
     * {@inheritDoc}
     */
    public function setRemotePath($remotePath)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRemotePath', [$remotePath]);

        return parent::setRemotePath($remotePath);
    }

    /**
     * {@inheritDoc}
     */
    public function getRemotePath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRemotePath', []);

        return parent::getRemotePath();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlias($alias)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlias', [$alias]);

        return parent::setAlias($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlias()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlias', []);

        return parent::getAlias();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublishUp($publishUp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublishUp', [$publishUp]);

        return parent::setPublishUp($publishUp);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishUp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishUp', []);

        return parent::getPublishUp();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublishDown($publishDown)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublishDown', [$publishDown]);

        return parent::setPublishDown($publishDown);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishDown()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishDown', []);

        return parent::getPublishDown();
    }

    /**
     * {@inheritDoc}
     */
    public function setDownloadCount($downloadCount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDownloadCount', [$downloadCount]);

        return parent::setDownloadCount($downloadCount);
    }

    /**
     * {@inheritDoc}
     */
    public function getDownloadCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDownloadCount', []);

        return parent::getDownloadCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setRevision($revision)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRevision', [$revision]);

        return parent::setRevision($revision);
    }

    /**
     * {@inheritDoc}
     */
    public function getRevision()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRevision', []);

        return parent::getRevision();
    }

    /**
     * {@inheritDoc}
     */
    public function setLanguage($language)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLanguage', [$language]);

        return parent::setLanguage($language);
    }

    /**
     * {@inheritDoc}
     */
    public function getLanguage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLanguage', []);

        return parent::getLanguage();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory(\Mautic\CategoryBundle\Entity\Category $category = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', [$category]);

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', []);

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setUniqueDownloadCount($uniqueDownloadCount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUniqueDownloadCount', [$uniqueDownloadCount]);

        return parent::setUniqueDownloadCount($uniqueDownloadCount);
    }

    /**
     * {@inheritDoc}
     */
    public function getUniqueDownloadCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUniqueDownloadCount', []);

        return parent::getUniqueDownloadCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setFileNameFromRemote()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFileNameFromRemote', []);

        return parent::setFileNameFromRemote();
    }

    /**
     * {@inheritDoc}
     */
    public function preUpload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preUpload', []);

        return parent::preUpload();
    }

    /**
     * {@inheritDoc}
     */
    public function upload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'upload', []);

        return parent::upload();
    }

    /**
     * {@inheritDoc}
     */
    public function setFileInfoFromFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFileInfoFromFile', []);

        return parent::setFileInfoFromFile();
    }

    /**
     * {@inheritDoc}
     */
    public function removeUpload($temp = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUpload', [$temp]);

        return parent::removeUpload($temp);
    }

    /**
     * {@inheritDoc}
     */
    public function getAbsolutePath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbsolutePath', []);

        return parent::getAbsolutePath();
    }

    /**
     * {@inheritDoc}
     */
    public function getAbsoluteTempPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbsoluteTempPath', []);

        return parent::getAbsoluteTempPath();
    }

    /**
     * {@inheritDoc}
     */
    public function getAbsoluteTempDir()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbsoluteTempDir', []);

        return parent::getAbsoluteTempDir();
    }

    /**
     * {@inheritDoc}
     */
    public function setUploadDir($uploadDir)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUploadDir', [$uploadDir]);

        return parent::setUploadDir($uploadDir);
    }

    /**
     * {@inheritDoc}
     */
    public function setMaxSize($maxSize)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaxSize', [$maxSize]);

        return parent::setMaxSize($maxSize);
    }

    /**
     * {@inheritDoc}
     */
    public function getFileType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileType', []);

        return parent::getFileType();
    }

    /**
     * {@inheritDoc}
     */
    public function getFileInfo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileInfo', []);

        return parent::getFileInfo();
    }

    /**
     * {@inheritDoc}
     */
    public function getFileMimeType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileMimeType', []);

        return parent::getFileMimeType();
    }

    /**
     * {@inheritDoc}
     */
    public function getIconClass()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIconClass', []);

        return parent::getIconClass();
    }

    /**
     * {@inheritDoc}
     */
    public function isImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isImage', []);

        return parent::isImage();
    }

    /**
     * {@inheritDoc}
     */
    public function getFileExtensions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileExtensions', []);

        return parent::getFileExtensions();
    }

    /**
     * {@inheritDoc}
     */
    public function loadFile($temp = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'loadFile', [$temp]);

        return parent::loadFile($temp);
    }

    /**
     * {@inheritDoc}
     */
    public function getFileContents()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileContents', []);

        return parent::getFileContents();
    }

    /**
     * {@inheritDoc}
     */
    public function getFilePath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFilePath', []);

        return parent::getFilePath();
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function setTempId($tempId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTempId', [$tempId]);

        return parent::setTempId($tempId);
    }

    /**
     * {@inheritDoc}
     */
    public function getTempId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTempId', []);

        return parent::getTempId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTempName($tempName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTempName', [$tempName]);

        return parent::setTempName($tempName);
    }

    /**
     * {@inheritDoc}
     */
    public function getTempName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTempName', []);

        return parent::getTempName();
    }

    /**
     * {@inheritDoc}
     */
    public function getSize($humanReadable = true, $forceUpdate = false, $inUnit = '')
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSize', [$humanReadable, $forceUpdate, $inUnit]);

        return parent::getSize($humanReadable, $forceUpdate, $inUnit);
    }

    /**
     * {@inheritDoc}
     */
    public function setSize($size)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSize', [$size]);

        return parent::setSize($size);
    }

    /**
     * {@inheritDoc}
     */
    public function getDownloadUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDownloadUrl', []);

        return parent::getDownloadUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setDownloadUrl($downloadUrl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDownloadUrl', [$downloadUrl]);

        return parent::setDownloadUrl($downloadUrl);
    }

    /**
     * {@inheritDoc}
     */
    public function isLocal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isLocal', []);

        return parent::isLocal();
    }

    /**
     * {@inheritDoc}
     */
    public function isRemote()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isRemote', []);

        return parent::isRemote();
    }

    /**
     * {@inheritDoc}
     */
    public function getDisallow()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisallow', []);

        return parent::getDisallow();
    }

    /**
     * {@inheritDoc}
     */
    public function setDisallow($disallow)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDisallow', [$disallow]);

        return parent::setDisallow($disallow);
    }

    /**
     * {@inheritDoc}
     */
    public function isPublished($checkPublishStatus = true, $checkCategoryStatus = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPublished', [$checkPublishStatus, $checkCategoryStatus]);

        return parent::isPublished($checkPublishStatus, $checkCategoryStatus);
    }

    /**
     * {@inheritDoc}
     */
    public function setDateAdded($dateAdded)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateAdded', [$dateAdded]);

        return parent::setDateAdded($dateAdded);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateAdded()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateAdded', []);

        return parent::getDateAdded();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateModified($dateModified)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateModified', [$dateModified]);

        return parent::setDateModified($dateModified);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateModified()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateModified', []);

        return parent::getDateModified();
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckedOut($checkedOut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckedOut', [$checkedOut]);

        return parent::setCheckedOut($checkedOut);
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckedOut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckedOut', []);

        return parent::getCheckedOut();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy($createdBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedBy', [$createdBy]);

        return parent::setCreatedBy($createdBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedBy', []);

        return parent::getCreatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setModifiedBy($modifiedBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModifiedBy', [$modifiedBy]);

        return parent::setModifiedBy($modifiedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getModifiedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModifiedBy', []);

        return parent::getModifiedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckedOutBy($checkedOutBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckedOutBy', [$checkedOutBy]);

        return parent::setCheckedOutBy($checkedOutBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckedOutBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckedOutBy', []);

        return parent::getCheckedOutBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsPublished($isPublished)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsPublished', [$isPublished]);

        return parent::setIsPublished($isPublished);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsPublished()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsPublished', []);

        return parent::getIsPublished();
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishStatus', []);

        return parent::getPublishStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function isNew()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isNew', []);

        return parent::isNew();
    }

    /**
     * {@inheritDoc}
     */
    public function setNew()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNew', []);

        return parent::setNew();
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckedOutByUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckedOutByUser', []);

        return parent::getCheckedOutByUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedByUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedByUser', []);

        return parent::getCreatedByUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getModifiedByUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModifiedByUser', []);

        return parent::getModifiedByUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedByUser($createdByUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedByUser', [$createdByUser]);

        return parent::setCreatedByUser($createdByUser);
    }

    /**
     * {@inheritDoc}
     */
    public function setModifiedByUser($modifiedByUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModifiedByUser', [$modifiedByUser]);

        return parent::setModifiedByUser($modifiedByUser);
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckedOutByUser($checkedOutByUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckedOutByUser', [$checkedOutByUser]);

        return parent::setCheckedOutByUser($checkedOutByUser);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($name, $arguments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__call', [$name, $arguments]);

        return parent::__call($name, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getChanges($includePast = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChanges', [$includePast]);

        return parent::getChanges($includePast);
    }

    /**
     * {@inheritDoc}
     */
    public function resetChanges()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resetChanges', []);

        return parent::resetChanges();
    }

    /**
     * {@inheritDoc}
     */
    public function setChanges(array $changes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChanges', [$changes]);

        return parent::setChanges($changes);
    }

}
