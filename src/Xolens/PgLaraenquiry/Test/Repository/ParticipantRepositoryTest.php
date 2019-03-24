<?php

namespace Xolens\PgLaraenquiry\Test\Repository;

use Xolens\PgLaraenquiry\App\Model\Participant;
use Xolens\PgLaraenquiry\App\Repository\ParticipantRepository;
use Xolens\PgLarautil\App\Util\Model\Sorter;
use Xolens\PgLarautil\App\Util\Model\Filterer;
use Xolens\PgLaraenquiry\Test\WritableTestPgLaraenquiryBase;

final class ParticipantRepositoryTest extends WritableTestPgLaraenquiryBase
{
    /**
     * Setup the test environment.
     */
    protected function setUp(): void{
        parent::setUp();
        $this->artisan('migrate');
        $repo = new ParticipantRepository();
        $this->repo = $repo;
    }

    /**
     * @test
     */
    public function test_make(){
        $item = factory(Participant::class)->make();
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
            $data = factory(Participant::class)->make();
            $item = $this->repository()->create($data);
            $generatedItemsId[] = $item->response()->id;
        }
        $this->assertEquals(count($generatedItemsId), $toGenerateCount);
        return $generatedItemsId;
    }
}   
