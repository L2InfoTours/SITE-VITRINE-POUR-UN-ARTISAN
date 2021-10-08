<?php

namespace ContainerDcOyxF0;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercd7fa = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer662df = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5bb92 = [
        
    ];

    public function getConnection()
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'getConnection', array(), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'getMetadataFactory', array(), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'getExpressionBuilder', array(), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'beginTransaction', array(), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'getCache', array(), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->getCache();
    }

    public function transactional($func)
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'transactional', array('func' => $func), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->transactional($func);
    }

    public function commit()
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'commit', array(), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->commit();
    }

    public function rollback()
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'rollback', array(), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'getClassMetadata', array('className' => $className), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'createQuery', array('dql' => $dql), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'createNamedQuery', array('name' => $name), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'createQueryBuilder', array(), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'flush', array('entity' => $entity), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'clear', array('entityName' => $entityName), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->clear($entityName);
    }

    public function close()
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'close', array(), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->close();
    }

    public function persist($entity)
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'persist', array('entity' => $entity), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'remove', array('entity' => $entity), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'refresh', array('entity' => $entity), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'detach', array('entity' => $entity), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'merge', array('entity' => $entity), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'getRepository', array('entityName' => $entityName), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'contains', array('entity' => $entity), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'getEventManager', array(), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'getConfiguration', array(), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'isOpen', array(), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'getUnitOfWork', array(), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'getProxyFactory', array(), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'initializeObject', array('obj' => $obj), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'getFilters', array(), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'isFiltersStateClean', array(), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'hasFilters', array(), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return $this->valueHoldercd7fa->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer662df = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldercd7fa) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercd7fa = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercd7fa->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, '__get', ['name' => $name], $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        if (isset(self::$publicProperties5bb92[$name])) {
            return $this->valueHoldercd7fa->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercd7fa;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercd7fa;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercd7fa;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercd7fa;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, '__isset', array('name' => $name), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercd7fa;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercd7fa;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, '__unset', array('name' => $name), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercd7fa;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercd7fa;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, '__clone', array(), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        $this->valueHoldercd7fa = clone $this->valueHoldercd7fa;
    }

    public function __sleep()
    {
        $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, '__sleep', array(), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;

        return array('valueHoldercd7fa');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer662df = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer662df;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer662df && ($this->initializer662df->__invoke($valueHoldercd7fa, $this, 'initializeProxy', array(), $this->initializer662df) || 1) && $this->valueHoldercd7fa = $valueHoldercd7fa;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercd7fa;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercd7fa;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
