<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder40d07 = null;
    private $initializerbe2a5 = null;
    private static $publicPropertiesb13e5 = [
        
    ];
    public function getConnection()
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'getConnection', array(), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'getMetadataFactory', array(), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'getExpressionBuilder', array(), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'beginTransaction', array(), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'getCache', array(), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->getCache();
    }
    public function transactional($func)
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'transactional', array('func' => $func), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'commit', array(), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->commit();
    }
    public function rollback()
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'rollback', array(), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'getClassMetadata', array('className' => $className), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'createQuery', array('dql' => $dql), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'createNamedQuery', array('name' => $name), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'createQueryBuilder', array(), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'flush', array('entity' => $entity), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'clear', array('entityName' => $entityName), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->clear($entityName);
    }
    public function close()
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'close', array(), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->close();
    }
    public function persist($entity)
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'persist', array('entity' => $entity), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'remove', array('entity' => $entity), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'refresh', array('entity' => $entity), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'detach', array('entity' => $entity), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'merge', array('entity' => $entity), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'contains', array('entity' => $entity), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'getEventManager', array(), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'getConfiguration', array(), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'isOpen', array(), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'getUnitOfWork', array(), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'getProxyFactory', array(), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'initializeObject', array('obj' => $obj), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'getFilters', array(), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'isFiltersStateClean', array(), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'hasFilters', array(), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return $this->valueHolder40d07->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerbe2a5 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder40d07) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder40d07 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder40d07->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, '__get', ['name' => $name], $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        if (isset(self::$publicPropertiesb13e5[$name])) {
            return $this->valueHolder40d07->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder40d07;
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
        $targetObject = $this->valueHolder40d07;
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
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder40d07;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder40d07;
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
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, '__isset', array('name' => $name), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder40d07;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder40d07;
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
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, '__unset', array('name' => $name), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder40d07;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder40d07;
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
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, '__clone', array(), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        $this->valueHolder40d07 = clone $this->valueHolder40d07;
    }
    public function __sleep()
    {
        $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, '__sleep', array(), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
        return array('valueHolder40d07');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbe2a5 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbe2a5;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerbe2a5 && ($this->initializerbe2a5->__invoke($valueHolder40d07, $this, 'initializeProxy', array(), $this->initializerbe2a5) || 1) && $this->valueHolder40d07 = $valueHolder40d07;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder40d07;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder40d07;
    }
}
