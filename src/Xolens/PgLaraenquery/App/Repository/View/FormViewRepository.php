<?php

namespace Xolens\PgLaraenquery\App\Repository\View;

use Xolens\PgLaraenquery\App\Model\Form;
use Xolens\PgLaraenquery\App\Model\View\FormView;
use Xolens\PgLaraenquery\App\Repository\FormRepository;
use Xolens\PgLarautil\App\Repository\AbstractReadableRepository;
use Xolens\PgLarautil\App\Util\Model\Filterer;
use Xolens\PgLarautil\App\Util\Model\Sorter;

class FormViewRepository extends AbstractReadableRepository implements FormViewRepositoryContract
{
    public function model(){
        return FormView::class;
    }
}
