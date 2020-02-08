<?php


namespace App\Tests;


use App\Entity\File;
use PHPUnit\Framework\TestCase;

class FileTest extends TestCase
{
    /**
     * Checks whether the getName method returns the name set with setName.
     */
    public function testNameSetAndGet()
    {
        $fileName = 'testFile';
        $file = new File();
        $file->setName($fileName);
        self::assertEquals($fileName, $file->getName());
    }
}