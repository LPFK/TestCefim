<?php

namespace ContainerQYOHBR0;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfac81 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3fed1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf9223 = [
        
    ];

    public function getConnection()
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'getConnection', array(), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'getMetadataFactory', array(), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'getExpressionBuilder', array(), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'beginTransaction', array(), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'getCache', array(), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'transactional', array('func' => $func), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'commit', array(), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->commit();
    }

    public function rollback()
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'rollback', array(), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'getClassMetadata', array('className' => $className), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'createQuery', array('dql' => $dql), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'createNamedQuery', array('name' => $name), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'createQueryBuilder', array(), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'flush', array('entity' => $entity), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'clear', array('entityName' => $entityName), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->clear($entityName);
    }

    public function close()
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'close', array(), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->close();
    }

    public function persist($entity)
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'persist', array('entity' => $entity), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'remove', array('entity' => $entity), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'refresh', array('entity' => $entity), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'detach', array('entity' => $entity), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'merge', array('entity' => $entity), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'contains', array('entity' => $entity), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'getEventManager', array(), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'getConfiguration', array(), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'isOpen', array(), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'getUnitOfWork', array(), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'getProxyFactory', array(), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'initializeObject', array('obj' => $obj), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'getFilters', array(), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'isFiltersStateClean', array(), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'hasFilters', array(), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return $this->valueHolderfac81->hasFilters();
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

        $instance->initializer3fed1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfac81) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfac81 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfac81->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, '__get', ['name' => $name], $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        if (isset(self::$publicPropertiesf9223[$name])) {
            return $this->valueHolderfac81->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfac81;

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

        $targetObject = $this->valueHolderfac81;
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
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfac81;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfac81;
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
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, '__isset', array('name' => $name), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfac81;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfac81;
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
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, '__unset', array('name' => $name), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfac81;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfac81;
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
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, '__clone', array(), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        $this->valueHolderfac81 = clone $this->valueHolderfac81;
    }

    public function __sleep()
    {
        $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, '__sleep', array(), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;

        return array('valueHolderfac81');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3fed1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3fed1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3fed1 && ($this->initializer3fed1->__invoke($valueHolderfac81, $this, 'initializeProxy', array(), $this->initializer3fed1) || 1) && $this->valueHolderfac81 = $valueHolderfac81;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfac81;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfac81;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
