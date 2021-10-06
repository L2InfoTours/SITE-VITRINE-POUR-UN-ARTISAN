<?php

namespace Container2OXpDo3;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3320d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer84fe4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties31c5d = [
        
    ];

    public function getConnection()
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'getConnection', array(), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'getMetadataFactory', array(), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'getExpressionBuilder', array(), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'beginTransaction', array(), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'getCache', array(), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'transactional', array('func' => $func), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->transactional($func);
    }

    public function commit()
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'commit', array(), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->commit();
    }

    public function rollback()
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'rollback', array(), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'getClassMetadata', array('className' => $className), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'createQuery', array('dql' => $dql), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'createNamedQuery', array('name' => $name), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'createQueryBuilder', array(), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'flush', array('entity' => $entity), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'clear', array('entityName' => $entityName), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->clear($entityName);
    }

    public function close()
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'close', array(), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->close();
    }

    public function persist($entity)
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'persist', array('entity' => $entity), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'remove', array('entity' => $entity), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'refresh', array('entity' => $entity), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'detach', array('entity' => $entity), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'merge', array('entity' => $entity), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'contains', array('entity' => $entity), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'getEventManager', array(), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'getConfiguration', array(), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'isOpen', array(), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'getUnitOfWork', array(), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'getProxyFactory', array(), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'initializeObject', array('obj' => $obj), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'getFilters', array(), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'isFiltersStateClean', array(), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'hasFilters', array(), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return $this->valueHolder3320d->hasFilters();
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

        $instance->initializer84fe4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3320d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3320d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3320d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, '__get', ['name' => $name], $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        if (isset(self::$publicProperties31c5d[$name])) {
            return $this->valueHolder3320d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3320d;

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

        $targetObject = $this->valueHolder3320d;
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
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3320d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3320d;
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
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, '__isset', array('name' => $name), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3320d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3320d;
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
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, '__unset', array('name' => $name), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3320d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3320d;
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
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, '__clone', array(), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        $this->valueHolder3320d = clone $this->valueHolder3320d;
    }

    public function __sleep()
    {
        $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, '__sleep', array(), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;

        return array('valueHolder3320d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer84fe4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer84fe4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer84fe4 && ($this->initializer84fe4->__invoke($valueHolder3320d, $this, 'initializeProxy', array(), $this->initializer84fe4) || 1) && $this->valueHolder3320d = $valueHolder3320d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3320d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3320d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
