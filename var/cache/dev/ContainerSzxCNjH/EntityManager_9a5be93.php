<?php

namespace ContainerSzxCNjH;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1b66d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer397f7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd739c = [
        
    ];

    public function getConnection()
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'getConnection', array(), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'getMetadataFactory', array(), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'getExpressionBuilder', array(), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'beginTransaction', array(), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'getCache', array(), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'transactional', array('func' => $func), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->transactional($func);
    }

    public function commit()
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'commit', array(), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->commit();
    }

    public function rollback()
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'rollback', array(), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'getClassMetadata', array('className' => $className), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'createQuery', array('dql' => $dql), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'createNamedQuery', array('name' => $name), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'createQueryBuilder', array(), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'flush', array('entity' => $entity), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'clear', array('entityName' => $entityName), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->clear($entityName);
    }

    public function close()
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'close', array(), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->close();
    }

    public function persist($entity)
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'persist', array('entity' => $entity), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'remove', array('entity' => $entity), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'refresh', array('entity' => $entity), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'detach', array('entity' => $entity), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'merge', array('entity' => $entity), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'contains', array('entity' => $entity), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'getEventManager', array(), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'getConfiguration', array(), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'isOpen', array(), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'getUnitOfWork', array(), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'getProxyFactory', array(), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'initializeObject', array('obj' => $obj), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'getFilters', array(), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'isFiltersStateClean', array(), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'hasFilters', array(), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return $this->valueHolder1b66d->hasFilters();
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

        $instance->initializer397f7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1b66d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1b66d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1b66d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, '__get', ['name' => $name], $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        if (isset(self::$publicPropertiesd739c[$name])) {
            return $this->valueHolder1b66d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1b66d;

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

        $targetObject = $this->valueHolder1b66d;
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
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1b66d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1b66d;
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
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, '__isset', array('name' => $name), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1b66d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1b66d;
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
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, '__unset', array('name' => $name), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1b66d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1b66d;
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
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, '__clone', array(), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        $this->valueHolder1b66d = clone $this->valueHolder1b66d;
    }

    public function __sleep()
    {
        $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, '__sleep', array(), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;

        return array('valueHolder1b66d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer397f7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer397f7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer397f7 && ($this->initializer397f7->__invoke($valueHolder1b66d, $this, 'initializeProxy', array(), $this->initializer397f7) || 1) && $this->valueHolder1b66d = $valueHolder1b66d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1b66d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1b66d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
