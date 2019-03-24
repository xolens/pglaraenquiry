<?php

namespace Xolens\PgLaraenquiry\App\Repository\View;

use Xolens\PgLaraenquiry\App\Model\Participant;
use Xolens\PgLaraenquiry\App\Model\View\ParticipantView;
use Xolens\PgLaraenquiry\App\Repository\ParticipantRepository;
use Xolens\PgLarautil\App\Repository\AbstractReadableRepository;
use Xolens\PgLarautil\App\Util\Model\Filterer;
use Xolens\PgLarautil\App\Util\Model\Sorter;

class ParticipantViewRepository extends AbstractReadableRepository implements ParticipantViewRepositoryContract
{
    public function model(){
        return ParticipantView::class;
    }
}