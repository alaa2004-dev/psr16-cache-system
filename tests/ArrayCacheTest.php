<?php

namespace Tests;

use App\ArrayCache;
use PHPUnit\Framework\TestCase;

class ArrayCacheTest extends TestCase
{
    private ArrayCache $cache;

    protected function setUp(): void
    {
        $this->cache = new ArrayCache();
    }

    public function testSetAndGet(): void
    {
        $this->cache->set('key', 'value');
        $this->assertEquals('value', $this->cache->get('key'));
    }

    public function testGetDefault(): void
    {
        $this->assertEquals('default', $this->cache->get('non_existent', 'default'));
    }

    public function testDelete(): void
    {
        $this->cache->set('key', 'value');
        $this->cache->delete('key');
        $this->assertFalse($this->cache->has('key'));
    }

    public function testClear(): void
    {
        $this->cache->set('k1', 'v1');
        $this->cache->set('k2', 'v2');
        $this->cache->clear();
        $this->assertFalse($this->cache->has('k1'));
        $this->assertFalse($this->cache->has('k2'));
    }

    public function testMultiple(): void
    {
        $this->cache->setMultiple(['k1' => 'v1', 'k2' => 'v2']);
        $result = $this->cache->getMultiple(['k1', 'k2']);
        $this->assertEquals(['k1' => 'v1', 'k2' => 'v2'], $result);

        $this->cache->deleteMultiple(['k1', 'k2']);
        $this->assertFalse($this->cache->has('k1'));
    }
}