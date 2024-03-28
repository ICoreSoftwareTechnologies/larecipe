<?php

namespace SaleemHadad\LaRecipe\Tests\Unit;

use SaleemHadad\LaRecipe\Tests\TestCase;
use SaleemHadad\LaRecipe\Models\Version;
use SaleemHadad\LaRecipe\Models\Document;

class VersionTest extends TestCase
{
    /** @test */
    public function it_has_title()
    {
        $sut = Version::create(['title' => 'v1']);

        $this->assertEquals('v1', $sut->title);
    }

    /** @test */
    public function it_has_empty_documents_by_default()
    {
        $sut = Version::create();

        $this->assertEmpty($sut->getDocuments());
    }

    /** @test */
    public function it_can_add_document()
    {
        $sut = Version::create();

        $sut->addDocument(Document::create());

        $this->assertCount(1, $sut->getDocuments());
    }
}
