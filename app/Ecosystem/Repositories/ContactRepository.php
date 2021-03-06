<?php

namespace App\Ecosystem\Repositories;

use App\Ecosystem\Models\Contact;
use InfyOm\Generator\Common\BaseRepository;

class ContactRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'email',
        'phone_number',
        'website',
        'facebook',
        'twitter',
        'instagram'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Contact::class;
    }
}
