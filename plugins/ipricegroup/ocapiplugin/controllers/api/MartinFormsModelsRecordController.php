<?php

namespace IPriceGroup\OcApiPlugin\Controllers\Api;

class MartinFormsModelsRecordController extends BaseApiController
{
    protected $resourceName = 'te';
    protected $modelClass = 'Martin\Forms\Models\Record';
    protected $eagerLoad = ['model_class'];
}
