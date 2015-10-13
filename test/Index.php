<?php //-->
/**
 * This file is part of the Eden PHP Library.
 * (c) 2014-2016 Openovate Labs
 *
 * Copyright and license information can be found at LICENSE.txt
 * distributed with this package.
 */

class Eden_Array_Test_Index extends PHPUnit_Framework_TestCase
{	
    public function testCopy() 
	{
        $data   = array('first' => 'bar', 'second' => 'foo');
        $class  = eden('array')->set($data)->copy('first', 'third');
		
        $this->assertInstanceOf('Eden_Array_Index', $class);
        $this->assertArrayHasKey('third', $class->get());
    }

    public function testCount() 
	{
        $data   = array('bar', 'foo');
        $num    = eden('array')->set($data)->count();
        $this->assertCount($num, $data);
    }

    public function testCut() 
	{
        $data   = array('bar', 'foo');
        $class  = eden('array')->set($data)->cut(1);
        $this->assertInstanceOf('Eden_Array_Index', $class);
        $this->assertNotContains('foo', $class->get());
    }

    public function testEach() 
	{
        $data   = array('bar', 'foo');
        $test   = $this;
        $class  = eden('array')->set($data)->each(
            function ($key, $value) use ($test, $data)
            {
                $test->assertEquals($data[$key], $value);
            }
        );
		
        $this->assertInstanceOf('Eden_Array_Index', $class);
    }

    public function testIsEmpty() 
	{
        $data   = array();
        $result = eden('array')->set($data)->isEmpty();
        $this->assertTrue($result);
    }

    public function testPaste() 
	{
        $data   = array('bar', 'foo');
        $class  = eden('array')->set($data);
        $this->assertInstanceOf('Eden_Array_Index', $class->paste(0, 'box', 'boo'));
        $this->assertArrayHasKey('boo',$class->get());
    }

    public function testSerialize() 
	{
        $data   = array('foo', 'bar');
        $class  = eden('array')->set($data);
        $this->assertJsonStringEqualsJsonString(json_encode($class->get()), $class->serialize());
    }

    public function testSet() 
	{
        $data       = array('foo', 'bar');
        $somedata   = array('box', 'boo');
        $class      = eden('array')->set($data);
        $this->assertInstanceOf('Eden_Array_Index', $class->set($somedata));
		
		$this->assertEquals(2, eden('array')->set(1, 2, 3)->cut(1)->count());
    }

    public function testUnSerialize() 
	{
        $somedata       = array('a' => 'foo', 'b' => 'bar');
        $serialized     = '{"a":"foo","b":"bar"}';
        $class          = eden('array')->set($somedata)->unserialize($serialized);
        $this->assertInstanceOf('Eden_Array_Index', $class);
        $this->assertJsonStringEqualsJsonString(json_encode($somedata), (string) $class);
    }

    public function testArrayAccess() 
	{
        $data = eden('array')->set(array('name' => 'John', 'age' => 31));

        $this->assertFalse(isset($data[2]));
        $this->assertEquals(31, $data['age']);
    }

    public function testIterable() 
	{
        $data   = array('foo', 'bar');
        $class  = eden('array')->set($data);

        foreach($class as $key => $value) {
            $this->assertEquals($class->current(), $value);
        }
    }

}