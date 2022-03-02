<?php

namespace ContainerX3zITb3;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbae1a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfa634 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1e40b = [
        
    ];

    public function getConnection()
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'getConnection', array(), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'getMetadataFactory', array(), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'getExpressionBuilder', array(), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'beginTransaction', array(), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'getCache', array(), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'transactional', array('func' => $func), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'wrapInTransaction', array('func' => $func), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'commit', array(), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->commit();
    }

    public function rollback()
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'rollback', array(), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'getClassMetadata', array('className' => $className), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'createQuery', array('dql' => $dql), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'createNamedQuery', array('name' => $name), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'createQueryBuilder', array(), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'flush', array('entity' => $entity), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'clear', array('entityName' => $entityName), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->clear($entityName);
    }

    public function close()
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'close', array(), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->close();
    }

    public function persist($entity)
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'persist', array('entity' => $entity), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'remove', array('entity' => $entity), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'refresh', array('entity' => $entity), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'detach', array('entity' => $entity), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'merge', array('entity' => $entity), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'contains', array('entity' => $entity), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'getEventManager', array(), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'getConfiguration', array(), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'isOpen', array(), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'getUnitOfWork', array(), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'getProxyFactory', array(), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'initializeObject', array('obj' => $obj), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'getFilters', array(), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'isFiltersStateClean', array(), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'hasFilters', array(), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return $this->valueHolderbae1a->hasFilters();
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

        $instance->initializerfa634 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderbae1a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbae1a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbae1a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, '__get', ['name' => $name], $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        if (isset(self::$publicProperties1e40b[$name])) {
            return $this->valueHolderbae1a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbae1a;

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

        $targetObject = $this->valueHolderbae1a;
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
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbae1a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbae1a;
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
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, '__isset', array('name' => $name), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbae1a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbae1a;
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
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, '__unset', array('name' => $name), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbae1a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbae1a;
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
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, '__clone', array(), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        $this->valueHolderbae1a = clone $this->valueHolderbae1a;
    }

    public function __sleep()
    {
        $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, '__sleep', array(), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;

        return array('valueHolderbae1a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfa634 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfa634;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfa634 && ($this->initializerfa634->__invoke($valueHolderbae1a, $this, 'initializeProxy', array(), $this->initializerfa634) || 1) && $this->valueHolderbae1a = $valueHolderbae1a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbae1a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbae1a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
