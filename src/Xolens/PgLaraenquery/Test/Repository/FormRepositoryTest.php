<?php

namespace Xolens\PgLaraenquery\Test\Repository;

use Xolens\PgLaraenquery\App\Model\Form;
use Xolens\PgLaraenquery\App\Repository\FormRepository;
use Xolens\PgLarautil\App\Util\Model\Sorter;
use Xolens\PgLarautil\App\Util\Model\Filterer;
use Xolens\PgLaraenquery\Test\WritableTestPgLaraenqueryBase;

final class FormRepositoryTest extends WritableTestPgLaraenqueryBase
{
    /**
     * Setup the test environment.
     */
    protected function setUp(): void{
        parent::setUp();
        $this->artisan('migrate');
        $repo = new FormRepository();
        $this->repo = $repo;
    }

    /**
     * @test
     */
    public function test_make(){
        $item = factory(Form::class)->make();
        $this->assertTrue(true);
    }
    
    /** HELPERS FUNCTIONS --------------------------------------------- **/

    public function generateSorter(){
        $sorter = new Sorter();
        $sorter->asc('id');
        return $sorter;
    }

    public function generateFilterer(){
        $filterer = new Filterer();
        $filterer->between('id',[0,14]);
        return $filterer;
    }

    public function generateItems($toGenerateCount){
        $count = $this->repository()->count()->response();
        $generatedItemsId = [];
        for($i=$count; $i<($toGenerateCount+$count); $i++){
            $data = factory(Form::class)->make();
            $item = $this->repository()->create($data);
            $generatedItemsId[] = $item->response()->id;
        }
        $this->assertEquals(count($generatedItemsId), $toGenerateCount);
        return $generatedItemsId;
    }
}   
